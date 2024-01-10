@extends('main')

@section('title', 'Daftar Pasien')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Daftar Pasien</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card custom-rounded">
                        <div class="card-body">
                            <table class="table mt-3" id="tabel">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Diagnosa</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Tgl. Kunjungan</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semua_pasien as $index => $pasien)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $pasien->nama }}</td>
                                            <td>{{ $pasien->jenis_kelamin }}</td>
                                            <td>{{ $pasien->diagnosa }}</td>
                                            <td>{{ $pasien->keterangan }}</td>
                                            <td>{{ $pasien->tgl_kunjungan }}</td>
                                            <td scope="col" class="d-flex">
                                                <a href="/detail-pasien/{{ $pasien->nama }}-{{ $pasien->id }}"
                                                    class="btn btn-primary mr-1">Detail</a>
                                                <a href="" class="btn btn-danger mr-1" style="padding:4px;">
                                                    <i class="la la-trash la-2x text-white"></i>
                                                </a>
                                                <a href="" class="btn btn-info mr-1" style="padding: 4px;">
                                                    <i class="la la-file-text la-2x text-white"></i>
                                                </a>
                                                <a href="edit-pasien" class="btn btn-warning" style="padding: 4px;">
                                                    <i class="la la-edit la-2x text-white"></i>
                                                </a>
                                            </td>
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

@section('script')
    <script src=" {{ asset('style/assets/js/script-detail.js') }}"></script>
@stop
