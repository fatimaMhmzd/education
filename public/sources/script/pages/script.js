AOS.init()

let $btn_close = document.querySelectorAll('.btn-card-close');
let $btn_card = document.querySelectorAll('.btn-card');
let $getCard = document.getElementsByClassName('card-front');
let $getInfo = document.getElementsByClassName('show-info-card');

$btn_close.forEach((item, index) => {
    item.addEventListener('click', () => {
        $getInfo[index].classList.add('visually-hidden')
        $getCard[index].classList.remove('visually-hidden')
    })
})

$btn_card.forEach((item, index) => {
    item.addEventListener('click', () => {
        $getInfo[index].classList.remove('visually-hidden');
        $getCard[index].classList.add('visually-hidden')
    })
})

$('.price').each(function (i, obj) {
    let numb = obj.innerHTML.match(/\d/g);
    numb = numb.join("");
    obj.innerHTML = parseInt(numb).toLocaleString('fa-IR')
});
