
function pridaj(path, alt, id,checked) {


    var z = document.getElementById("inputPictures");
    console.log(checked);
 if (checked=== true) {
        z.innerHTML +=('<div class="col-lg-3 col-md-4 col-xs-6 thumb"  style="margin-bottom: 3px" id="'+id+'d">'+
            '<input type="hidden" name="idecko[]" id="'+id+'i" value="'+id+'" required>\n'+
            ' <img src="'+path+'" class="img-fluid"  alt="'+alt+'" id="'+id+'p">\n'+
        '</div>\n');
 }
 else {
     var oldd=document.getElementById(id+"d");
z.removeChild(oldd);
 }




}

$(function() {
    $('#btnSave').click(function() {
        var x = document.getElementsByName("selectedPictures[]");
        var z = document.getElementById("inputPictures");
        for (i = 0; i < x.length; i++) {
            if (x[i].checked === true) {
                console.log("I've been called true");
                z.append(x.id);
            } else {

            }
        }
        console.log("I've been called end");

    });
});

$(".imgAdd").click(function(){
  $(this).find('.description').before(' <div class="card mr-1" margin="10px">\n' +
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