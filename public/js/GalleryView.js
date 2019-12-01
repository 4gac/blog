// $(document).ready(function(){
//
//     loadGallery(true, 'a.thumbnail');
//
//     //This function disables buttons when needed
//     function disableButtons(counter_max, counter_current){
//         $('#show-previous-image, #show-next-image').show();
//         if(counter_max == counter_current){
//             $('#show-next-image').hide();
//         } else if (counter_current == 1){
//             $('#show-previous-image').hide();
//         }
//     }
//
//     /**
//      *
//      * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
//      * @param setClickAttr  Sets the attribute for the click handler.
//      */
//
//     function loadGallery(setIDs, setClickAttr){
//         var current_image,
//             selector,
//             counter = 0;
//
//         $('#show-next-image, #show-previous-image').click(function(){
//             if($(this).attr('id') == 'show-previous-image'){
//                 current_image--;
//             } else {
//                 current_image++;
//             }
//
//             selector = $('[data-image-id="' + current_image + '"]');
//             updateGallery(selector);
//         });
//
//         function updateGallery(selector) {
//             var $sel = selector;
//             current_image = $sel.data('image-id');
//             $('#image-gallery-caption').text($sel.data('caption'));
//             $('#image-gallery-title').text($sel.data('title'));
//             $('#image-gallery-image').attr('src', $sel.data('image'));
//             disableButtons(counter, $sel.data('image-id'));
//         }
//
//         if(setIDs == true){
//             $('[data-image-id]').each(function(){
//                 counter++;
//                 $(this).attr('data-image-id',counter);
//             });
//         }
//         $(setClickAttr).on('click',function(){
//             updateGallery($(this));
//         });
//     }
// });
$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function(){

        $(this).addClass('transition');
    }, function(){

        $(this).removeClass('transition');
    });
});
function myFunction() {
    var x = document.getElementsByName("removeButton");
    var y =document.getElementsByName("uploadImageZone");
    var z =document.getElementsByName("saveButton");

    for (i = 0; i < x.length; i++) {
        if (x[i].style.display === "none") {
            x[i].style.display = "block";
        } else {
            x[i].style.display = "none";
        }
    }
    if (y[0].style.display === "none") {
        y[0].style.display = "block";
    } else {
        y[0].style.display = "none";}
    if (z[0].style.display === "none") {
        z[0].style.display = "block";
    } else {
        z[0].style.display = "none";}


}
$(".imgAdd").click(function(){
    $(this).closest(".row").find('.imgAdd').before(' <div class="card mr-1" margin="10px">\n' +
        '        <div class="col-sm-20 imgUp">\n' +
        '            <div class="imagePreview"></div>\n' +
        '            <label class="btn btn-primary">\n' +
        '                Upload<input type="file" class="uploadFile img" value="Upload Photo" name="picture[]" style="width: 0px;height: 0px;overflow: hidden;" required>\n' +
        '            </label>\n' +
        '            <i class="fa fa-times del"></i>\n' +
        '        </div><!-- col-2 -->\n' +
        '            <div class="card-body">\n' +
        '        <div class="form-group">\n' +
        '            <label for="formGroupExampleInput">Názov</label>\n' +
        '            <input type="text" class="form-control"  name="nazov[]" placeholder="Názov" required>\n' +
        '        </div>\n' +
        '        <div class="form-group">\n' +
        '            <label for="formGroupExampleInput2">Popis</label>\n' +
        '            <input type="text" class="form-control" name="popis[]" placeholder="Popis" required>\n' +
        '        </div>\n' +
        '            </div>\n' +
        '        </div>');
});
$(document).on("click", "i.del" , function() {
    $(this).parent().parent().remove();
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
// Delete record
function deleteReport(delete_id) {
   // $(document).on("click", ".delete", function () {
     //   var delete_id = $(this).data('id');
        var el =document.getElementById(delete_id);
        $.ajax({
            url: 'gallery/delete/' + delete_id,
            type: 'get',
            success: function (response) {
                $(el).parent().remove();
               // alert(response);
            }
        });
   // });
}