var getMoney = document.getElementsByClassName('user-money');
var getText = document.getElementById('progress-text');
var getProgress = document.getElementById('progress-money');
var getPlus = "0";
var getWidth= "0px";
function addCount(index){
    if(index == 0){
        for (var i = 0 ; i <getMoney.length ; i++){
            getPlus =parseInt(getMoney[index].value.replace(/,\s?/g, "")) + parseInt(getMoney[index + i].value.replace(/,\s?/g, "")) ;
            getText.innerHTML=getPlus;
            getWidth = parseInt(getPlus);
            getWidth = String(getWidth);
            getProgress.style.width=getWidth +"px";
        }
    }
    else if (index > 0) {
        for (var i = 1 ; i < getMoney.length; i++){
            getPlus =parseInt(getMoney[index].value.replace(/,\s?/g, "")) + parseInt(getMoney[index - i].value.replace(/,\s?/g, "")) ;
            getText.innerHTML=getPlus;
            getWidth = parseInt(getPlus);
            getWidth = String(getWidth);
            getProgress.style.width=getWidth +"px";
        }
    }
}

// seccond cards //

var getSMoney = document.getElementsByClassName('user-seccond-money');
var getSText = document.getElementById('progress-seccond-text');
var getSProgress = document.getElementById('progress-seccond-money');
var getSPlus = "0";
var getSWidth= "0px";
function addSCount(index){
    if(index == 0){
        for (var i = 0 ; i <getSMoney.length ; i++){
            if(getSMoney.length == 0){
                getSPlus =parseInt(getSMoney[index].value.replace(/,\s?/g, "")) + parseInt(getSMoney[index + i].value.replace(/,\s?/g, ""))
                getSText.innerHTML=getSPlus;
                getSWidth = parseInt(getSPlus);
                getSWidth = String(getSWidth);
                getSProgress.style.width=getSWidth +"px";
            }
            else if (getSMoney.length > 0) {
                getSPlus =parseInt(getSMoney[index].value.replace(/,\s?/g, ""));
                getSText.innerHTML=getSPlus;
                getSWidth = parseInt(getSPlus);
                getSWidth = String(getSWidth);
                getSProgress.style.width=getSWidth +"px";
            }
        }
    }
    else if (index > 0) {
        for (var i = 0 ; i < getSMoney.length; i++){
            getSPlus =getSMoney[index].value + getSMoney[index - i].value;
            getSText.innerHTML=getSPlus;
            getSWidth = parseInt(getSPlus);
            getSWidth = String(getSWidth);
            getSProgress.style.width=getSWidth +"px";
        }
    }
}