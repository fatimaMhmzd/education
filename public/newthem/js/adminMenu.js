var menu = document.getElementsByClassName('admin-menu-item');
var items = document.getElementsByClassName('admin-menu-item-text');
var item_collapse = document.getElementsByClassName('item-collapse');
var dropdowns = document.getElementsByClassName('dropdown-menu');

function selectMenu(index) {
    for (var i = 0; i < items.length; i++) {
        if (i == index) {
            items[i].classList.add('select-menu');
            dropdowns[i].classList.remove('show');
            if (items[i].classList == 'd-flex align-items-center admin-menu-item-text px-3 py-2 select-menu collapsed' || items[i].classList == 'd-flex align-items-center admin-menu-item-text px-3 py-2 admin-menu-item-text-dark select-menu collapsed') {
                items[i].classList.remove('select-menu');
            }
        } else {
            items[i].classList.remove('select-menu');
            item_collapse[i].classList.remove('show');
            dropdowns[i].classList.remove('show');
        }
    }
}

function showDropdown(index) {
    for (var j = 0; j < menu.length; j++) {
        if (j == index) {
            if (item_collapse[j].classList == 'item-collapse collapse' || item_collapse[j].classList == 'item-collapse collapse' || item_collapse[j].classList == 'item-collapse collapse item-collapse-dark' || item_collapse[j].classList == 'item-collapse item-collapse-dark collapse') {
                dropdowns[j].classList.add('show');
            } else {
                dropdowns[j].classList.remove('show');
            }
        } else {
            dropdowns[j].classList.remove('show');
        }
    }
}

function hideDropdown(index) {
    for (var j = 0; j < menu.length; j++) {
        dropdowns[j].classList.remove('show');
    }
}

var getChange = document.getElementById('change-mode');

document.body.style.backgroundColor = '#F9F9F9';
getChange.addEventListener('change', function () {
    if (getChange.checked == true) {
        document.getElementById('change-mod-text').innerText = 'لایت';
        document.body.style.backgroundColor = '#6E6E6E';
        document.getElementById('admin-menu').classList.add('admin-menu-dark');
        document.getElementById('bottom-menu').classList.add('bottom-admin-menu-dark');
        for (var i = 0; i < item_collapse.length; i++) {
            item_collapse[i].classList.add('item-collapse-dark');
            items[i].classList.add('admin-menu-item-text-dark');
            menu[i].classList.add('admin-menu-item-dark');
        }
    } else {
        document.body.style.backgroundColor = '#F9F9F9';
        document.getElementById('change-mod-text').innerText = 'دارک';
        document.getElementById('admin-menu').classList.remove('admin-menu-dark');
        document.getElementById('bottom-menu').classList.remove('bottom-admin-menu-dark');
        for (var i = 0; i < item_collapse.length; i++) {
            item_collapse[i].classList.remove('item-collapse-dark');
            items[i].classList.remove('admin-menu-item-text-dark');
            menu[i].classList.remove('admin-menu-item-dark');
            menu[i].classList.remove('admin-menu-item-dark');
        }
    }
})

