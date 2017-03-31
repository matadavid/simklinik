@extends('layout.master')
@section('konten')
	<div>
		<ol class="breadcrumb">
			<li><a href="javascript:void(0);">Home</a></li>
			<li><a href="javascript:void(0);">Data Pegawai</a></li>
			<li><a href="javascript:void(0);">Dokter</a></li>
			<li class="active">Tambah Data</li>
		</ol>
	</div>
	<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
							<div class="header">
									<h2>Tambah Data Dokter</h2>
									<ul class="header-dropdown m-r--5">
											<li class="dropdown">
													<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
															<i class="material-icons">more_vert</i>
													</a>
													<ul class="dropdown-menu pull-right">
															<li><a href="javascript:void(0);">Action</a></li>
															<li><a href="javascript:void(0);">Another action</a></li>
															<li><a href="javascript:void(0);">Something else here</a></li>
													</ul>
											</li>
									</ul>
							</div>
							<div class="body">
									<form id="form_advanced_validation" method="POST">
											<div class="form-group form-float">
													<div class="form-line">
															<input type="text" class="form-control" name="minmaxlength" maxlength="10" minlength="3" required>
															<label class="form-label">Kode Dokter</label>
													</div>

											</div>
											<div class="form-group form-float">
													<div class="form-line">
															<input type="text" class="form-control" name="minmaxvalue" min="10" max="200" required>
															<label class="form-label">Nama Dokter</label>
													</div>

											</div>
											<div class="form-group">
												<label class="form-label">Jenis Kelamin : </label>
												<input type="radio" name="gender" id="male" class="with-gap">
												<label for="male">Male</label>

                      	<input type="radio" name="gender" id="female" class="with-gap">
												<label for="female">Female</label>

											</div>
											<div class="form-group">
												<label class="form-label">Gol. Darah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
												<input type="radio" name="gender" id="A" class="with-gap">
												<label for="A">A</label>

												<input type="radio" name="gender" id="B" class="with-gap">
												<label for="B" class="m-l-20">B</label>

                        <input type="radio" name="gender" id="AB" class="with-gap">
												<label for="AB" class="m-l-20">AB</label>

                        <input type="radio" name="gender" id="O" class="with-gap">
												<label for="O" class="m-l-20">O</label>

											</div>
											<div class="form-group form-float">
                        <b>Date</b>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">date_range</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                            </div>
                        </div>

											</div>
											<div class="form-group form-float">
													<div class="form-line">
															<input type="number" class="form-control" name="number" required>
															<label class="form-label">NO. Izin Praktek</label>
													</div>

											</div>
                      <div class="form-group">
                        <label class="form-label">Agama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="radio" name="gender" id="Islam" class="with-gap">
                        <label for="Islam">Islam</label>

                        <input type="radio" name="gender" id="Kristen" class="with-gap">
                        <label for="Kristen" class="m-l-20">Kristen</label>

                        <input type="radio" name="gender" id="Khatolik" class="with-gap">
                        <label for="Khatolik" class="m-l-20">Khatolik</label>

                        <input type="radio" name="gender" id="Hindu" class="with-gap">
                        <label for="Hindu" class="m-l-20">Hindu</label>

                        <input type="radio" name="gender" id="Budha" class="with-gap">
                        <label for="Budha" class="m-l-20">Budha</label>

                        <input type="radio" name="gender" id="konghucu" class="with-gap">
                        <label for="konghucu" class="m-l-20">Konghucu</label>

                        <input type="radio" name="gender" id="Lainnya" class="with-gap">
                        <label for="Lainnya" class="m-l-20">Lainnya</label>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Status Nikah &nbsp;&nbsp;&nbsp;: </label>
                        <input type="radio" name="gender" id="Lajang" class="with-gap">
                        <label for=Lajang>Lajang</label>

                        <input type="radio" name="gender" id="Menikah" class="with-gap">
                        <label for="Menikah" class="m-l-20">Menikah</label>

                        <input type="radio" name="gender" id="Cerai" class="with-gap">
                        <label for="Cerai" class="m-l-20">Cerai</label>

                        <input type="radio" name="gender" id="Lainnya" class="with-gap">
                        <label for="Lainnya" class="m-l-20">Lainnya</label>
                      </div>
											<div class="form-group form-float">
													<div class="form-line">
															<input type="text" class="form-control" name="creditcard" pattern="[0-9]{13,16}" required>
															<label class="form-label">Alamat</label>
													</div>
											</div>

											<div class="form-group form-float">
													<div class="form-line">
															<input type="number" class="form-control" name="number" pattern="[0-9]{13,16}" required>
															<label class="form-label">No. Telp</label>
													</div>
											</div>

                          <label class="form-label">Spesialis</label>
                                <div class="row clearfix">
                                      <div class="col-sm-6">
                                           <div class="form-group">
                                                  <div class="form-line">
                                                      <input type="text" class="form-control"  placeholder="" />
                                                  </div>
                                            </div>
                                     </div>
                                              <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="form-line ">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                              </div>
                                      </div>
                                </div>
											<div class="form-group form-float">
													<div class="form-line">
															<input type="text" class="form-control" name="creditcard" pattern="[0-9]{13,16}" required>
															<label class="form-label">Alumni</label>
													</div>
											</div>
											<button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
									</form>
							</div>
					</div>
			</div>
	</div>
	<!-- #END# Advanced Validation -->

@endsection
