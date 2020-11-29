@extends('admin.template.base')

@section('content')
  <!-- konten disini -->


  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-header">
  					Data Kategori
  					<a href="{{url('kategori/create')}}" class="btn btn-dark float-right"> Tambah Data</a>
  				</div>
  				<div class="card-body">
  			<table class="table dataTable" id="dataTable">
  				<thead>
  				<tr>
  					<th>No</th>
  					<th>Nama Kategori</th>
  					<th>Aksi</th>
  				</tr>
  				</thead>
  				<tbody>
            @foreach($list_kategori as $kategori)
  				  <tr>
                <td>{{$loop->iteration}}</td> 
                <td>{{$kategori->nama}}</td> 
                <td>
                  @include('admin.utils.delete', ['url' => url('kategori', $kategori->id)]) 
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