const ctx = document.getElementById('myChart').getContext('2d');
const ctx_02 = document.getElementById('myChart-02').getContext('2d');


new Chart(ctx_02, {
  type: 'bar',
  data: {
    labels: ['janvier', 'Fevrier', 'mars', 'avril', 'may', 'juin'],
    datasets: [{
      label: 'Graph list admin',
      barPercentage: 0.5,
      data: [65, 59, 80, 81, 56, 55, 40],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ]
    }],
    borderWidth: 1,
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

// bubble chart graph
new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['janvier', 'Fevrier', 'mars', 'avril', 'may', 'juin'],
      datasets: [{
        label: 'Graph list admin',
        barPercentage: 0.5,
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          'rgb(201, 203, 207)'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          'rgb(201, 203, 207)'
        ]
      }],
      borderWidth: 1,
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });