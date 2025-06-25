document.addEventListener("DOMContentLoaded", function () {
    const topBuyersLabels = window.topBuyersLabels;
    const topBuyersData = window.topBuyersData;

    const topBooksLabels = window.topBooksLabels;
    const topBooksData = window.topBooksData;

    const buyersCtx = document.getElementById('topBuyersChart').getContext('2d');
    const booksCtx = document.getElementById('topBooksChart').getContext('2d');

    new Chart(buyersCtx, {
        type: 'bar',
        data: {
            labels: topBuyersLabels,
            datasets: [{
                label: 'Số cuốn đã mua',
                data: topBuyersData,
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false }},
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    new Chart(booksCtx, {
        type: 'bar',
        data: {
            labels: topBooksLabels,
            datasets: [{
                label: 'Số lượt mua',
                data: topBooksData,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false }},
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
