
var getProject = document.getElementById('project');
var getProgress = document.getElementById('progress');
var getColab = document.getElementById('colab');
var getQa = document.getElementById('QA');
var getTeam = document.getElementById('team');
var getNews = document.getElementById('news');

var getBtns = document.getElementsByClassName('list-items');

getProgress.style.display = 'none';
getColab.style.display = 'none';
getQa.style.display = 'none';
getNews.style.display = 'none';
getTeam.style.display = 'none';
getBtns[0].style.backgroundColor = '#FFD987'

function showProgress() {
    getProgress.style.display = '';
    getColab.style.display = 'none';
    getQa.style.display = 'none';
    getTeam.style.display = 'none';
    getNews.style.display = 'none';
    getProject.style.display = 'none';
    getBtns[0].style.backgroundColor = ''
    getBtns[1].style.backgroundColor = '#FFD987'
    getBtns[2].style.backgroundColor = ''
    getBtns[3].style.backgroundColor = ''
    getBtns[4].style.backgroundColor = ''
    getBtns[5].style.backgroundColor = ''
}

function showColab() {
    getProgress.style.display = 'none';
    getColab.style.display = '';
    getQa.style.display = 'none';
    getTeam.style.display = 'none';
    getNews.style.display = 'none';
    getProject.style.display = 'none';
    getBtns[0].style.backgroundColor = ''
    getBtns[1].style.backgroundColor = ''
    getBtns[2].style.backgroundColor = '#FFD987'
    getBtns[3].style.backgroundColor = ''
    getBtns[4].style.backgroundColor = ''
    getBtns[5].style.backgroundColor = ''
}

function showQa() {
    getProgress.style.display = 'none';
    getColab.style.display = 'none';
    getQa.style.display = '';
    getTeam.style.display = 'none';
    getNews.style.display = 'none';
    getProject.style.display = 'none';
    getBtns[0].style.backgroundColor = ''
    getBtns[1].style.backgroundColor = ''
    getBtns[2].style.backgroundColor = ''
    getBtns[3].style.backgroundColor = '#FFD987'
    getBtns[4].style.backgroundColor = ''
    getBtns[5].style.backgroundColor = ''
}

function showNews() {
    getProgress.style.display = 'none';
    getColab.style.display = 'none';
    getQa.style.display = 'none';
    getNews.style.display = '';
    getTeam.style.display = 'none';
    getProject.style.display = 'none';
    getBtns[0].style.backgroundColor = ''
    getBtns[1].style.backgroundColor = ''
    getBtns[2].style.backgroundColor = ''
    getBtns[3].style.backgroundColor = ''
    getBtns[4].style.backgroundColor = ''
    getBtns[5].style.backgroundColor = '#FFD987'
}

function showProject() {
    getProgress.style.display = 'none';
    getColab.style.display = 'none';
    getQa.style.display = 'none';
    getTeam.style.display = 'none';
    getNews.style.display = 'none';
    getProject.style.display = '';
    getBtns[0].style.backgroundColor = '#FFD987'
    getBtns[1].style.backgroundColor = ''
    getBtns[2].style.backgroundColor = ''
    getBtns[3].style.backgroundColor = ''
    getBtns[4].style.backgroundColor = ''
    getBtns[5].style.backgroundColor = ''
}

function showTeam(){
    getProgress.style.display = 'none';
    getColab.style.display = 'none';
    getQa.style.display = 'none';
    getTeam.style.display = '';
    getNews.style.display = 'none';
    getProject.style.display = 'none';
    getBtns[0].style.backgroundColor = ''
    getBtns[1].style.backgroundColor = ''
    getBtns[2].style.backgroundColor = ''
    getBtns[3].style.backgroundColor = ''
    getBtns[4].style.backgroundColor = '#FFD987'
    getBtns[5].style.backgroundColor = ''
}