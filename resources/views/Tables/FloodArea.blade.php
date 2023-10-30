@extends('app.index')

@section('content')
    <div class="main" id="main">

        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="card-title">
                        <h2>Tables</h2>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#Overview">Tables</a></li>
                                <li class="breadcrumb-item active">Flood Area</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->

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
@endsection
