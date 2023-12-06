@extends('app.index')
{{-- @extends('layouts.sidebar') --}}


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Overview</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card overview overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Geographic Information System - Flood Mitigation</h5>
                                    <h5>A geographic information system (GIS) is a system that creates, manages, analyzes,
                                        and maps all types of data. GIS connects data to a map, integrating location data
                                        (where things are) with all types of descriptive information (what things are like
                                        there).
                                        <br>
                                        <br>
                                        East Java, an agricultural province in Indonesia, often faces flooding problems. The
                                        region, with an agricultural land area of <b>1.7 hectares</b>, has experienced
                                        <b>211 cases</b> of flooding that impacted the agricultural sector. To identify
                                        flood-prone areas that affect agriculture, the Spatial System Dynamic method was
                                        used. The goal is to create a digital map using a WebGIS-based application. This map
                                        will map areas that are often affected by flooding, especially to agricultural land
                                        in the region.
                                    </h5>
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                        name: 'Estimasi jumlah produksi yang rugi',
                                                        data: [31, 40, 28, 51, 42, 82, 56],
                                                    }, {
                                                        name: 'Luas Area Sawah Terdampak',
                                                        data: [11, 32, 45, 32, 34, 52, 41]
                                                    },
                                                    //   {
                                                    //     name: 'Customers',
                                                    //     data: [15, 11, 32, 18, 9, 24, 11]
                                                    //   }
                                                ],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                        "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                        "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                        "2018-09-19T06:30:00.000Z"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Website Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Flood Risk <span>| Today</span></h5>

                            <div id="trafficChart" style="min-height: 780px;" class="echart">
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const data = [{
                                            value: 5,
                                            name: 'Bangkalan'
                                        },
                                        {
                                            value: 8,
                                            name: 'Banyuwangi'
                                        },
                                        {
                                            value: 12,
                                            name: 'Blitar'
                                        },
                                        {
                                            value: 3,
                                            name: 'Bojonegoro'
                                        },
                                        {
                                            value: 7,
                                            name: 'Bondowoso'
                                        },
                                        {
                                            value: 15,
                                            name: 'Gresik'
                                        },
                                        {
                                            value: 10,
                                            name: 'Jember'
                                        },
                                        {
                                            value: 4,
                                            name: 'Jombang'
                                        },
                                        {
                                            value: 6,
                                            name: 'Kediri'
                                        },
                                        {
                                            value: 9,
                                            name: 'Lamongan'
                                        },
                                        {
                                            value: 7,
                                            name: 'Lumajang'
                                        },
                                        {
                                            value: 3,
                                            name: 'Madiun'
                                        },
                                        {
                                            value: 11,
                                            name: 'Magetan'
                                        },
                                        {
                                            value: 8,
                                            name: 'Malang'
                                        },
                                        {
                                            value: 4,
                                            name: 'Mojokerto'
                                        },
                                        {
                                            value: 5,
                                            name: 'Nganjuk'
                                        },
                                        {
                                            value: 9,
                                            name: 'Ngawi'
                                        },
                                        {
                                            value: 6,
                                            name: 'Pacitan'
                                        },
                                        {
                                            value: 12,
                                            name: 'Pamekasan'
                                        },
                                        {
                                            value: 7,
                                            name: 'Pasuruan'
                                        },
                                        {
                                            value: 5,
                                            name: 'Ponorogo'
                                        },
                                        {
                                            value: 4,
                                            name: 'Probolinggo'
                                        },
                                        {
                                            value: 8,
                                            name: 'Sampang'
                                        },
                                        {
                                            value: 6,
                                            name: 'Sidoarjo'
                                        },
                                        {
                                            value: 9,
                                            name: 'Situbondo'
                                        },
                                        {
                                            value: 11,
                                            name: 'Sumenep'
                                        },
                                        {
                                            value: 3,
                                            name: 'Tuban'
                                        },
                                        {
                                            value: 5,
                                            name: 'Tulungagung'
                                        },
                                        {
                                            value: 14,
                                            name: 'Trenggalek'
                                        },
                                        {
                                            value: 10,
                                            name: 'Pacitan'
                                        },
                                        {
                                            value: 13,
                                            name: 'Ponorogo'
                                        },
                                        {
                                            value: 6,
                                            name: 'Probolinggo'
                                        },
                                        {
                                            value: 8,
                                            name: 'Sampang'
                                        },
                                        {
                                            value: 7,
                                            name: 'Sidoarjo'
                                        },
                                        {
                                            value: 9,
                                            name: 'Situbondo'
                                        },
                                        {
                                            value: 5,
                                            name: 'Sumenep'
                                        },
                                        {
                                            value: 4,
                                            name: 'Tuban'
                                        },
                                    ]

                                    const total = data.reduce((acc, curr) => acc + curr.value, 0);
                                    data.forEach(item => {
                                        item.value = Math.floor((item.value / total) * 100).toFixed(2);
                                    });

                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item',
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Jawa Timur',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center',
                                                formatter: '{b}: {d}%',
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: data
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Website Traffic -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
