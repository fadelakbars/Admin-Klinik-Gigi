@extends('main')

@section('title', 'Ekpor Data')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Daftar Pasien</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card custom-rounded">
                        <div class="card-body">
                            <table class="table table-bordered" id="cetak">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No.Telp</th>
                                        <th scope="col">Diagnosa</th>
                                        <th scope="col">Terapi</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Tanggal Kunjungan</th>
                                        <th scope="col">Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semua_pasien as $index => $pasien)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $pasien->nama }}</td>
                                            <td>{{ $pasien->jenis_kelamin }}</td>
                                            <td>{{ $pasien->tgl_lahir }}</td>
                                            <td>{{ $pasien->umur }}</td>
                                            <td>{{ $pasien->alamat }}</td>
                                            <td>{{ $pasien->no_tlp }}</td>
                                            <td>{{ $pasien->diagnosa }}</td>
                                            <td>{{ $pasien->terapi }}</td>
                                            <td>{{ $pasien->keterangan }}</td>
                                            <td>{{ $pasien->tgl_kunjungan }}</td>
                                            <td>{{ $pasien->biaya }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
