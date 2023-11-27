var header = document.getElementById('titfo');

window.addEventListener('scroll', ()=>{
    var scroll = window.scrollY

    if (scroll>10) {
        header.style.backgroundColor='#B58463'
    }else{
        header.style.backgroundColor = 'transparent'
    }
})