@extends('admin.template.base')

@section('content')
  <!-- konten disini -->


  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-header">
  					Data Konten
  					<a href="{{url('konten/create')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Buat Blog</a>
  				</div>
  				<div class="card-body">
  			<table class="table dataTable" id="dataTable">
  				<thead>
  				<tr>
  					<th>No</th>
  					<th>Aksi</th>
  					<th>Judul Blog</th>
  					<th>Dibuat</th>
  				</tr>
  				</thead>
  				<tbody>
  				@foreach($list_blog as $blog)
	  				<tr>
	  					<td>{{$loop->iteration}}</td>
	  					<td>
	  						<a href="{{url('blog', $blog->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
	  					</td>
	  					<td>{{$blog->judul}}</td>
	  					<td>{{$blog->created_at}}</td>
	  				</tr>
  				@endforeach
  				</tbody>
  			</table>
  		</div>
  			</div>
  		</div>				
  	</div>
  </div>





  <!-- end contten -->
@endsection