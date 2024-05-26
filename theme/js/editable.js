const editable = document.querySelectorAll("[data-editable]");
const editInitBtn = document.querySelector("[data-edit-init]");
const editSaveBtn = document.querySelector("[data-edit-save]");
const contents = new Map();
let __editState = false;

if (document.body.dataset.mode == "editable") __editable();

function __editable() {
    const btns = document.querySelectorAll("#app :where(button, a, .btn, label)");
    editInitBtn.addEventListener("click", (e) => {
        if (__editState) return;

        contents.clear();
        editable.forEach((element) => {
            let key = element.dataset.editable;
            element.contentEditable = true;
            openInvitation();
            if (!element.dataset.editable || contents.has(key)) console.log(`Editable key conflict ${key}`);
            else contents.set(key, element);

            btns.forEach((btn) => {
                btn.style.pointerEvents = "none";
            });
        });

        e.target.classList.add("hidden");
        editSaveBtn.classList.remove("hidden");
        __editState = true;
    });

    editSaveBtn.addEventListener("click", (e) => {
        if (!__editState) return;

        editable.forEach((element) => {
            element.contentEditable = false;
        });

        btns.forEach((btn) => {
            btn.style.pointerEvents = "unset";
        });

        let _results = Array.from(contents);
        let results = _results.reduce((pre, [key, target]) => {
            let instance = { ...pre };
            let keyed = key.split(".");
            let pointer = instance;
            keyed.forEach((e, i) => {
                if (i == keyed.length - 1) {
                    return (pointer[e] = target.innerText);
                }

                if (!(pointer[e] instanceof Array) && pointer[e] instanceof Object) {
                    pointer = pointer[e];
                    return;
                }

                if (!pointer[e]) {
                    pointer[e] = {};
                    pointer = pointer[e];
                    return;
                }

                pointer = instance;
            });

            return { ...instance };
        }, {});

        console.log(results);

        e.target.classList.add("hidden");
        editInitBtn.classList.remove("hidden");
        __editState = false;
    });
}
