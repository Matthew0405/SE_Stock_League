var seriesOptions = [];
var stocks = ['SPY'];
var seriesCounter = 0;
var colors = ['#E1DD8F', '#FEC9F1', 'white'];

$.each(stocks, (i, stock) => {
  $.ajax({
    type: 'GET',
    url: `/bdc_terminal/api/stock_tsd?ticker=${stock}`,
    success: ({ data: { series } }) => {
      seriesOptions[i + 1] = { 
        name: stock, 
        data: series ,
        color: colors[i],
      };
      seriesCounter += 1;
      if (seriesCounter == stocks.length + 1) createChart();
    }
  });
})

$.ajax({
  type: 'GET',
  url: '/bdc_terminal/api/bdc_tsd',
  success: ({ data }) => {
    seriesOptions[0] = { name: 'BDC', data };
    seriesCounter += 1;
    if (seriesCounter == stocks.length + 1) createChart();
  },
});

function createChart() {
  Highcharts.stockChart('container', {
    title: {
      text: 'BDC Comparison History',
    },
    chart: {
      zoomType: 'x',
    },
    rangeSelector: {
      selected: 4
    },
    yAxis: {
      labels: {
        formatter: function () {
          return (this.value > 0 ? ' + ' : '') + this.value + '%';
        }
      },
    },
    plotOptions: {
      series: {
        compare: 'percent',
        showInNavigator: true
      }
    },
    tooltip: {
      pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
      valueDecimals: 2,
      split: true
    },
    series: seriesOptions
  });
}
