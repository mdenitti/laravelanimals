<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Builder</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
   
</head>

<body class="g-sidenav-show">
   
    <div class="main-content" id="panel">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl bg-transparent" id="navbarTop">
            <div class="container-fluid">
                <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                    AlienSightingApp
                </a>
                 @include('navigation')
            
           
            </div>
        </nav>
        <div class="container-fluid pt-3">
            <div class="row removable">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-1 pt-2 text-bold">@yield('title')</p>
                                        <h5 class="font-weight-bolder">@yield('subtitle')</h5>
                                        <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.
                                        @yield('userinfo')
                                        </p>
                                        <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                            Read More
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                    <div class="bg-gradient-primary border-radius-lg h-100">
                                        <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                        <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                            <img class="w-100 position-relative z-index-2 pt-4" src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/illustrations/rocket-white.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
          <footer class="footer pt-3 pb-4">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            @include('footer')
                        </div>
                    </div>
                    <div class="col-lg-6">
                       
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://demos.creative-tim.com/soft-ui-dashboard/assets/js/core/popper.min.js"></script>
    <script src="https://demos.creative-tim.com/soft-ui-dashboard/assets/js/core/bootstrap.min.js"></script>
    <script src="https://demos.creative-tim.com/soft-ui-dashboard/assets/js/plugins/chartjs.min.js"></script>
    <script src="https://demos.creative-tim.com/soft-ui-dashboard/assets/js/plugins/Chart.extension.js"></script>
    <script src="https://demos.creative-tim.com/soft-ui-dashboard/assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
    <script>
        if (document.querySelector("#chart-bars")) {
           	var ctx = document.getElementById("chart-bars").getContext("2d");
           	new Chart(ctx, {
              type: "bar",
              data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                  label: "Sales",
                  tension: 0.4,
                  borderWidth: 0,
                  borderRadius: 4,
                  borderSkipped: false,
                  backgroundColor: "#fff",
                  data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                  maxBarThickness: 6
                }, ],
              },
              options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                  legend: {
                    display: false,
                  }
                },
                interaction: {
                  intersect: false,
                  mode: 'index',
                },
                scales: {
                  y: {
                    grid: {
                      drawBorder: false,
                      display: false,
                      drawOnChartArea: false,
                      drawTicks: false,
                    },
                    ticks: {
                      suggestedMin: 0,
                      suggestedMax: 500,
                      beginAtZero: true,
                      padding: 15,
                      font: {
                        size: 14,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                      },
                      color: "#fff"
                    },
                  },
                  x: {
                    grid: {
                      drawBorder: false,
                      display: false,
                      drawOnChartArea: false,
                      drawTicks: false
                    },
                    ticks: {
                      display: false
                    },
                  },
                },
              },
            });
        
           };
           if (document.querySelector("#chart-line")) {
           	var ctx2 = document.getElementById("chart-line").getContext("2d");
           	var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
           	gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
           	gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
           	gradientStroke1.addColorStop(0, "rgba(203,12,159,0)");
           	var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
           	gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
           	gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
           	gradientStroke2.addColorStop(0, "rgba(20,23,39,0)");
           	new Chart(ctx2, {
              type: "line",
              data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6
        
                  },
                  {
                    label: "Websites",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                  },
                ],
              },
              options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                  legend: {
                    display: false,
                  }
                },
                interaction: {
                  intersect: false,
                  mode: 'index',
                },
                scales: {
                  y: {
                    grid: {
                      drawBorder: false,
                      display: true,
                      drawOnChartArea: true,
                      drawTicks: false,
                      borderDash: [5, 5]
                    },
                    ticks: {
                      display: true,
                      padding: 10,
                      color: '#b2b9bf',
                      font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                      },
                    }
                  },
                  x: {
                    grid: {
                      drawBorder: false,
                      display: false,
                      drawOnChartArea: false,
                      drawTicks: false,
                      borderDash: [5, 5]
                    },
                    ticks: {
                      display: true,
                      color: '#b2b9bf',
                      padding: 20,
                      font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                      },
                    }
                  },
                },
              },
            }); 
           };
    </script>
   
</body>