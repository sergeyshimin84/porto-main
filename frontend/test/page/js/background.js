let background = document.querySelector('.header__top');
console.log(background.style.querySelector)

background.addEventListener('click', ()=> {
    console.log('clisk')

    if (background.style.backgroundColor == 'rgb(255, 255, 255)') {
        background.style.backgroundColor = 'rgb(34, 35, 38)'
    }
    else if (background.style.backgroundColor == 'rgb(34, 35, 38)') {
        background.style.backgroundColor = 'rgb(255, 255, 255)'
    }
});
