@extends('main')

@section('title', 'Edit Pasien')

@section('content')
<div class="content">
    <div class="container-fluid">
    <h4 class="page-title">Edit Data Pasien</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-rounded">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                            <a href="daftar-pasien" class="btn btn-danger" style="padding:5px;">
                                    <i class="la la-close la-2x text-white"></i>
                            </a>
                        </div><br>
                        <table class="table col-md-12 table-unbordered" id="table">
                            <form action="" method="post">
                                <tbody>
                                <div class="d-flex form-group p-0">
                                    <div class="d-flex col-md-6 form-group">
                                        <label class="col-md-4">Nama :</label>
                                        <input type="text" class="form-control" name="namae" value="" autocomplete="off">
                                        <input type="hidden" name="ide">
                                    </div>
                                    <div class="d-flex col-md-6 form-group">
                                        <label class="col-md-4">Umur :</label>
                                        <input type="text" style="width:150px" class="form-control" autocomplete="off" name="umure" value="">
                                    </div>
                                </div>
                                <div class="d-flex form-group p-0">
                                    <div class="d-flex col-md-6 form-group">
                                        <label class=" col-md-4">Jenis Kelamin :</label>
                                        <select class="form-control" style="width:150px" name="jke" id="jk">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="d-flex col-md-6 form-group">
                                        <label class="col-md-4">Alamat :</label>
                                        <input type="text" class="form-control col-md-6" name="alamate" autocomplete="off" value="">
                                    </div>
                                </div>
                                <div class="d-flex form-group p-0">
                                    <div class="d-flex col-md-6 form-group">
                                        <label class="col-md-4">NO. Telpon :</label>
                                        <input type="text" class="form-control" name="tlpe" autocomplete="off" value="">
                                    </div>
                                    <div class="d-flex col-md-6 form-group">
                                        <label class="col-md-4">Tgl Kunjungan :</label>
                                        <input type="date" style="width:150px" class="form-control" name="tgle">
                                    </div>
                                </div>
                                <div class="d-flex form-group">
                                    <label class="col-md-2">Diagnosa :</label>
                                    <input type="text" class="form-control col-md-9" name="diagnosae" autocomplete="off" value="">
                                </div>
                                <div class="d-flex form-group">
                                    <label class="col-md-2">Terapi :</label>
                                    <input type="text" class="form-control col-md-9 " name="terapie" autocomplete="off" value="">
                                </div>
                                <div class="d-flex form-group">
                                    <label class="col-md-2">Keterangan :</label>
                                    <input type="text"  class="form-control col-md-9 " name="keterangane" autocomplete="off" value="">
                                </div>
                                <div class="d-flex form-group">
                                    <label class="col-md-2">Biaya :</label>
                                    <input type="text" style="width:150px" class="form-control" autocomplete="off" name="biayae" value="">
                                </div>
                            </tbody><br>
                            <tfoot>
                            <div class="d-flex form-group">
                                <button class="btn btn-success mr-2" name="simpanedit">Simpan Perubahan</button>
                            </div>
                            </tfoot>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection