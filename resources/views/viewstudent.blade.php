 @extends('layouts.app')

 <style type="text/css">
	tr{ border-style: solid;border-width:2px ;padding: 5px}
  td{ border-style: solid;border-width:2px ;padding: 5px}
  .table{border-style:solid;border-width: 3px ;padding: 5px}
  .but{width: 100px;height: 25px;}
</style>
@section('content')
<table class="table">
	<tr bgcolor="grey">
		<td>id</td>
		<td>name</td>
		<td>adress</td>
	<td>Created_at</td>
<td>Updated_at</td>
	</tr>
@foreach ($student as $mystudent) 
<tr>
<td> {{ $mystudent -> id}}</td>
<td>{{ $mystudent -> name}}</td>
<td>{{ $mystudent -> adress}}</td>
<td>{{ $mystudent -> created_at}}</td>
<td>{{ $mystudent -> updated_at}}</td>
<td><a href="edit/{{ $mystudent -> id}}"><button class="form-control" >Edit</button></a></td>
<td><a href="delete/{{ $mystudent -> id}}"><button class="form-control" >Delete</button></a></td>
</tr>
@endforeach
</table>
@endsection

