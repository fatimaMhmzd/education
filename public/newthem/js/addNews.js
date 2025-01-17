const news = new Vue({
    el: '#news',
    data() {
        return {
            getNews: '',
            editedNews: '',
            newsArray: [
                { day: '24', month: 'آبان', year: '1401', news: 'امروز فاز اول پروژه شهر هوشمند شروع شد', edited: false, },
                { day: '24', month: 'آبان', year: '1401', news: 'امروز فاز اول پروژه شهر هوشمند شروع شد', edited: false },
                { day: '24', month: 'آبان', year: '1401', news: 'امروز فاز اول پروژه شهر هوشمند شروع شد', edited: false },
            ],
        }
    },
    methods: {
        addnews() {
            this.newsArray.push({ day: '24', month: 'بهمن', year: 1401, news: this.getNews, edited: false, });
        },
        deleteNews(index) {
            this.newsArray.splice(index, 1);
        },
        editeNews(index) {
            this.newsArray[index].edited = true;
        },
        addEdited(index) {
            if (this.editedNews == '') {
                this.newsArray[index].news = 'امروز فاز اول پروژه شهر هوشمند شروع شد';
                this.newsArray[index].edited = false;
            }
            else if (this.editedNews != '') {
                this.newsArray[index].news = this.editedNews;
                this.newsArray[index].edited = false;
            }
        }
    },
})