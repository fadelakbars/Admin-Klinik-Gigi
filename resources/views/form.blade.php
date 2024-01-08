@extends('main')

@section('title', 'Form Pasien')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-stats card-warning">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-users"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Pasien Hari Ini</p>
                                    <h4 class="card-title">1294</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats card-success">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-bar-chart"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Pasien Bulan Ini</p>
                                    <h4 class="card-title">1345</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats card-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-bar-chart"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Pasien Bulan Lalu</p>
                                    <h4 class="card-title">1303</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats card-primary">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-check-circle"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Total Pasien</p>
                                    <h4 class="card-title">576</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="page-title">Form Status Pasien</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-rounded">
                    <form action="" method="post" class="form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="form-group col-3">
                                        <label for="nama">Nama :</label>
                                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="tglLahir">Tgl Lahir :</label>
                                        <input type="date" class="form-control" id="tglLahir" name="tglLahir" autocomplete="off">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="umur">Umur :</label>
                                        <input type="text" class="form-control" id="umur" name="umur" autocomplete="off">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="jk">Jenis Kemain :</label>
                                        <select class="form-control" name="jk" id="jk">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex">
                                    <div class="form-group col-3">
                                        <label for="telp">No. Telpon :</label>
                                        <input type="text" class="form-control" id="telp" name="telp" autocomplete="off">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="alamat">Alamat :</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="tgl">Tgl Kunjugan :</label>
                                        <input type="date" class="form-control" id="tgl" name="tgl">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="biaya">Biaya :</label>
                                        <input type="text" class="form-control" id="biaya" name="biaya" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="diagnosa">Diagnosa :</label>
                                        <textarea class="form-control" id="diagnosa" name="diagnosa" rows="2" autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="terapi">Terapi :</label>
                                        <textarea class="form-control" id="terapi" name="terapi" rows="2" autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan :</label>
                                        <textarea class="form-control" id="keterangan" name="keterangan" rows="2" autocomplete="off"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" name="simpan">Simpan</button>
                            <a href="index.php" class="btn btn-danger text-light">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




