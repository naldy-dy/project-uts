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
          <p><i class="fa fa-clock" aria-hidden="true"></i> Rilis :{{$blog->created_at}}</p><hr>
          <h4 style="font-weight: bold;">Deskripsi</h4>
          <p>
            {!!nl2br($blog->deskripsi)!!}
          </p>
          <h4 style="font-weight: bold;">Konten</h4> 
          <p>
            {!!nl2br($blog->konten)!!}
          </p>
  			</div>
  		</div>				
  	</div>
  </div>





  <!-- end contten -->
@endsection