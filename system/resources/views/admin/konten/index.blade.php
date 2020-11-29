@extends('admin.template.base')

@section('content')
  <!-- konten disini -->


  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-header">
  					Data Konten
  					<a href="{{url('admin/konten/create')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Buat Blog</a>
  				</div>
  				<div class="card-body">
  			<table class="table dataTable" id="dataTable">
  				<thead>
  				<tr>
  					<th>No</th>
  					<th>Judul Blog</th>
  					<th>Dibuat</th>
  					<th width="200px;">Aksi</th>
  				</tr>
  				</thead>
  				<tbody>
  				@foreach($list_blog as $blog)
	  				<tr>
	  					<td>{{$loop->iteration}}</td>
	  					<td>{{$blog->judul}}</td>
	  					<td>{{$blog->created_at}}</td>
	  					<td class="row">   
	  						<a href="{{url('admin/konten', $blog->id)}}" class="btn btn-sm col-md-2 mr-2 btn-dark"><i class="fa fa-info"></i></a>
                <a href="{{url('admin/konten', $blog->id)}}/edit" class="btn btn-sm col-md-2 btn-warning"><i class="fa fa-edit"></i></a>

               @include('admin.utils.delete', ['url' => url('admin/konten', $blog->id)]) 
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


  <!-- end contten -->
@endsection