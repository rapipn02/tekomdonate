"use strict";

// Chart untuk #myChart
var myChartCanvas = document.getElementById("myChart");
if (myChartCanvas) { // Hanya jalankan jika elemen ada
  var ctx = myChartCanvas.getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July", "August"],
      datasets: [{
        label: 'Sales',
        data: [3200, 1800, 4305, 3022, 6310, 5120, 5880, 6154],
        borderWidth: 2,
        backgroundColor: 'rgba(63,82,227,.8)',
        // borderWidth: 0, // Duplikat, pilih salah satu atau hapus jika tidak perlu
        borderColor: 'transparent',
        pointBorderWidth: 0,
        pointRadius: 3.5,
        pointBackgroundColor: 'transparent',
        pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
      },
      {
        label: 'Budget',
        data: [2207, 3403, 2200, 5025, 2302, 4208, 3880, 4880],
        borderWidth: 2,
        backgroundColor: 'rgba(254,86,83,.7)',
        // borderWidth: 0, // Duplikat
        borderColor: 'transparent',
        pointBorderWidth: 0 ,
        pointRadius: 3.5,
        pointBackgroundColor: 'transparent',
        pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          gridLines: {
            // display: false,
            drawBorder: false,
            color: '#f2f2f2',
          },
          ticks: {
            beginAtZero: true,
            stepSize: 1500,
            callback: function(value, index, values) {
              return '$' + value;
            }
          }
        }],
        xAxes: [{
          gridLines: {
            display: false,
            tickMarkLength: 15,
          }
        }]
      },
    }
  });
}


// Chart untuk #balance-chart
var balanceChartCanvas = document.getElementById("balance-chart");
if (balanceChartCanvas) { // Hanya jalankan jika elemen ada
  var balance_chart_ctx = balanceChartCanvas.getContext('2d');
  var balance_chart_bg_color = balance_chart_ctx.createLinearGradient(0, 0, 0, 70);
  balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
  balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

  var balanceChart = new Chart(balance_chart_ctx, { // Ganti nama variabel agar tidak konflik dengan 'myChart' di atas
    type: 'line',
    data: {
      labels: ['16-07-2018', '17-07-2018', '18-07-2018', '19-07-2018', '20-07-2018', '21-07-2018', '22-07-2018', '23-07-2018', '24-07-2018', '25-07-2018', '26-07-2018', '27-07-2018', '28-07-2018', '29-07-2018', '30-07-2018', '31-07-2018'],
      datasets: [{
        label: 'Balance',
        data: [50, 61, 80, 50, 72, 52, 60, 41, 30, 45, 70, 40, 93, 63, 50, 62],
        backgroundColor: balance_chart_bg_color,
        borderWidth: 3,
        borderColor: 'rgba(63,82,227,1)',
        pointBorderWidth: 0,
        pointBorderColor: 'transparent',
        pointRadius: 3,
        pointBackgroundColor: 'transparent',
        pointHoverBackgroundColor: 'rgba(63,82,227,1)',
      }]
    },
    options: {
      layout: {
        padding: {
          bottom: -1,
          left: -1
        }
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          gridLines: {
            display: false,
            drawBorder: false,
          },
          ticks: {
            beginAtZero: true,
            display: false
          }
        }],
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false,
          },
          ticks: {
            display: false
          }
        }]
      },
    }
  });
}

// Chart untuk #sales-chart
var salesChartCanvas = document.getElementById("sales-chart");
if (salesChartCanvas) { // Hanya jalankan jika elemen ada
  var sales_chart_ctx = salesChartCanvas.getContext('2d');
  var sales_chart_bg_color = sales_chart_ctx.createLinearGradient(0, 0, 0, 80);
  // PERHATIKAN: Anda menggunakan balance_chart_bg_color.addColorStop di sini, seharusnya sales_chart_bg_color
  sales_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)'); // Seharusnya ini untuk sales_chart_bg_color
  sales_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)'); // Seharusnya ini untuk sales_chart_bg_color

  var salesChart = new Chart(sales_chart_ctx, { // Ganti nama variabel
    type: 'line',
    data: {
      labels: ['16-07-2018', '17-07-2018', '18-07-2018', '19-07-2018', '20-07-2018', '21-07-2018', '22-07-2018', '23-07-2018', '24-07-2018', '25-07-2018', '26-07-2018', '27-07-2018', '28-07-2018', '29-07-2018', '30-07-2018', '31-07-2018'],
      datasets: [{
        label: 'Sales',
        data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50, 91, 63, 51, 60],
        borderWidth: 2, // Anda punya borderWidth: 3 di bawah, pilih salah satu
        backgroundColor: sales_chart_bg_color, // Gunakan sales_chart_bg_color
        // borderWidth: 3, // Duplikat
        borderColor: 'rgba(63,82,227,1)',
        pointBorderWidth: 0,
        pointBorderColor: 'transparent',
        pointRadius: 3,
        pointBackgroundColor: 'transparent',
        pointHoverBackgroundColor: 'rgba(63,82,227,1)',
      }]
    },
    options: {
      layout: {
        padding: {
          bottom: -1,
          left: -1
        }
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          gridLines: {
            display: false,
            drawBorder: false,
          },
          ticks: {
            beginAtZero: true,
            display: false
          }
        }],
        xAxes: [{
          gridLines: {
            drawBorder: false,
            display: false,
          },
          ticks: {
            display: false
          }
        }]
      },
    }
  });
}


// Owl Carousel untuk #products-carousel
if ($("#products-carousel").length) { // Cek dengan jQuery jika elemen ada
  $("#products-carousel").owlCarousel({
    items: 3,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });
}
