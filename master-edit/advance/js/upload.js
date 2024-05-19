

$(".imgAdd").click(function(){
    var total = document.getElementById('count').value
    var limit = 50 - total;// to limit upload file
    var galery = document.getElementsByClassName('uploadFile');
    if(galery.length >= limit){
        $(".imgAdd").css('display','none')
        return false;
    }
    if(galery.length >= limit-1){
        $(".imgAdd").css('display','none')
    }
    $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-6 imgUp"><div class="imagePreview"></div><label class="btn btn-primary btn-square">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;" accept="image/jpeg"></label><i class="bx bx-x bx-md del"></i></div>');
  });
  $(document).on("click", "i.del" , function() {
    var limit = 2 // to limit upload file
    var galery = document.getElementsByClassName('uploadFile');
    if(galery.length != limit){
        $(".imgAdd").css('display','inline-block')
    }
    // 	to remove card
    $(this).parent().remove();
    // to clear image
    // $(this).parent().find('.imagePreview').css("background-image","url('')");
  });
  $(function() {
      $(document).on("change",".uploadFile", function()
      {
            var uploadFile = $(this);
          var files = !!this.files ? this.files : [];
          if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
   
          if (/^image/.test( files[0].type)){ // only image file
              var reader = new FileReader(); // instance of the FileReader
              reader.readAsDataURL(files[0]); // read the local file
   
              reader.onloadend = function(){ // set image data as background of div
                  //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
  uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
              }
          }
        
      });
  });