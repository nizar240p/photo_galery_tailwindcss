// WHEN STARTUP PAGE, DO THIS...
function startup() {
    const h1 = document.querySelector('#header .container #welcomeText')
    const p = document.querySelector('#header .container p')
    const btnScroll = document.querySelector('#header .container #btnScroll')

    // TAMPILKAN TEXT H1
    h1.classList.add('opacity-100')
    h1.classList.remove('left-full')
    h1.classList.add('left-[15%]')

    // TAMPILKAN PARAGRAF PENDEK
    p.classList.add('opacity-100')
    p.classList.remove('-left-full')
    p.classList.add('left-[5%]')
    p.classList.add('lg:left-[15%]')

    // TAMPILKAN BTN SCROLL
    btnScroll.classList.add('opacity-100')
    btnScroll.classList.remove('-bottom-[10%]')
    btnScroll.classList.add('bottom-[5%]')
}

// WHEN SCROLLING, DO THIS
window.onscroll = function () {
    const header = document.querySelector('#header').offsetTop
    const footer = document.querySelector('#footer').offsetTop
    const h1 = document.querySelector('#header .container #welcomeText')
    const p = document.querySelector('#header .container p')
    const btnScroll = document.querySelector('#header .container #btnScroll')
    const btnTop = document.querySelector('#btnTop')
    const nav = document.querySelector('nav')

    if (window.pageYOffset > header) {
        // SEMBUNYIKAN TEXT H1
        h1.classList.remove('opacity-100')
        h1.classList.add('left-full')
        h1.classList.remove('left-[15%]')

        // SEMBUNYIKAN BTN SCROLL
        btnScroll.classList.remove('opacity-100')
        btnScroll.classList.add('-bottom-[10%]')
        btnScroll.classList.remove('bottom-[5%]')

        // TAMPILKAN PARAGRAF PENDEK
        p.classList.remove('opacity-100')
        p.classList.remove('left-[5%]')
        p.classList.remove('lg:left-[15%]')
        p.classList.add('-left-full')

        // TOP BOTTOM
        btnTop.classList.remove('-bottom-[10%]')
        btnTop.classList.add('bottom-[5%]')
        btnTop.classList.add('opacity-100')

        // NAV
        nav.classList.remove('absolute')
        nav.classList.remove('-top-20')
        nav.classList.add('fixed')
        nav.classList.add('top-0')
    } else {
        h1.classList.add('opacity-100')
        h1.classList.remove('left-full')
        h1.classList.add('left-[15%]')

        btnScroll.classList.add('opacity-100')
        btnScroll.classList.remove('-bottom-[10%]')
        btnScroll.classList.add('bottom-[5%]')

        // TAMPILKAN PARAGRAF PENDEK
        p.classList.add('opacity-100')
        p.classList.remove('-left-full')
        p.classList.add('left-[5%]')
        p.classList.add('lg:left-[15%]')
        
        // TOP BOTTOM
        btnTop.classList.remove('bottom-[5%]')
        btnTop.classList.add('-bottom-[10%]')
        btnTop.classList.remove('opacity-100')

        // NAV
        nav.classList.remove('fixed')
        nav.classList.remove('top-0')
        nav.classList.add('absolute')
        nav.classList.add('-top-20')
    }

    if((window.pageYOffset + screen.availHeight) > footer){
        btnTop.classList.remove('fixed')
        btnTop.classList.add('absolute')
    }else{
        btnTop.classList.remove('absolute')
        btnTop.classList.add('fixed')
    }
}

// JUST FOR TEST
function ah() {
    const btn = document.getElementById("myModal");

    console.log(btn)
}

// MODAL BOX WHEN IMAGE HAS CLICKED
function myBtn(id){
    const modal = document.getElementsByClassName('myModal');
    const top = document.getElementById('btnTop');

    modal[id].style.display = "block";
    top.style.display = "none";
}

function tutup(id){
    const modal = document.getElementsByClassName('myModal');
    const top = document.getElementById('btnTop');

    modal[id].style.display = "none";
    top.style.display = "flex";
}

// IDK
function bg(x) {
    const bg = document.querySelector('#header')

    // bg.style.backgroundImage = "url('img/wisata/" + x + "')"
}