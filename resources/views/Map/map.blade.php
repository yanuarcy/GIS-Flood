@extends('app.index')

{{-- @vite('resources/views/Map/leaflet.ajax.js') --}}

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
                                    <h5 class="card-title">Surabaya <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Kota/Kabupaten</th>
                                                <th scope="col">Luas Area Sawah Terdampak</th>
                                                <th scope="col">Estimasi jumlah produksi yang rugi</th>
                                                {{-- <th scope="col">Status</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Lamongan</td>
                                                <td>25 Ha</td>
                                                <td>0,025 Ton</td>
                                                {{-- <td><span class="badge bg-success">Approved</span></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jombang</td>
                                                <td>872 Ha</td>
                                                <td>0,872 Ton</td>
                                                {{-- <td><span class="badge bg-warning">Pending</span></td> --}}
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Jember</td>
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

                            <div class="mb-3">
                                <label for="selectKabupaten" class="form-label">Pilih Kabupaten:</label>
                                <select id="selectKabupaten" class="form-select">
                                    <option value="all">Semua Kabupaten</option>
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
                                </select>
                            </div>

                            <!-- Input untuk memilih Kecamatan -->
                            <div class="mb-3">
                                <label for="selectKecamatan" class="form-label">Pilih Kecamatan:</label>
                                <select id="selectKecamatan" class="form-select">
                                    <option value="all">Semua Kecamatan</option>
                                    <script>
                                        const kecamatan = {
                                            Surabaya: [
                                                "Asemrowo", "Benowo", "Bubutan", "Bulak", "Dukuh Pakis", "Gayungan",
                                                "Genteng", "Gubeng", "Gunung Anyar", "Jambangan", "Karang Pilang",
                                                "Kenjeran", "Krembangan", "Lakarsantri", "Mulyorejo", "Pabean Cantian",
                                                "Pakal", "Rungkut", "Sambikerep", "Sawahan", "Semampir", "Simokerto",
                                                "Sukolilo", "Sukomanunggal", "Tambaksari", "Tandes", "Tegalsari",
                                                "Tenggilis Mejoyo", "Wiyung", "Wonocolo", "Wonokromo"
                                            ],
                                            Sidoarjo: [
                                                "Buduran", "Candi", "Gedangan", "Jabon", "Krembung", "Krian",
                                                "Porong", "Prambon", "Sedati", "Sidoarjo", "Sukodono", "Taman",
                                                "Tanggulangin", "Tarik", "Waru", "Wonoayu"
                                            ],
                                            Bangkalan: [
                                                "Arosbaya", "Bangkalan", "Blega", "Burneh", "Galis", "Geger", "Kamal", "Klampis",
                                                "Kokop", "Konang", "Kwanyar", "Labang", "Modung", "Sepulu", "Socah", "Tanah Merah",
                                                "Tanjung Bumi", "Tragah"
                                            ],
                                            Blitar: [
                                                "Bakung", "Binangun", "Doko", "Gandusari", "Garum", "Kademangan", "Kanigoro",
                                                "Kesamben", "Nglegok", "Panggungrejo", "Ponggok", "Sanankulon", "Selorejo",
                                                "Selopuro", "Srengat", "Sutojayan", "Talun", "Udanawu", "Wates", "Wlingi",
                                                "Wonodadi", "Wonotirto"
                                            ],
                                            Bondowoso: [
                                                "Binakal", "Bondowoso", "Botolinggo", "Cermee", "Curahdami", "Grujugan",
                                                "Jambesari Darus Sholah", "Klabang", "Maesan", "Pakem", "Prajekan", "Pujer",
                                                "Sempol", "Sukosari", "Seumberwringin", "Taman Krocok", "Tanaman", "Tapen",
                                                "Tegalampel", "Tenggarang", "Tlogosari", "Wringin", "Wonosari"
                                            ],
                                            Jember: [
                                                "Ajung", "Ambulu", "Arjasa", "Bangalsari", "Balung", "Gumukmas", "Jelbuk",
                                                "Jenggawah", "Jombang", "Kalisat", "Kaliwates", "Kencong", "Ledokombo", "Mayang",
                                                "Mumbulsari", "Panti", "Pakusari", "Patrang", "Puger", "Rambipuji", "Semboro",
                                                "Silo", "Sukorambi", "Sukowono", "Sumberbaru", "Sumberjame", "Sumbersari", "Tanggul",
                                                "Tempurejo", "Umbulsari", "Wuluhan"
                                            ],
                                            Kediri: [
                                                "Badas", "Banyakan", "Gampangrejo", "Grogol", "Gurah", "Kandangan", "Kandat",
                                                "Kayen Kidul", "Kepung", "Kras", "Kunjang", "Mojo", "Ngadiluwih", "Ngancar", "Ngasem",
                                                "Pagu", "Papar", "Pare", "Plemahan", "Posoklaten", "Puncu", "Purwosari", "Ringinrejo",
                                                "Semen", "Tarokan", "Wates"
                                            ],
                                            Lumajang: [
                                                "Candipuro", "Gucialit", "Jatiroto", "Kedungjajang", "Klakah", "Kunir", "Lumajang",
                                                "Padang", "Pasirian", "Pasrujambe", "Pronojiwo", "Randuagung", "Ranuyoso",
                                                "Rowokangkung", "Senduro", "Sukodono", "Sumbersuko", "Tekung", "Tempeh", "Tempursari",
                                                "Yosowilangun"
                                            ],
                                            Magetan: [
                                                "Barat", "Bendo", "Karangrejo", "Karas", "Kartoharjo", "Kawedanan", "Lembeyan",
                                                "Magetan", "Maospati", "Ngariboyo", "Nguntoronadi", "Panekan", "Parang", "Plaosan",
                                                "Poncol", "Sidorejo", "Sukomoro", "Takeran"
                                            ],
                                            Mojokerto: [
                                                "Bangsal", "Dawarblandong", "Dlanggu", "Gedeg", "Gondang", "Jatirejo", "Jetis",
                                                "Kemlagi", "Kutorejo", "Mojoanyar", "Ngoro", "Pacet", "Pungging", "Puri", "Sooko",
                                                "Trawas", "Trowulan"
                                            ],
                                            Ngawi: [
                                                "Bringin", "Geneng", "Gerih", "Jogorogo", "Karanganyar", "Karangjati", "Kasreman",
                                                "Kedunggalar", "Kendal", "Kwadungan", "Mantingan", "Ngawi Kota", "Ngrambe", "Padas",
                                                "Pangkur", "Paron", "Pitu", "Sine", "Widodaren"
                                            ],
                                            Pamekasan: [
                                                "Batu Marmar", "Galis", "Kadur", "Larangan", "Pademawu", "Pakong", "Paesan", "Palenggan",
                                                "Pamekasan", "Pengantenan", "Proppo", "Tianakan", "Waru"
                                            ],
                                            Ponorogo: [
                                                "Babadan", "Badegan", "Balong", "Bungkal", "Jambon", "Jenangan", "Jetis", "Kauman", "Mlarak",
                                                "Ngebel", "Ngrayun", "Ponorogo", "Pudak", "Pulung", "Sambit", "Sampung", "Sawoo", "Siman",
                                                "Slahung", "Sooko", "Sukorejo"
                                            ],
                                            Sampang: [
                                                "Banyuates", "Camplong", "Jrengik", "Karangpenang", "Kedungdung", "Ketapang", "Omben",
                                                "Pengarengan", "Robatal", "Sampang", "Sokobanah", "Sreseh", "Tambelangan", "Torjun"
                                            ],
                                            Situbondo: [
                                                "Arjasa", "Asembagus", "Banyuglugur", "Banyuputih", "Besuki", "Bungatan", "Jangkar",
                                                "Jatibanteng", "Kapongan", "Kendit", "Mangaran", "Mlandingan", "Panarukan", "Panji",
                                                "Situbondo", "Suboh", "Sumber Malang"
                                            ],
                                            Trenggalek: [
                                                "Panggul", "Munjungan", "Pule", "Dongko", "Tugu", "Karangan", "Kampak", "Watulimo",
                                                "Bendungan", "Gandusari", "Trenggalek", "Pogalan", "Durenan", "Suruh"
                                            ],
                                            Tulungagung: [
                                                "Tulungagung", "Boyolangu", "Kedungwaru", "Ngantru", "Kauman", "Pagerwojo", "Sendang",
                                                "Karangrejo", "Gondang", "Sumbergempol", "Ngunut", "Pucanglaban", "Rejotangan",
                                                "Kalidawir", "Besuki", "Campurdarat", "Bandung", "Pakel", "Tanggung Gunung"
                                            ],

                                            // ... dan seterusnya untuk 38 kabupaten sesuai kebutuhan
                                        };

                                        const selectKecamatan = document.getElementById("selectKecamatan");
                                        const selectKabupaten = document.getElementById("selectKabupaten");

                                        selectKabupaten.addEventListener("change", function() {
                                            while (selectKecamatan.options.length > 1) {
                                                selectKecamatan.remove(1);
                                            }

                                            const selectedKabupaten = selectKabupaten.value;

                                            if (selectedKabupaten === "all") {
                                                Object.keys(kecamatan).forEach((kab) => {
                                                    kecamatan[kab].forEach((namaKecamatan) => {
                                                        const option = document.createElement("option");
                                                        option.value = namaKecamatan;
                                                        option.textContent = namaKecamatan;
                                                        selectKecamatan.appendChild(option);
                                                    });
                                                });
                                            } else {
                                                kecamatan[selectedKabupaten].forEach((namaKecamatan) => {
                                                    const option = document.createElement("option");
                                                    option.value = namaKecamatan;
                                                    option.textContent = namaKecamatan;
                                                    selectKecamatan.appendChild(option);
                                                });
                                            }
                                        });
                                    </script>
                                </select>
                            </div>

                            <!-- Input untuk memilih Tahun -->
                            <div class="mb-3">
                                <label for="selectTahun" class="form-label">Pilih Tahun:</label>
                                <select id="selectTahun" class="form-select">
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
                                    </script>
                                </select>
                            </div>

                            <button id="filterButton" class="btn btn-primary" style="width: 50%; border-radius: 5px; ">
                                Filter
                            </button>

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
                            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
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
                                            data: [{
                                                    value: 1048,
                                                    name: 'Search Engine'
                                                },
                                                {
                                                    value: 735,
                                                    name: 'Direct'
                                                },
                                                {
                                                    value: 580,
                                                    name: 'Email'
                                                },
                                                {
                                                    value: 484,
                                                    name: 'Union Ads'
                                                },
                                                {
                                                    value: 300,
                                                    name: 'Video Ads'
                                                }
                                            ]
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
    <script>
        var map = L.map('map').setView([-7.3012669468070435, 112.71712674621112], 14);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([-7.31044033156845, 112.72867815857354]).addTo(map);
        var polygon = L.polygon([
            [-7.292065410900937, 112.69851435874224],
            [-7.293831989598827, 112.70265568924368],
            [-7.292831638662075, 112.70308484266353],
            [-7.2935978651118685, 112.70510186373674],
            [-7.295513425498254, 112.7050160330528],
            [-7.295981672345739, 112.70673264673214],
            [-7.3015793126217465, 112.70432938758104],
            [-7.302515793182222, 112.7011536522641],
            [-7.302515793182222, 112.69887913913897],
        ]).addTo(map);

        marker.bindPopup("<b>Yowww</b><br>You are in here.").openPopup();
        polygon.bindPopup(
            "Desa: <b>Bukit Mas</b><br>Kecamatan: <b>Ketintang</b><br>Kabupaten: <b>Surabaya</b><br>Ladang: <b>Padi</b><br>Luas: <b>2 Ha</b>"
        );

        function popUp(f, l) {
            var out = [];
            if (f.properties) {
                for (key in f.properties) {
                    out.push(key + ": " + f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        }
        var jsonTest = new L.GeoJSON.AJAX(["colleges.geojson", "counties.geojson"], {
            onEachFeature: popUp
        }).addTo(map);

        // L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}/?access_token={accessToken}', {
        //     maxZoom: 18,
        //     id: 'mapbox/streets-v11',
        //     tileSize: 512,
        //     roomOffset: -1,
        //     accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        // }).addTo(map);




        // Mengisi pilihan tahun dari 2002 hingga 2022
        // const selectTahun = document.getElementById("selectTahun");
        // for (let tahun = 2002; tahun <= 2022; tahun++) {
        //     selectTahun.options.add(new Option(tahun, tahun));
        // }
    </script>
@endpush
