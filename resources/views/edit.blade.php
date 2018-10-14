<!DOCTYPE html>
<html>
<head>
	<title>add student</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<form action="" method="post" style="margin-top:15%;margin-left:28% ; width: 70%">
{{csrf_field()}}
	
name : <input  type="text" class="form-control" value="{{$editst-> name}}" name="nameedit">
</br>
adress : <input type="text" class="form-control" value="{{$editst -> adress}}" name="adressedit">
</br>
<input type="submit" name="subm" class="form-control">
</br>
</form>
@endsection
</body>
</html>