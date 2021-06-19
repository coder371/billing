var ctx = document.getElementById("MixChart");
  var myMixChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'اغسطس', 'سبتمير', 'اكتوبر', 'نوفمبر', 'ديسمبر'],

      datasets: [{
        label: 'مدفوع',
        backgroundColor: "#4caf50",
        data: [analytics['PaidBill-1'],analytics['PaidBill-2'],analytics['PaidBill-3'],analytics['PaidBill-4'],analytics['PaidBill-5'],analytics['PaidBill-6'],analytics['PaidBill-7'],analytics['PaidBill-8'],analytics['PaidBill-9'],analytics['PaidBill-10'],analytics['PaidBill-11'],analytics['PaidBill-12']]
      }, {
        label: 'غير مدفوع',
        backgroundColor: "#f44336",
        data: [analytics['NotPaidBill-1'],analytics['NotPaidBill-2'],analytics['NotPaidBill-3'],analytics['NotPaidBill-4'],analytics['NotPaidBill-5'],analytics['NotPaidBill-6'],analytics['NotPaidBill-7'],analytics['NotPaidBill-8'],analytics['NotPaidBill-9'],analytics['NotPaidBill-10'],analytics['NotPaidBill-11'],analytics['NotPaidBill-12']]
      }, {
        label: 'الاجمالي',
        backgroundColor: 'rgba(0, 52, 115, 0.56)',
        // borderColor: '#f47c96',
        data: [analytics['TotalBill-1'],analytics['TotalBill-2'],analytics['TotalBill-3'],analytics['TotalBill-4'],analytics['TotalBill-5'],analytics['TotalBill-6'],analytics['TotalBill-7'],analytics['TotalBill-8'],analytics['TotalBill-9'],analytics['TotalBill-10'],analytics['TotalBill-11'],analytics['TotalBill-12']],
        // Changes this dataset to become a line
        type: 'line'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  }); // Horizontal bar chart 
  var ctx = document.getElementById("DoughnutChart");
  var data = {
    labels: ["غير مدفوع", "مدفوع"],
    datasets: [{
      data: [analytics['NotTotalBillPaid'], analytics['TotalBillPaid']],
      backgroundColor: ["#f44336", "#4caf50"],
      hoverBackgroundColor: ["#34495E", "#B370CF"]
    }]
  };
  var DoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
    data: data
  }); // Pie chart
