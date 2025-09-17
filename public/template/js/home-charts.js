document.addEventListener('DOMContentLoaded', function () {
  var el = document.querySelector('#chart-actividad');
  if (!el || typeof ApexCharts === 'undefined') return;

  var options = {
    chart: { type: 'line', height: 280, toolbar: { show: false } },
    series: [
      { name: 'Usuarios', data: [3, 4, 6, 8, 7, 9, 12] },
      { name: 'Productos', data: [5, 6, 7, 10, 9, 12, 14] }
    ],
    xaxis: { categories: ['Lun','Mar','Mié','Jue','Vie','Sáb','Dom'] },
    colors: ['#7367F0', '#28C76F'],
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth', width: 3 },
    grid: { strokeDashArray: 4 },
    legend: { position: 'top' }
  };

  var chart = new ApexCharts(el, options);
  chart.render();
});
