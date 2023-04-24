const url = url_base+'inc/Auth/auth.php';
const $form = $('#formulario');
$form.submit(function(e){
    e.preventDefault();
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        cache: false,
        async: false,
        data: {usuario: $('#user').val(), pass: $('#pass').val()},
        beforeSend: function(){
            $('#overlay').addClass('active');
        },
        success: function (data, textStatus, jqHRX) {
            if(data.status == 'ok'){
                /* window.location.href = './panel.html'; */
                /* window.location.href = './dashboard.php'; */
            }else{
                alert(data.mensaje);
                reset();
            }
        }, 
        error: function (jqHRX) {
            alert(jqHRX.mensaje);
        },
        complete: function(data){
            $('#overlay').removeClass('active');
        }
    });
    
});

passwordVisible('#see_pass','#pass');

function alert(message){
    $('#alert_message').text(message);
    $('.alert').addClass('active');
    setTimeout(function(){
        $('.alert').removeClass('active');
    }, 3000);
}

const reset = ()=>{
    $('#user').val('');
    $('#user').focus();
    $('#pass').val('');
}