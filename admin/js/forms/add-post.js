$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            if(e.target && e.target.result) {
                $("#base64Image").val(e.target.result);
            }
        }        
        reader.readAsDataURL(file);
    });  
});

$('.add-edit-post').each(function(){
    $(this).validate({
        submitHandler: function(form) {
            var $form = $(form),
            $messageError = $form.find('#add-edit-post-error');
            $messageSuccess = $form.find('#add-edit-post-success');

            // Fields Data
            var formData = $form.serializeArray(),
                data = {};

            $(formData).each(function(index, obj){
                data[obj.name] = obj.value;
            });

            // Ajax Submit
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: data
            }).always(function(data, textStatus, jqXHR) {
                data = JSON.parse(data);
                if(!data || data.status != 200) {
                    var errorHtml = "<ul class='mb-0'> <li>Unable to Add Post.</li></ul>";
                    if(data.body && data.body.error) {
                        errorHtml = "<ul class='mb-0'>";
                        for (var i = 0; i < data.body.error.length; i++) {
                            errorHtml += "<li>" + data.body.error[i] + "</li>";
                        }
                    }
                    $messageError.html(errorHtml);
                    $messageError.removeClass('d-none');
                    $messageSuccess.addClass('d-none');
                } else {
                    $messageSuccess.removeClass('d-none');
                    $messageError.addClass('d-none');
                }
            });
        }
    });
});