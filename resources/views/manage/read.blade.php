
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@extends('layouts.app')
@section('content')
<form class="form-group" style="width: 400px;margin-left: 10%">
	<label style="font-style: italic;font-size: 30px" >title</label>
	<br>
	<label class="form-control">{{$article->tit}}</label>
	<br>
	<label style="font-style: italic;font-size: 30px" >article</label>
	<br>
<textarea class="form-control" disabled="" style="width: 800px;height: 200px;">{{$article->art}}</textarea>
</form>

<table >
	<tr><td style="padding-left: 130px"><label style="font-style: italic;font-size: 30px" >comments</label></td></tr>

@foreach($artic as $c)
	@if ($c->art_id == $article -> artid)
 <tr>
	<td style="padding-left: 130px"><label style="font-style: italic;font-size: 15px;width: 50px;">
	
      <label><label style="color: black ">{{$c->name}}</label> : <textarea class="form-control" disabled="" style="width: 800px;height:80px;">{{$c ->comm}}</textarea> </label>
       
	</td>
</tr>
 @endif
@endforeach




</table>
<form method="post" action="/read/{{$article -> artid}}" class="form-group" style="width: 400px;margin-left: 10%" >
	{{csrf_field()}}
	<label style="font-style: italic;font-size: 30px" >add comments</label>
	<br>
	<textarea  name="body" style="width: 400px;height: 100px;" placeholder="enter your comments"></textarea>
	<br>
	<input type="submit" name="">
</form>
@endsection

</body>
</html>
</table>
