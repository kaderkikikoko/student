<form action="" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<label>name</label>
	<input type="text" name="name">
	<label>browse file</label><br>
	<input type="file" name="photo"><br>
	<input type="submit" name="">


</form>
