var lists = document.getElementsByClassName('list-group-item');
var getList = document.getElementById('app');
var listImage = document.getElementsByClassName('list-image');
var getHead = document.getElementsByClassName('list-h6');
getList.style.display = 'none';
var showBar = false;

function showProject() {
    if (showBar == false) {
        showBar = true;
        getList.style.display = 'inline'
    }
    else if (showBar == true) {
        showBar = false;
    }
    /*getHead[0].innerHTML = "پروژه ها"
    lists[0].style.display = 'inline'
    lists[0].innerHTML = 'پروژه های من';
    lists[1].style.display = 'none';
    lists[2].innerHTML = 'ایجاد پروژه';
    lists[3].innerHTML = '';
    lists[4].innerHTML = '';
    lists[5].innerHTML = '';
    lists[6].innerHTML = '';
    lists[7].innerHTML = '';
    lists[8].innerHTML = '';
    lists[9].innerHTML = '';*/

    getHead[0].innerHTML = "پروژه شهر هوشمند"
    lists[0].innerHTML = `<a href="#"><i class="me-2 fa-solid fa-fill-drip"></i> چکیده</a>`;
    lists[0].style.display = 'block';
    lists[1].style.display = 'block';
    lists[1].innerHTML = '<i class="me-2 fa-solid fa-pen-to-square"></i>    ویرایش پروژه';
    lists[2].innerHTML = '<i class="me-2 fa-solid fa-clipboard-list"></i>    منابع';
    lists[3].innerHTML = '<i class="me-2 fa-solid fa-list-check"></i>    پیشرفت پروژه';
    lists[4].innerHTML = '<i class="me-2 fa-solid fa-eye"></i>   پیش نمایش';
    lists[5].innerHTML = '<i class="me-2 fa-solid fa-envelope"></i>    پیام کلبه کار';
    lists[6].innerHTML = '<i class="me-2 fa-solid fa-inbox"></i>   پیام نهادها';
    lists[7].innerHTML = '<i class="me-2 fa-solid fa-comments"></i>    پرسش و پاسخ';
    lists[8].innerHTML = '<i class="me-2 fa-solid fa-people-roof"></i>   سازمان‌های حمایتی ';
    lists[9].innerHTML = '<i class="me-2 fa-solid fa-reply"></i>    لیست پروژه‌ها'
}

function showDoc() {
    if (showBar == false) {
        showBar = true;
        getList.style.display = 'inline'
    }
    else if (showBar == true) {
        showBar = false;
    }
    getHead[0].innerHTML = "پروژه شهر هوشمند"
    lists[0].innerHTML = '<i class="me-2 fa-solid fa-fill-drip"></i> چکیده';
    lists[1].style.display = 'block';
    lists[1].innerHTML = '<i class="me-2 fa-solid fa-pen-to-square"></i>    ویرایش پروژه';
    lists[2].innerHTML = '<i class="me-2 fa-solid fa-clipboard-list"></i>    منابع';
    lists[3].innerHTML = '<i class="me-2 fa-solid fa-list-check"></i>    پیشرفت پروژه';
    lists[4].innerHTML = '<i class="me-2 fa-solid fa-eye"></i>   پیش نمایش';
    lists[5].innerHTML = '<i class="me-2 fa-solid fa-envelope"></i>    پیام کلبه کار';
    lists[6].innerHTML = '<i class="me-2 fa-solid fa-inbox"></i>   پیام نهادها';
    lists[7].innerHTML = '<i class="me-2 fa-solid fa-comments"></i>    پرسش و پاسخ';
    lists[8].innerHTML = '<i class="me-2 fa-solid fa-people-roof"></i>   سازمان‌های حمایتی ';
    lists[9].innerHTML = '<i class="me-2 fa-solid fa-reply"></i>    لیست پروژه‌ها'
}

function showWallet() {
    if (showBar == false) {
        showBar = true;
        getList.style.display = 'inline'
    }
    else if (showBar == true) {
        showBar = false;
    }
    getHead[0].innerHTML = "کیف پول"
    lists[0].style.display = 'none'
    lists[1].style.display = 'none'
    lists[2].innerHTML = 'کیف پول من ';
    lists[3].innerHTML = 'حمایت های مالی'
    lists[4].innerHTML = 'گزارشات';
    lists[5].innerHTML = 'گواهی اهدا';
    lists[6].innerHTML = 'پرداخت اقساط';
    lists[7].innerHTML = 'تعهد نامه ';
    lists[8].innerHTML = '';
    lists[9].innerHTML = '';
/*    lists[10].innerHTML = '';*/
}

function hidenav() {
    getList.style.display = 'none'
}

var showMarg = false;
function marginList() {
    if (showMarg == false) {
        showMarg = true;
        lists[1].style.marginBottom = '185px';
    }
    else if (showMarg == true) {
        showMarg = false;
        lists[1].style.marginBottom = '4px';
    }

}
