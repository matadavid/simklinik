@extends('layout.resepsionis')
@section('konten')
	<div>
		<ol class="breadcrumb">
			<li><a href="javascript:void(0);">Home</a></li>
			<li><a href="javascript:void(0);">Pasien</a></li>
			<li class="active">Tambah Data</li>
		</ol>
	</div>
	    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT DATA PASIEN
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="noRekamMedis">
                                            <label class="form-label">No Rekam Medis</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namaPasien">
                                            <label class="form-label">Nama Pasien</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
	                                <div class="form-group">
	                                	<label class="form-label">Jenis Kelamin : </label>
	                                	<input type="radio" name="jenisKelamin" id="male" value="Laki-laki" class="with-gap">
	                                	<label for="male">Male</label>

	                                	<input type="radio" id="female" name="jenisKelamin" value="perempuan" class="with-gap">
	                                	<label for="female">Female</label>
	                                </div>
                                </div>
                                <div class="col-sm-12">
                                    <select class="form-control" name="golDarah">
                                        <option value="">Golongan Darah</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="tmpLahir" class="form-control">
                                            <label class="form-label">Tempat Lahir</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="tglLahir" class="datepicker form-control" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="umur" class="form-control">
                                            <label class="form-label">Umur</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control" name="golUmur">
                                        <option value="Th">Tahun</option>
                                        <option value="Bln">Bulan</option>
                                        <option value="Hr">Hari</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="pendidikan">
                                        <option value="">Pendidikan Terakhir</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="pekerjaan">
                                            <label class="form-label">Pekerjaan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="noHP">
                                            <label class="form-label">Nomor Handphone</label>
                                        </div>
                                    </div>
                                </div>
                             </div>   
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control" name="agama">
                                        <option value="">Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Khatolik">Khatolik</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="KongHucu">KongHucu</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="stsMenikah">
                                        <option value="">Status Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Lajang">Lajang</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Duda">Duda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control" name="asuransi">
                                        <option value="">Asuransi</option>
                                        <option value="Umum">Umum</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="noPeserta">
                                            <label class="form-label">Nomor Peserta</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="namaIbu">
                                            <label class="form-label">Nama Ibu Kandung</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
	                                <div class="form-group">
	                                	<label class="form-label">Penanggung Jawab : </label>
	                                	<input type="radio" name="pngJawab" value="Ayah" class="with-gap" id="Ayah">
	                                	<label for="Ayah">Ayah</label>

	                                	<input type="radio" name="pngJawab" value="Ibu" class="with-gap" id="Ibu">
	                                	<label for="Ibu">Ibu</label>
	                                	<input type="radio" name="pngJawab" value="Istri" class="with-gap" id="istri">
	                                	<label for="istri">Istri</label>

	                                	<input type="radio" id="suami" name="pngJawab" value="Suami" class="with-gap">
	                                	<label for="suami">Suami</label>	 

	                                	<input type="radio" id="Saudara" name="pngJawab" value="Saudara" class="with-gap">
	                                	<label for="Saudara">Saudara</label>
	                                </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="namaPJ" class="form-control">
                                            <label class="form-label">Nama Penanggung Jawab</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="krjPJ" class="form-control">
                                            <label class="form-label">Pekerjaan Penanggung Jawab</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection