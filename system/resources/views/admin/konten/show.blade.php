@extends('admin.template.base')

@section('content')
  <!-- konten disini -->


  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="card p-3">
  				<div class="card-header">
  					Detail Blog <hr>
  				</div>
          <h3>{{$blog->judul}}</h3>
          <strong>Deskripsi</strong>
          <p>
            {!!nl2br($blog->deskripsi)!!}
          </p>
          <strong>Konten</strong> <hr>
          <p>
            {!!nl2br($blog->konten)!!}
          </p>
  			</div>
  		</div>				
  	</div>
  </div>





  <!-- end contten -->
@endsection