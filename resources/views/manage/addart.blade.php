<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')

<form action="" method="post" style="width: 50%; height: 40%;margin-left: 10%;margin-top: 10%">
	{{csrf_field()}}
 title : <input class="form-control" type="text" name="title" maxlength="30" required="">
 <br>
 article: <textarea required="" style="height: 200px" class="form-control" placeholder="entre your article" name="article"></textarea>
<br>
<input class="form-control" type="submit" name="">
</form>

@endsection
</body>
</html>