@extends('layout.master')
@section('konten')
	<div>
		<ol class="breadcrumb">
			<li><a href="javascript:void(0);">Home</a></li>
			<li><a href="javascript:void(0);">Data Pegawai</a></li>
			<li><a href="javascript:void(0);">Dokter</a></li>
			<li class="active">Lihat Data</li>
		</ol>
	</div>

	<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
							<div class="header">
									<h2>
											TABEL DATA PEGAWAI
									</h2>
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
									<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
											<thead>
													<tr>
															<th>Kode Dokter</th>
															<th>Nama Dokter</th>
															<th>JK</th>
															<th>Tempat Lahir</th>
															<th>Tanggal Lahir</th>
															<th>G.d</th>
															<th>Agama</th>
															<th>Alamat</th>
															<th>No. Hp</th>
															<th>Alumni</th>
															<th>No Ijin Praktek</th>
															<th>Status Nikah</th>
													</tr>
											</thead>

											<tbody>

													<tr>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
													</tr>
													<tr>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
															<td>...</td>
													</tr>
											</tbody>
									</table>
							</div>
					</div>
			</div>
	</div>
	
@endsection
