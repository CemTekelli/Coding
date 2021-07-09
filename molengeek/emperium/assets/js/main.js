/* RESPONSIV NAVBAR */

let navSlide = () => {

    let burger = document.querySelector('.burger')
    let nav = document.querySelector('.nav-links')
    let navLinks = document.querySelectorAll('.nav-links li')

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active')
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1}s`
            }
        })
        burger.classList.toggle('toggle')
    })
}

navSlide()


/* FIXED NAVBAR */

let logo = document.querySelector('#logo')
let navbar = document.querySelector('nav')
let main = document.querySelector('main')

window.addEventListener('scroll', () => {
    if (window.pageYOffset >= '1') {
        navbar.classList.add('fixed')
        
    } else {
        navbar.classList.remove('fixed')
    }
})


/* BLACK */

let body = document.querySelector('body')
let btnBlack = document.querySelector('#btn-black')
let btnWhite = document.querySelector('#btn-white')




btnBlack.addEventListener('click', () => {
    body.classList.add('black')
    navbar.classList.add('white')
    body.classList.remove('white')

})

btnWhite.addEventListener('click', () => {
    body.classList.add('white')
    body.classList.remove('black')
})


/* CAROUSEL */ 

let divs = document.getElementById('carousel-inner')
let div = divs.querySelectorAll('.divdiv')
let idx = 0


function run() {
    idx++

    if (idx > div.length - 4) {
        idx = 0
    }

    divs.style.transform = `translateX(${-idx * 24}%)`
    
    setTimeout(run, 2000)

    if (window.innerWidth <= 1200) {
        divs.style.transform = `translateX(${-idx * 100}%)`
    } else {
        divs.style.transform = `translateX(${-idx * 24}%)`
    }
}

run()


/* MODAL */

let btnSign = document.querySelector('#si button')
let btnReg = document.querySelector('#re button')
let sig = document.querySelector('#sign')
let regis = document.querySelector('#register')

btnSign.addEventListener('click', () => {
    sig.classList.add('d-block')
    sig.classList.remove('d-none')

    regis.classList.add('d-none')
    regis.classList.remove('d-block')
})
btnReg.addEventListener('click', () => {
    sig.classList.add('d-none')
    sig.classList.remove('d-block')

    regis.classList.add('d-block')
    regis.classList.remove('d-none')
})