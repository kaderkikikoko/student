@foreach ($photo as $ca)
<table>
	<tr>
		<img style="width: 200 ;height: 200" src="{{asset('storage/'.$ca->photo)}}" alt="...">

	</tr>
</table>

@endforeach