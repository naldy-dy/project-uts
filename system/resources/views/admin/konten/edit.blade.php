@extends('admin.template.base')

@section('content')
  <!-- konten disini -->
 <div class="card">
    <div class="card-header">
      Buat Blog <hr>
    </div>
    <div class="card-body">
      <form action="{{url('konten', $blog->id)}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
          <label class="label-control">Judul Blog</label>
          <input type="text" name="judul" value="{{$blog->judul}}" required="" class="form-control">
        </div>
        <div class="form-group">
          <label class="label-control">Deskripsi Blog</label>
          <textarea class="form-control" required="" name="deskripsi"></textarea>
        </div>
        <div class="form-group">
          <label class="label-control">Isi Blog</label>
          <textarea name="konten" required="" class="ckeditor form-control"></textarea>
        </div>
        <button class="btn btn-primary btn-sm float-right"><i class="fa fa-save"></i> Unggah</button>
      </form>
    </div>
  </div>

@endsection