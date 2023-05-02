var url = url_base+'inc/Auth/auth.php';
$('#logout').click(function(){
    /* alert('dfsds'); */
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        cache: false,
        async: false,
        data: {q: 'logout'},
        beforeSend: function(){
        },
        success: function (data, textStatus, jqHRX) {
            if(data.status == 'ok'){
                $('#overlay').addClass('active');
                $('#menu_perfil').removeClass('active');
                setTimeout(function(){
                    $('#overlay').removeClass('active');
                    window.location.href = './index.php';
                }, 2000);
            }else{
                alert(data.mensaje);
            }
        }, 
        error: function (jqHRX) {
            /* alert(jqHRX.mensaje); */
        },
        complete: function(data){
        }
    });
});

$('.user_container').click(function(){
    $('#menu_perfil').toggleClass('active');
});

$('.main_container').click(function(){
});