@php
    // Mengambil nilai dari JavaScript dan memasukkannya ke dalam array PHP
    // $selectedValues1 = json_encode($selectedValues);
    $selectedValues1 = isset($_REQUEST['selectedValues']) ? json_decode($_REQUEST['selectedValues'], true) : ['All', ''];
@endphp

@extends('app.index')

{{-- @vite('resources/views/Map/leaflet.ajax.js') --}}
{{-- @asset('public/maps/css/leaflet.css')
@asset('public/maps/css/qgis2web.css')
@asset('public/maps/css/fontawesome-all.min.css')
@asset('public/maps/css/leaflet-control-geocoder.Geocoder.css')
@asset('asset/css/DropdownKategori.css')
@asset('asset/js/Map/DropdownKategori.js') --}}
{{-- <link rel="stylesheet" href="maps/css/leaflet.css">
<link rel="stylesheet" href="maps/css/qgis2web.css">
<link rel="stylesheet" href="maps/css/fontawesome-all.min.css">
<link rel="stylesheet" href="maps/css/leaflet-control-geocoder.Geocoder.css"> --}}

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Map</h1>
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="index.html">Map</a></li> --}}
                    <li class="breadcrumb-item active">Map</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">



                        <!-- Map -->
                        <div class="col-12">
                            <div class="card">

                                <div id="map" style="height: 500px">
                                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.6890359139206!2d112.7278014663343!3d-7.311354774284881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sInstitut%20Teknologi%20Telkom%20Surabaya!5e0!3m2!1sid!2sid!4v1675212852356!5m2!1sid!2sid" width="100%" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                </div>

                            </div>
                        </div><!-- End Map -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    @php
                                        $currentYear = date('Y');
                                    @endphp
                                    <h5 class="card-title">{{ $selectedValues[0] }} <span>/{{ $selectedValues[1] }}</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Kabupaten</th>
                                                <th scope="col">Luas Area Sawah Terdampak</th>
                                                <th scope="col">Estimasi j umlah produksi yang rugi</th>
                                                {{-- <th scope="col">Status</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Benowo</td>
                                                <td>25 Ha</td>
                                                <td>0,025 Ton</td>
                                                {{-- <td><span class="badge bg-success">Approved</span></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Pakal</td>
                                                <td>872 Ha</td>
                                                <td>0,872 Ton</td>
                                                {{-- <td><span class="badge bg-warning">Pending</span></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Tandes</td>
                                                <td>150 Ha</td>
                                                <td>0,15 Ton</td>
                                                {{-- <td><span class="badge bg-success">Approved</span></td> --}}
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->



                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Filter By</h5>

                            <form action="{{ route('Filter') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="selectKabupaten" class="form-label">Pilih Kategori: </label>
                                    {{-- <a href="{{ route('MapJatim') }}">Map</a> --}}
                                    {{-- <select id="selectKabupaten" class="form-select">
                                    <option value="all">Produktivitas Padi</option>
                                    <option value="all">Kerugian Petani</option>
                                    <option value="all">Populasi</option>
                                    <option value="all">Tingkat Kemiskinan</option>
                                    <script>
                                        const kabupaten = [
                                            "Bangkalan", "Banyuwangi", "Blitar", "Bojonegoro", "Bondowoso",
                                            "Gresik", "Jember", "Jombang", "Kediri", "Lamongan",
                                            "Lumajang", "Madiun", "Magetan", "Malang", "Mojokerto",
                                            "Nganjuk", "Ngawi", "Pacitan", "Pamekasan", "Pasuruan",
                                            "Ponorogo", "Probolinggo", "Sampang", "Sidoarjo", "Situbondo",
                                            "Sumenep", "Tuban", "Tulungagung", "Batu", "Surabaya"
                                        ];

                                        document.addEventListener("DOMContentLoaded", function() {
                                            const selectKabupaten = document.getElementById("selectKabupaten");

                                            kabupaten.forEach((namaKabupaten) => {
                                                const option = document.createElement("option");
                                                option.value = namaKabupaten;
                                                option.textContent = namaKabupaten;
                                                selectKabupaten.appendChild(option);
                                            });
                                        });
                                    </script>
                                </select> --}}

                                    <div class="select-menu">
                                        <div class="select-btn">
                                            <span class="sBtn-text" data-value="All">Select your option</span>
                                        </div>

                                        <ul class="options" id="option-list">
                                            <li class="option">
                                                <option data-value="Produktivitas Padi" class="option-text">Produktivitas
                                                    Padi
                                                </option>
                                            </li>
                                            <li class="option">
                                                <option data-value="Populasi" class="option-text">Populasi</option>
                                            </li>
                                            <li class="option">
                                                <option data-value="Tingkat Kemiskinan" class="option-text">Tingkat
                                                    Kemiskinan
                                                </option>
                                            </li>
                                            <li class="option">
                                                <option data-value="Luas Area Sawah Terdampak" class="option-text">Luas Area
                                                    Sawah Terdampak</option>
                                            </li>
                                            {{-- @foreach ($Kategoris as $kategori)
                                            <li class="option">
                                                <option class="option-text" data-value="{{ $kategori->id }}"
                                                    {{ old('    kategori') == $kategori->id ? 'selected' : '' }}>{{ $kategori->nm_kategori }}
                                                </option>
                                            </li>
                                        @endforeach --}}
                                        </ul>
                                    </div>
                                    <script>
                                        // const optionMenu = document.querySelector(".select-menu");
                                        // const selectBtn = optionMenu.querySelector(".select-btn");
                                        // const options = optionMenu.querySelectorAll(".option");
                                        // const sBtn_text = optionMenu.querySelector(".sBtn-text");

                                        // selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

                                        // options.forEach(option => {
                                        //     option.addEventListener("click", () => {
                                        //         let selectedOption = option.querySelector(".option-text").innerText;
                                        //         let selectedValue = option.querySelector(".option-text").getAttribute("data-value");

                                        //         sBtn_text.innerText = selectedOption;
                                        //         sBtn_text.setAttribute("data-value", selectedValue);

                                        //         optionMenu.classList.remove("active");
                                        //         console.log(selectedValue);
                                        //         // window.location.href = '/Produk/' + selectedValue;

                                        //     });
                                        // });
                                    </script>
                                </div>



                                <!-- Input untuk memilih Tahun -->
                                <div class="mb-3">
                                    <label for="selectTahun" class="form-label">Pilih Tahun:</label>
                                    <select id="selectTahun" class="form-select" style="margin-bottom: 30px">
                                        <script>
                                            const selectTahun = document.getElementById("selectTahun");
                                            const startYear = 2002;
                                            const endYear = 2022;

                                            for (let year = startYear; year <= endYear; year++) {
                                                const option = document.createElement("option");
                                                option.value = year;
                                                option.textContent = year;
                                                selectTahun.appendChild(option);
                                            }

                                            // selectTahun.addEventListener('change', function() {
                                            //     console.log(this.value); // Mencetak nilai tahun yang dipilih ke konsol
                                            // });
                                        </script>
                                    </select>
                                </div>

                                <button id="filterBtn" class="btn btn-primary" style="width: 50%; border-radius: 5px; ">
                                    Filter
                                </button>
                                <input type="hidden" id="selectedValuesInput" name="selectedValues" value="">
                            </form>
                            <script>
                                let selectedValues = ["All", ""]; // Nilai default untuk kategori dan tahun

                                // Dapatkan input tersembunyi
                                const selectedValuesInput = document.getElementById('selectedValuesInput');

                                // Atur nilai variabel JavaScript ke input tersembunyi saat tombol filter diklik
                                document.getElementById('filterBtn').addEventListener('click', function() {
                                    // Set nilai variabel JavaScript ke value dari input tersembunyi
                                    selectedValuesInput.value = JSON.stringify(selectedValues);
                                });

                                const optionMenu = document.querySelector(".select-menu");
                                const selectBtn = optionMenu.querySelector(".select-btn");
                                const options = optionMenu.querySelectorAll(".option");
                                const sBtn_text = optionMenu.querySelector(".sBtn-text");

                                selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

                                options.forEach(option => {
                                    option.addEventListener("click", () => {
                                        let selectedOption = option.querySelector(".option-text").innerText;
                                        let selectedValue = option.querySelector(".option-text").getAttribute("data-value");

                                        sBtn_text.innerText = selectedOption;
                                        sBtn_text.setAttribute("data-value", selectedValue);

                                        optionMenu.classList.remove("active");
                                        console.log(selectedValue);
                                        selectedValues[0] = selectedValue
                                        // window.location.href = '/Produk/' + selectedValue;

                                    });
                                });

                                // Menambahkan event listener untuk select tahun
                                document.getElementById('selectTahun').addEventListener('change', function() {
                                    let selectedYear = this.value;
                                    console.log("Selected Year:", selectedYear);

                                    // Memperbarui nilai tahun yang dipilih dan menyimpannya ke dalam array
                                    selectedValues[1] = selectedYear;
                                });

                                document.getElementById('filterBtn').addEventListener('click', function() {
                                    console.log("Selected Values:", selectedValues);
                                    // Lakukan pemrosesan atau pengiriman data ke controller di sini
                                });
                            </script>
                            {{-- <a href="" class="btnFilter">Filter</a> --}}

                        </div>
                    </div><!-- End Recent Activity -->

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
                            <h5 class="card-title">{{ $selectedValues[0] }}<span> | {{ $selectedValues[1] }}</span></h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                // document.addEventListener("DOMContentLoaded", () => {
                                //     echarts.init(document.querySelector("#trafficChart")).setOption({
                                //         tooltip: {
                                //             trigger: 'item'
                                //         },
                                //         legend: {
                                //             top: '5%',
                                //             left: 'center'
                                //         },
                                //         series: [{
                                //             name: 'Access From',
                                //             type: 'pie',
                                //             radius: ['40%', '70%'],
                                //             avoidLabelOverlap: false,
                                //             label: {
                                //                 show: false,
                                //                 position: 'center'
                                //             },
                                //             emphasis: {
                                //                 label: {
                                //                     show: true,
                                //                     fontSize: '18',
                                //                     fontWeight: 'bold'
                                //                 }
                                //             },
                                //             labelLine: {
                                //                 show: false
                                //             },
                                //             data: [{
                                //                     value: 1048,
                                //                     name: 'Benowo'
                                //                 },
                                //                 {
                                //                     value: 735,
                                //                     name: 'Pakal'
                                //                 },
                                //                 {
                                //                     value: 580,
                                //                     name: 'Tandes'
                                //                 },
                                //             ]
                                //         }]
                                //     });
                                // });

                                document.addEventListener("DOMContentLoaded", () => {
                                    const data = [{
                                            value: 1048,
                                            name: 'Benowo'
                                        },
                                        {
                                            value: 735,
                                            name: 'Pakal'
                                        },
                                        {
                                            value: 580,
                                            name: 'Tandes'
                                        },
                                    ]

                                    const total = data.reduce((acc, curr) => acc + curr.value, 0);
                                    data.forEach(item => {
                                        item.value = Math.floor((item.value / total) * 100).toFixed(2);
                                    });

                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item',
                                            formatter: '{b}: {d}%',
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

@push('scripts')
    {{-- <script src="jatim_1.js"></script> --}}
    <script src="maps/js/qgis2web_expressions.js"></script>
    <script src="maps/js/leaflet.js"></script>
    <script src="maps/js/leaflet.rotatedMarker.js"></script>
    <script src="maps/js/leaflet.pattern.js"></script>
    <script src="maps/js/leaflet-hash.js"></script>
    <script src="maps/js/Autolinker.min.js"></script>
    <script src="maps/js/rbush.min.js"></script>
    <script src="maps/js/labelgun.min.js"></script>
    <script src="maps/js/labels.js"></script>
    <script src="maps/js/leaflet-control-geocoder.Geocoder.js"></script>
    <script src="maps/data/jatim_1.js"></script>
    <script>
        // var map = L.map('map').setView([-7.3012669468070435, 112.71712674621112], 14);
        // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        // }).addTo(map);

        // var marker = L.marker([-7.31044033156845, 112.72867815857354]).addTo(map);
        // var polygon = L.polygon([
        //     [-7.292065410900937, 112.69851435874224],
        //     [-7.293831989598827, 112.70265568924368],
        //     [-7.292831638662075, 112.70308484266353],
        //     [-7.2935978651118685, 112.70510186373674],
        //     [-7.295513425498254, 112.7050160330528],
        //     [-7.295981672345739, 112.70673264673214],
        //     [-7.3015793126217465, 112.70432938758104],
        //     [-7.302515793182222, 112.7011536522641],
        //     [-7.302515793182222, 112.69887913913897],
        // ]).addTo(map);

        // marker.bindPopup("<b>Yowww</b><br>You are in here.").openPopup();
        // polygon.bindPopup(
        //     "Desa: <b>Bukit Mas</b><br>Kecamatan: <b>Ketintang</b><br>Kabupaten: <b>Surabaya</b><br>Ladang: <b>Padi</b><br>Luas: <b>2 Ha</b>"
        // );

        // function popUp(f, l) {
        //     var out = [];
        //     if (f.properties) {
        //         for (key in f.properties) {
        //             out.push(key + ": " + f.properties[key]);
        //         }
        //         l.bindPopup(out.join("<br />"));
        //     }
        // }
        // var jsonTest = new L.GeoJSON.AJAX(["jatim.geojson"], { onEachFeature: popUp }).addTo(map);

        // L.geoJSON(json_jatim_1).addTo(map)

        // Load GeoJSON from Laravel backend
        // fetch('/geojson')
        //     .then(response => response.json())
        //     .then(data => {
        //         L.geoJSON(data, {
        //             onEachFeature: popUp
        //         }).addTo(map);
        //     });

        // $.getJSON('assets/jatim.geojson', function(json) {
        //     geoLayer = L.geoJson(json, {
        //         style: function(feature) {
        //             return {
        //                 fillOpacity: 0.5,
        //                 weight: 5,
        //                 opacity: 1,
        //                 color: "#008cff"
        //             };
        //         },

        //         onEachFeature: function(feature, layer) {
        //             layer.addTo(map)
        //         }
        //     })
        // })

        // Mendefinisikan variabel array untuk menyimpan nilai dari kedua select option
        // let selectedValues = ["All", ""]; // Nilai default untuk kategori dan tahun

        // // Mendapatkan elemen-elemen yang diperlukan
        // const optionMenu = document.querySelector(".select-menu");
        // const selectBtn = optionMenu.querySelector(".select-btn");
        // const options = optionMenu.querySelectorAll(".options .option-text");
        // const sBtn_text = optionMenu.querySelector(".sBtn-text");

        // // Menambahkan event listener untuk tombol filter
        // // Menambahkan event listener untuk tombol filter
        // // Menambahkan event listener untuk tombol filter


        // // Menambahkan event listener untuk setiap opsi kategori
        // options.forEach(option => {
        //     option.addEventListener("click", () => {
        //         let selectedOption = option.dataset.value;

        //         sBtn_text.innerText = option.textContent;
        //         sBtn_text.setAttribute("data-value", selectedOption);

        //         console.log(selectedOption);

        //         // Memperbarui nilai yang dipilih dan menyimpannya ke dalam array
        //         selectedValues[0] = selectedOption;
        //     });
        // });

        // // Menambahkan event listener untuk select tahun
        // document.getElementById('selectTahun').addEventListener('change', function() {
        //     let selectedYear = this.value;
        //     console.log("Selected Year:", selectedYear);

        //     // Memperbarui nilai tahun yang dipilih dan menyimpannya ke dalam array
        //     selectedValues[1] = selectedYear;
        // });

        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-9.145492105708538, 110.33581552802949],
            [-6.026071711151023, 116.37849054634003]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix(
            '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
        );
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}
        map.createPane('pane_OSMStandard_0');
        map.getPane('pane_OSMStandard_0').style.zIndex = 400;
        var layer_OSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_0;
        map.addLayer(layer_OSMStandard_0);

        function pop_jatim_1(feature, layer) {
            var popupContent = '<table>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties['ID_0'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties[
                        'ID_0'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties['ISO'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties[
                        'ISO'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties[
                'NAME_0'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties['NAME_0'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties['ID_1'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties[
                        'ID_1'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties[
                'NAME_1'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties['NAME_1'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties['ID_2'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties[
                        'ID_2'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties[
                'NAME_2'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties['NAME_2'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties[
                'TYPE_2'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties['TYPE_2'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties[
                    'ENGTYPE_2'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties['ENGTYPE_2'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties[
                    'NL_NAME_2'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties['NL_NAME_2'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                    <tr>\
                                                                        <td colspan="2">' + (feature.properties[
                    'VARNAME_2'] !==
                null ?
                autolinker
                .link(
                    feature
                    .properties['VARNAME_2'].toLocaleString()) : '') + '</td>\
                                                                    </tr>\
                                                                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_jatim_1_0() {
            return {
                pane: 'pane_jatim_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,0.5)',
                interactive: true,
            }
        }
        map.createPane('pane_jatim_1');
        map.getPane('pane_jatim_1').style.zIndex = 401;
        map.getPane('pane_jatim_1').style['mix-blend-mode'] = 'normal';
        var layer_jatim_1 = new L.geoJson(json_jatim_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_jatim_1',
            layerName: 'layer_jatim_1',
            pane: 'pane_jatim_1',
            onEachFeature: pop_jatim_1,
            style: style_jatim_1_0,
        });
        bounds_group.addLayer(layer_jatim_1);
        map.addLayer(layer_jatim_1);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
            .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
            .title += 'Search for a place';
        setBounds();


        // L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}/?access_token={accessToken}', {
        //     maxZoom: 18,
        //     id: 'mapbox/streets-v11',
        //     tileSize: 512,
        //     roomOffset: -1,
        //     accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        // }).addTo(map);




        // // Mengisi pilihan tahun dari 2002 hingga 2022
        // const selectTahun = document.getElementById("selectTahun");
        // for (let tahun = 2002; tahun <= 2022; tahun++) {
        //     selectTahun.options.add(new Option(tahun, tahun));
        // }
    </script>
@endpush
