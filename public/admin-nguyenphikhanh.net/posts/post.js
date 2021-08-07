$(function(){
    $('input[name="tags[]"]').amsifySuggestags({
        type :'bootstrap'
    });
})

$(document).ready(function () {
    $('.choose_cate').selectize({
        sortField: 'text'
    });
});

