$(function(){
    $('input[name="tags[]"]').amsifySuggestags({  // tags input
        type :'bootstrap'
    });
})

$(document).ready(function () {  // choose category
    $('.choose_cate').selectize({
        sortField: 'text'
    });
});


CKEDITOR.replace('content_editor'); // CKEditor

