@extends('admin.template.base')

@section('content')
  <!-- konten disini -->
 <div class="card">
  	<div class="card-header">
  		Buat Blog <hr>
  	</div>
  	<div class="card-body">
  		<form action="{{url('kategori')}}" method="post">
  			@csrf
  			<div class="form-group">
  				<label class="label-control">Nama Kategori</label>
  				<input type="text" name="nama" class="form-control">
  			</div>
  			<button class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Buat Kategori</button>
  		</form>
  	</div>
  </div>


  <!-- end contten -->
@endsection