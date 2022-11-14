 <div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <div class="row layout-top-spacing">

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class="">Grafik Pasien</h5>
                        <div class="task-action">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="renvenue" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>
                                <!-- <div class="dropdown-menu left" aria-labelledby="renvenue" style="will-change: transform;">
                                    <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div id="bulanan"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class="">Sales by Category</h5>
                    </div>
                    <div class="widget-content">
                        <div id="chart-2" class=""></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<script>
    <?php 

    $bulan = date('m');
    if($bulan <=9){
        $isine = substr($bulan,1,2);
    }else{
        $isine=$bulan;
    }
    ?>
    var options1 = {
      chart: {
        fontFamily: 'Nunito, sans-serif',
        height: 365,
        type: 'area',
        zoom: {
            enabled: false
        },
        dropShadow: {
          enabled: true,
          opacity: 0.3,
          blur: 5,
          left: -7,
          top: 22
      },
      toolbar: {
          show: false
      },
      events: {
          mounted: function(ctx, config) {
            const highest1 = ctx.getHighestValueInSeries(0);
            const highest2 = ctx.getHighestValueInSeries(1);

            ctx.addPointAnnotation({
              x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
              y: highest1,
              label: {
                style: {
                  cssClass: 'd-none'
              }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
      })

            ctx.addPointAnnotation({
              x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
              y: highest2,
              label: {
                style: {
                  cssClass: 'd-none'
              }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
      })
        },
    }
},
colors: ['#1b55e2', '#e7515a'],
dataLabels: {
  enabled: false
},
markers: {
    discrete: [{
        seriesIndex: 0,
        dataPointIndex: 7,
        fillColor: '#000',
        strokeColor: '#000',
        size: 5
    }, {
        seriesIndex: 2,
        dataPointIndex: 11,
        fillColor: '#000',
        strokeColor: '#000',
        size: 4
    }]
},
subtitle: {
    text: 'Total Pasien',
    align: 'left',
    margin: 0,
    offsetX: -10,
    offsetY: 35,
    floating: false,
    style: {
      fontSize: '14px',
      color:  '#888ea8'
  }
},
title: {
    text: '$10,840',
    align: 'left',
    margin: 0,
    offsetX: -10,
    offsetY: 0,
    floating: false,
    style: {
      fontSize: '25px',
      color:  '#0e1726'
  },
},
stroke: {
  show: true,
  curve: 'smooth',
  width: 2,
  lineCap: 'square'
},
series: [{
  name: 'Income',
  data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000]
}, {
  name: 'Expenses',
  data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000]
}],
labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
xaxis: {
    axisBorder: {
      show: false
  },
  axisTicks: {
      show: false
  },
  crosshairs: {
      show: true
  },
  labels: {
      offsetX: 0,
      offsetY: 5,
      style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-xaxis-title',
      },
  }
},
yaxis: {
    labels: {
      formatter: function(value, index) {
        return (value / 1000) + 'K'
    },
    offsetX: -22,
    offsetY: 0,
    style: {
      fontSize: '12px',
      fontFamily: 'Nunito, sans-serif',
      cssClass: 'apexcharts-yaxis-title',
  },
}
},
grid: {
    borderColor: '#e0e6ed',
    strokeDashArray: 5,
    xaxis: {
        lines: {
            show: true
        }
    },   
    yaxis: {
        lines: {
            show: false,
        }
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 0,
      left: -10
  }, 
}, 
legend: {
    position: 'top',
    horizontalAlign: 'right',
    offsetY: -50,
    fontSize: '16px',
    fontFamily: 'Nunito, sans-serif',
    markers: {
      width: 10,
      height: 10,
      strokeWidth: 0,
      strokeColor: '#fff',
      fillColors: undefined,
      radius: 12,
      onClick: undefined,
      offsetX: 0,
      offsetY: 0
  },    
  itemMargin: {
      horizontal: 0,
      vertical: 20
  }
},
tooltip: {
    theme: 'dark',
    marker: {
      show: true,
  },
  x: {
      show: false,
  }
},
fill: {
  type:"gradient",
  gradient: {
      type: "vertical",
      shadeIntensity: 1,
      inverseColors: !1,
      opacityFrom: .28,
      opacityTo: .05,
      stops: [45, 100]
  }
},
responsive: [{
    breakpoint: 575,
    options: {
      legend: {
          offsetY: -30,
      },
  },
}]
}
var chart1 = new ApexCharts(
    document.querySelector("#bulanan"),
    options1
    );

chart1.render();
</script>