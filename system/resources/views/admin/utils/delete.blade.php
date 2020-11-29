<form action="{{$url}}" method="post" class="form-inline col-md-3" onsubmit="return confirm('Yakin Akan Menghapus Data Ini ?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger" style="display: flex; align-items: center;"> <i class="fa fa-trash"></i></button>
</form>