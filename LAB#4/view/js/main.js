$( document ).ready(function() {

    // Add new Article.
    $('.add_new_article').on( 'click', function() {
        $('.articles').addClass('hide');
        $('.new-article').removeClass('hide');
    } );

    // Home button.
    $('.home').on( 'click', function() {
        $('.articles').removeClass('hide');
        $('.new-article').addClass('hide');
    } );

    // Add new Article.
    $('.create-article').on( 'click', function() {
        var title = $('input[name=title]').val();
        var author = $('input[name=author]').val();
        var text = $('textarea').val();

        if( ! title ) { alert( 'Title is empty!' ); return; }
        if( ! author ) { alert( 'Author is empty!' ); return; }
        if( ! text ) { alert( 'Text is empty!' ); return; }

    });

});