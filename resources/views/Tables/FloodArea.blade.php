@extends('app.index')

@section('content')
    <div class="main" id="main">
        <div class="pagetitle">
            <h1>Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="index.html">Map</a></li> --}}
                    <li class="breadcrumb-item active">Flood Area</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <table class="table table-bordered caption-top">
            <caption>List of Flood Casting</caption>
            <thead class="table-light text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kota/Kabupaten</th>
                    <th scope="col">Luas Area Sawah Terdampak</th>
                    <th scope="col">Estimasi jumlah produksi yang rugi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lamongan</td>
                    <td>25 Ha</td>
                    <td>0,025 Ton</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jombang</td>
                    <td>872 Ha</td>
                    <td>0,872 Ton</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jember</td>
                    <td>150 Ha</td>
                    <td>0,15 Ton</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
