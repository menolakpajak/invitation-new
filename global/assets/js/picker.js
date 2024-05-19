const map = document.getElementById("mapPicker");
const query = document.querySelector("#mapQuery");
const queryBtn = document.querySelector("#mapQuerySubmit");
const queryList = document.querySelector("#mapQuerySuggestion");
const fullAddress = document.querySelector("#map_desc");

const QUERY_ENDPOINT = "https://nominatim.openstreetmap.org/search?format=jsonv2";
const REVERSE_QUERY_ENDPOINT = "https://nominatim.openstreetmap.org/reverse?format=jsonv2";

// Initialize LocationPicker plugin
const lp = new locationPicker(
    map,
    {
        setCurrentPosition: true, // You can omit this, defaults to true
    },
    {
        zoom: 16, // You can set any google map options here, zoom defaults to 15
    }
);

let timeoutID = 0;
query.addEventListener("input", (e) => {
    clearTimeout(timeoutID);
    timeoutID = setTimeout(runSuggestion, 500);
});

async function runSuggestion() {
    let input = query.value;
    queryList.innerText = "";
    queryList.classList.remove("offed");
    if (!input.length) return queryList.classList.add("offed");

    try {
        let queryData = await (await fetch(QUERY_ENDPOINT + `&q=${input}`)).json();
        if (!queryData.length) return (queryList.innerHTML = `<div class="query-result">No Result</div>`);

        queryData.forEach((e) => {
            let option = document.createElement("div");
            option.innerText = e.display_name;
            option.classList.add("query-result");
            option.onclick = selectSuggestion;
            queryList.appendChild(option);
        });
    } catch (err) {
        console.error(err);
    }
}

queryBtn.addEventListener("click", async (e) => {
    e.preventDefault();
    let input = query.value;
    try {
        let query = (await (await fetch(QUERY_ENDPOINT + `&q=${encodeURIComponent(input)}&limit=5`)).json())?.sort((a, b) => b.importance - a.importance)[0];
        lp.setLocation(parseFloat(query.lat), parseFloat(query.lon));
    } catch (err) {
        console.error(err);
    }
});

function selectSuggestion(e) {
    query.value = e.target.innerText;
    queryList.classList.add("offed");
    query.blur();
    queryBtn.click();
}

// let hiddenMap = new google.maps.Map(document.getElementById("hiddenMap"), {
//     zoom: 16,
//     center: new google.maps.LatLng(-8.5830695, 116.3202515),
// });

// let marker = new google.maps.Marker({
//     position: new google.maps.LatLng(-8.5830695, 116.3202515),
//     map: hiddenMap,
// });

// Listen to button onclick event
// confirmBtn.onclick = function () {
//     // Get current location and show it in HTML
//     var location = lp.getMarkerPosition();
//     onClickPositionView.innerHTML = "The chosen location is " + location.lat + "," + location.lng;
// };

// Listen to map idle event, listening to idle event more accurate than listening to ondrag event
google.maps.event.addListener(lp.map, "idle", function (event) {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    map.dataset.lat = location.lat;
    map.dataset.lon = location.lng;
    // onIdlePositionView.innerHTML = "The chosen location is " + location.lat + "," + location.lng;
});
