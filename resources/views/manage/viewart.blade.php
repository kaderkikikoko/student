<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	tr{ border-style: solid;border-width:2px ;padding: 5px}
  td{ border-style: solid;border-width:2px ;padding: 5px}
  .table{border-style:solid;border-width: 3px ;width: 200px;}
</style>
@extends('layouts.app')
@section('content')

 <table class="table" >
 	<tr>
 		<td> number of Article</td>
 		<td> name of writer</td>
 		<td> Title of Article</td>
 		
 	</tr>
@foreach ($view as $myart)
<tr>
	<td> {{ $myart->artid}} </td>
	<td> {{ $myart->writer}}</td>
<td> <a href="read/{{ $myart->artid}}">{{ $myart->tit}}</a> </td>
</tr>


@endforeach
</table>
@endsection
</body>
</html>