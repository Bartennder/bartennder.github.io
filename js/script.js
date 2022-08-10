

$(document).ready(function(){
    $('[data-modal=thanks1]').on('click', function() {
        $('.overlay').fadeIn('slow');
    });
    $('.modal__close').on('click', function() {
        $('.overlay').fadeOut('slow');
    });
});


$(window).scroll(function() {
    if ($(this).scrollTop() > 1600) {
        $('.pageup').fadeIn();
    } else {
        $('.pageup').fadeOut();
    }
});

const hamburger = document.querySelector('.hamburger'),
    overlay = document.querySelector('.menu__overlay'),
    menu = document.querySelector('.menu'),
    closeElem = document.querySelector('.menu__close');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

closeElem.addEventListener('click', () => {
    menu.classList.remove('active');
});

overlay.addEventListener('click', () => {
    menu.classList.remove('active');
});

const TOKEN = '5315207825:AAHy7pYEqXSuD54MFSB6uqAmjhJbWhnJu2A';
const CHAT_ID = '-718849026';
const URL_API = 'https://api.telegram.org/bot$( TOKEN )/sendMessage';
const success = document.getElementById('thanks');
document.getElementById('tg').addEventListener('submit', function(e) {
    e.preventDefault();

    let message = '<b>Заявка с сайта</b>\n';
    message += '<b>Отправитель: </b> ${ this.name.value }\n';
    message += '<b>Номер телефона: </b> ${ this.nomber.value }\n';
    message += '<b>Сообщение</b> ${ this.text.value }';
    
    axios.post(URL_API, {
        chat_id: CHAT_ID,
        parse_mode: 'html',
        text: message
    });

});
