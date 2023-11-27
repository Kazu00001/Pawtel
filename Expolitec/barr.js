var header = document.getElementById('titfo');
var tit = document.getElementById('tit');
var men = document.getElementById('.men');

window.addEventListener('scroll', ()=>{
    var scroll = window.scrollY

    if (scroll>10) {
        header.style.backgroundColor='#B58463'
        tit.style.color='#43291F'
        men.style.color='#43291F'
    }else{
        header.style.backgroundColor='#43291F'
        tit.style.color='#FFFFFF'
    }
})