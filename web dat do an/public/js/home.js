window.addEventListener('scroll', function () {
    const header = document.querySelector('.header')
    header.classList.toggle('sticky', window.scrollY > 0)
})
const galleryItems = document.querySelector('.product').children
const prev = document.querySelector('.prev')
const next = document.querySelector('.next')
const page = document.querySelector('.page-number')
const maxitem = 5
let index = 1
const pagetine = Math.ceil(galleryItems.length / maxitem)
// prev.addEventListener('click', function () {
//     index--
//     check()
//     showItem()
// })
// next.addEventListener('click', function () {
//     index++
//     check()
//     showItem()
// })
function check() {
    if (index == pagetine) {
        next.classList.add('disabled')
    } else {
        next.classList.remove('disabled')
    }
    if (index == 1) {
        prev.classList.add('disabled')
    } else {
        prev.classList.remove('disabled')
    }
}
function showItem() {
    for (let i = 0; i < galleryItems.length; i++) {
        galleryItems[i].classList.remove('show')
        galleryItems[i].classList.add('hide')
        if (i >= index * maxitem - maxitem && i < index * maxitem) {
            galleryItems[i].classList.remove('hide')
            galleryItems[i].classList.add('show')
        }
        page.innerHTML = index
    }
}
window.onload = function () {
    showItem()
    check()
}
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        smartSpeed: 1500,
        autoplayHoverPause: true,
    })
})
$('.blog_main').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
})
productScroll()

function productScroll() {
    let slider = document.getElementById('slider')
    let next = document.getElementsByClassName('pro-next')
    let prev = document.getElementsByClassName('pro-prev')
    let slide = document.getElementById('slide')
    let item = document.getElementById('slide')

    for (let i = 0; i < next.length; i++) {
        let position = 0
        prev[i].addEventListener('click', function () {
            if (position > 0) {
                position -= 1
                translateX(position)
            }
        })
        next[i].addEventListener('click', function () {
            if (position >= 0 && position < hiddenItems()) {
                position += 1
                translateX(position)
            }
        })
    }
    function hiddenItems() {
        let items = getCount(item, false)
        let visibleItems = slider.offsetWidth / 310
        return items - Math.ceil(visibleItems)
    }
}
function translateX(position) {
    slide.style.left = position * -310 + 'px'
}
function getCount(parent, getChildrensChildren) {
    let relevantChildren = 0
    let children = parent.childNodes.length
    for (let i = 0; i < children; i++) {
        if (parent.childNodes[i].nodeType != 3) {
            if (getChildrensChildren)
                relevantChildren += getCount(parent.childNodes[i], true)
            relevantChildren++
        }
    }
    return relevantChildren
}
const btn = document.querySelectorAll('.category button')
const product = document.querySelectorAll('.itembox')
btn.forEach((item) => {
    item.addEventListener('click', function () {
        for (let i = 0; i < btn.length; i++) {
            btn[i].classList.remove('active')
        }
        item.classList.add('active')
        product.forEach((show) => {
            show.style.display = 'none'

            let products = item.textContent.toLowerCase()
            if (
                show.getAttribute('data-att') === products ||
                products === 'all'
            ) {
                show.style.display = 'block'
            }
        })
    })
})
let elToShow = document.querySelectorAll('.show-on-scroll')

let isElInViewPort = (el) => {
    let rect = el.getBoundingClientRect()
    // some browsers support innerHeight, others support documentElement.clientHeight
    let viewHeight = window.innerHeight || document.documentElement.clientHeight

    return (
        (rect.top <= 0 && rect.bottom >= 0) ||
        (rect.bottom >= viewHeight && rect.top <= viewHeight) ||
        (rect.top >= 0 && rect.bottom <= viewHeight)
    )
}

function loop() {
    elToShow.forEach((itemm) => {
        if (isElInViewPort(itemm)) {
            itemm.classList.add('start')
        } else {
            itemm.classList.remove('start')
        }
    })
}

window.onscroll = loop

loop()

let hero = document.querySelector('.hero')

let sliderhome = document.querySelector('.sliderhome')

let slides = sliderhome.querySelectorAll('.slidehome')

let slide_index = 0

let can_slide_play = true

let hero_bgs = [
    'http://file.hstatic.net/1000115147/file/goi-cuon-tom-thit-1_24de7b0e3b59419cb4a5dee0c8031e10_grande.jpg',
    'https://cdn.tgdd.vn/2021/04/CookProduct/1-1200x676-21.jpg',
    'https://cdn.tgdd.vn/2021/09/CookProduct/1200(3)-1200x676-2.jpg',
]

showSlide = (index) => {
    slides.forEach((e) => e.classList.remove('activehome'))
    slides[index].classList.add('activehome')
    hero.style.backgroundImage = `url(${hero_bgs[index]})`
}

nextSlide = () => {
    slide_index = slide_index + 1 === slides.length ? 0 : slide_index + 1
    showSlide(slide_index)
}

// pause slidehome when mouse come in sliderhome
sliderhome.addEventListener('mouseover', () => (can_slide_play = false))

// resume slidehome when mouse leave out sliderhome
sliderhome.addEventListener('mouseleave', () => (can_slide_play = true))

showSlide(slide_index)

// auto play slidehome
// setInterval(() => {
//     if (!can_slide_play) return
//     nextSlide()
// }, 2500);

// manual slidehome select
sliderhome
    .querySelectorAll('.sliderhome-control-item')
    .forEach((item, index) => {
        item.addEventListener('click', () => showSlide(index))
    })

function user_name() {
    const toggleMenu = document.querySelector('.user_menu')
    toggleMenu.classList.toggle('user_active')
}

const addcart = document.querySelectorAll('.menu-item-price')
addcart.forEach(function (on, index) {
    on.addEventListener('click', function (event) {
        {
            var btnItem = event.target
            var productt = btnItem.parentElement
            var productImg = productt.querySelector('img').src
            var productName = productt.querySelector('H3').innerText
            var productPrice = productt.querySelector('span').innerText

            addcartt(productPrice, productImg, productName)
        }
    })
})
function addcartt(productPrice, productImg, productName) {
    var addtr = document.createElement('tr')
    var cartItem = document.querySelectorAll('tbody tr')
    for (var i = 0; i < cartItem.length; i++) {
        var productT = document.querySelectorAll('.title')
        if (productT[i].innerHTML == productName) {
            alert('Sản phẩm của bạn đã có trong giỏ hàng')
            return
        }
    }
    var trcontent =
        '<tr><td width:70px;margin: auto;"><img style="width:70px;height: 70px;margin:auto;border-radius: 5px;" src="' +
        productImg +
        '" alt=""><span " class="title">' +
        productName +
        '</span></td><td><p><span class="prices">' +
        productPrice +
        '</span><sup>đ</sup></p></td><td><input style="width: 30px;outline: none;" type="number" value="1" min="1"></td><td style="cursor: pointer;"><span class="cart-delete">Xóa</span></td></tr>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector('tbody')

    cartTable.append(addtr)
    carttotal()
    deleteCart()
}
function carttotal() {
    var cartItem = document.querySelectorAll('tbody tr')
    var totalC = 0
    for (var i = 0; i < cartItem.length; i++) {
        var inputValue = cartItem[i].querySelector('input').value
        // console.log(inputValue)
        var productPrice = cartItem[i].querySelector('.prices').innerHTML
        // console.log(productPrice)
        totalA = inputValue * productPrice * 1000
        totalC = totalC + totalA
        // totalD =totalC.toLocaleString("de-DE")
    }
    var cartTotalA = document.querySelector('.price-total span')
    var cartPrice = document.querySelector('.cart-icon span')
    cartTotalA.innerHTML = totalC.toLocaleString('de-DE')

    inputchange()
}
function inputchange() {
    var cartItem = document.querySelectorAll('tbody tr')
    for (var i = 0; i < cartItem.length; i++) {
        var inputValue = cartItem[i].querySelector('input')
        inputValue.addEventListener('change', function () {
            carttotal()
        })
    }
}
function deleteCart() {
    var cartItem = document.querySelectorAll('tbody tr')
    for (var i = 0; i < cartItem.length; i++) {
        var productT = document.querySelectorAll('.cart-delete')
        productT[i].addEventListener('click', function (event) {
            var cartDelete = event.target
            var cartitemR = cartDelete.parentElement.parentElement
            cartitemR.remove()
            carttotal()
            // console.log(cartitemR)ád
        })
    }
}

const cartbtn = document.querySelector('.fa-times')
const cartshow = document.querySelector('.fa-cart-plus')
cartshow.addEventListener('click', function () {
    document.querySelector('.cart').style.right = '0'
})
cartbtn.addEventListener('click', function () {
    document.querySelector('.cart').style.right = '-100%'
})
