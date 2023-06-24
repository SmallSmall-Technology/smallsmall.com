$('.share-btn').click(function(){

    var id = $(this).attr('id');

    if($('#share-container-'+id).is(":hidden")){

        $('.share-container').css('display', 'none');

        $('#share-container-'+id).css('display', 'inline-block');

    }else{

        $('#share-container-'+id).css('display', 'none');

    }

    return false;
});