var header = document.getElementById('titfo');
var tit = document.getElementById('tit');
var menItems = document.querySelectorAll('.men');

window.addEventListener('scroll', () => {
    var scroll = window.scrollY;

    var transitionDuration = '0.3s';  // Ajusta la duración de la transición según sea necesario

    if (scroll > 10) {
        header.style.transition = `background-color ${transitionDuration}`;
        header.style.backgroundColor = '#B58463';

        tit.style.transition = `color ${transitionDuration}`;
        tit.style.color = '#43291F';

        // Iterar sobre los elementos con clase 'men' y agregar la clase 'scrolled'
        menItems.forEach(item => {
            item.classList.add('scrolled');
        });
    } else {
        header.style.transition = `background-color ${transitionDuration}`;
        header.style.backgroundColor = '#43291F';

        tit.style.transition = `color ${transitionDuration}`;
        tit.style.color = '#FFFFFF';

        // Iterar sobre los elementos con clase 'men' y quitar la clase 'scrolled'
        menItems.forEach(item => {
            item.classList.remove('scrolled');
        });
    }
});