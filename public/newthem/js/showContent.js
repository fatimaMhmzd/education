
var getBtns = document.getElementsByClassName('list-items');
var getNahads = document.getElementsByClassName('nahad-content');
getBtns[0].style.backgroundColor = '#FFB7FF';

function showItem(index){
    for (var i = 0 ; i < getBtns.length ; i++){
        if (i == index){
            getBtns[i].style.backgroundColor = '#FFB7FF';
            getNahads[i].classList.remove('d-none')
        }
        else {
            getBtns[i].style.backgroundColor = '';
            getNahads[i].classList.add('d-none')
        }
    }

}
