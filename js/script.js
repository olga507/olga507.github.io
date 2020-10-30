const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.menu');
      closeElem = document.querySelector('.menu__close');
      menuItem = document.querySelectorAll('.menu__link');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

closeElem.addEventListener('click', () => {
    menu.classList.remove('active');
});

menuItem.forEach(item => {
    item.addEventListener('click', () => {
        hamburger.classList.toggle('menu_close');
        menu.classList.toggle('active');
    })
})

const counters = document.querySelectorAll('.skills__ratings-counter'),
      lines = document.querySelectorAll('.skills__ratings-line span');

counters.forEach( (item, i) => {
    lines[i].style.width = item.innerHTML;
});

document.addEventListener("DOMContentLoaded", function(event) { 
    window.onclick = function(event) {
        if(event.target.className == 'menu__overlay' && menu.classList.contains('active')) {
            menu.classList.remove('active');
        } 
    }
});