@extends('main')

@section('title', 'Detail Pasien')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Detail Pasien</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card custom-rounded">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <a href="/daftar-pasien" class="btn btn-danger" style="padding:5px;">
                                    <i class="la la-close la-2x text-white"></i>
                                </a>
                            </div><br>
                            <table class="table table-unbordered" id="table">
                                <tbody>
                                    <tr>
                                        <td class="col-md-2">Nama</td>
                                        <td>: {{ $pasien->nama }}</td>
                                        <td class="col-md-2">Jenis Kelamin</td>
                                        <td>: {{ $pasien->jenis_kelamin }} </td>
                                    </tr>
                                    <tr>
                                        <td>Umur</td>
                                        <td>: {{ $pasien->umur }} Tahun</td>
                                        <td>Tanggal Kunjungan</td>
                                        <td>: {{ $pasien->tgl_kunjungan }} </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>: {{ $pasien->alamat }} </td>
                                        <td>Biaya</td>
                                        <td>: Rp.{{ number_format($pasien->biaya, 0, ',', '.') }} </td>
                                    </tr>
                                    <tr>
                                        <td>Diagnosa</td>
                                        <td colspan="3">: {{ $pasien->diagnosa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Terapi</td>
                                        <td colspan="3">: {{ $pasien->terapi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td colspan="3">: {{ $pasien->keterangan }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
