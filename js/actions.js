const direct_message = document.getElementById('direct_message');
const direct_message_on = document.getElementById('direct_message_on');
const direct_message_off = document.getElementById('direct_message_off');

direct_message_on.addEventListener('click', function(e){
    e.preventDefault();
    direct_message.classList.add('active');
});
direct_message_off.addEventListener('click', function(e){
    e.preventDefault();
    direct_message.classList.remove('active');
});