const ctx = document.getElementById('myChart');
const ctx2 = document.getElementById('myChart2');
const ctx3 = document.getElementById('myChart3');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            label: 'هزینه ها',
            data: [300, 50,],
            backgroundColor: [
                '#FF4D38',
                '#FF9386',
            ],
            hoverOffset: 4
        }]
    },

});
new Chart(ctx2, {
    type: 'doughnut',
    data: {
        datasets: [{
            label: 'هزینه ها',
            data: [300, 50,],
            backgroundColor: [
                '#1FC96E',
                '#4BF299',
            ],
            hoverOffset: 4
        }]
    },

});
new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
        datasets: [
            {
            label: 'فروش محصولات',
            data: [6, 2.3, 4.2, 7, 5, 6.3],
            borderWidth: 1,
            backgroundColor: "#5E457E",
            borderRadius: "20px",
        },
            {
                label: 'هزینه‌های جانبی',
                data: [1, 0.5, 2, 0.5, 1, 0.5],
                borderWidth: 1,
                backgroundColor: "#FF4D38",
                borderRadius: "20px",
            },
            {
                label: 'درآمدهای جانبی',
                data: [2, 0.1, 1, 2, 0.1, 1],
                borderWidth: 1,
                backgroundColor: "#1FC96E",
                borderRadius: "20px",
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});