<!DOCTYPE html>
<html>
<head>
	<title>post提交页面</title>
</head>
<body>
	{{old('name')}}
	<h2>get</h2>
	<form action="{{url('form/st')}}" method="get">
		<input type="text" name="name" value="{{old('name')}}">
		<button>提交</button>
		
	</form>

	<h2>post</h2>
	<form action="{{url('/form/st')}}" method="post">
		<input type="text" name="name">
		<button>提交</button>
		{{csrf_field()}}
	</form>

	<h2>put</h2>
	<form action="{{url('/hello')}}" method="post">
		<input type="text" name="name">
		<button>提交</button>
		{{csrf_field()}}

		{{method_field('PUT')}}
	</form>

	<h2>delete</h2>
	<form action="{{url('/hello')}}" method="post">
		<input type="text" name="name">
		<button>提交</button>
		{{csrf_field()}}

		{{method_field('DELETE')}}
	</form>

	<h2>多选</h2>
	<form action="{{url('/form/che')}}" method="post">
		<input type="checkbox" name="che[]" value='che1'>
		<input type="checkbox" name="che[]" value='che2'>
		<input type="checkbox" name="che[]" value='che3'>
		<button>提交</button>
		{{csrf_field()}}
		
	</form>

	<h2>文件</h2>
	<form action="{{url('/form/file')}}" method="post" enctype="multipart/form-data">
		<input type="file" name="files">
		<button>提交</button>
		{{csrf_field()}}	
		
	</form>
</body>
</html>