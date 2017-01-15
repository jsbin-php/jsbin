// 02:33 AM

$(document).ready( function( event ) {

    $('#generated-code').height( $('textarea').height() );

    $('.inputTextarea').bind('change, keyup', function( event ) {
        var html    = $('#inputHtml').val();
        var js      = base64_encode( $('#inputJs').val() );

        $('#generated-code').attr( 'src', 'runner.php?html=' + html + '&js=' + js );
    });

});