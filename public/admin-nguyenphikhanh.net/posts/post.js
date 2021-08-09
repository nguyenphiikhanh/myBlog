

$(document).ready(function () {  // choose category
    $('.choose_cate').selectize({
        sortField: 'text'
    });

    $('.tags_init').selectize({
        sortField: 'text'
    });
});

new FroalaEditor('#content_editor');

