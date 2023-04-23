url_base = '';

function passwordVisible(IDboton, IDcampoPassword) {
    $(IDboton).click(function () {
        if ($(IDcampoPassword).attr('type') == 'password') {
            $(IDcampoPassword).attr('type', 'text');
        } else {
            $(IDcampoPassword).attr('type', 'password');
        }
    });
}