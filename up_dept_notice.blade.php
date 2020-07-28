<html>
<head>
<style>
	body
	{
		background-color: #d1eaa3;
	}
table{
	
	border-collapse:collapse;
	cellspacing="5pt" ;
	  cellpadding="5pt";
	  border="5px";
	  align="center";
	  
}
tbody tr:nth-child(odd){
	background-color:#008080;
	text-color:white;
	
	
}
tbody tr:nth-child(even){
	background-color:#e6dbdc;
	text-color:white;
	
	
}
tbody tr:hover
{
	background-color:#da3559;
}
h1
{
background-color: black;
color: white;
width: 300px;
border-radius: 10px;
}

</style>
</head>
<center>

<h1>Department notices </h1>
</center>
<body>
<table cellpadding="15pt" border="5px" align="center">
<tr>
<th>Title</th>
<th>Description</th>
<th>Department</th>
<th>Links</th>
<th>Edit</th>
<th>Delete</th>
</tr>
@foreach ($notice as $notices)
<tr>
<td>{{$notices->title}}</td>
<td>{{$notices->notice}}</td>
<td>{{$notices->department}}</td>
<td>{{$notices->links}}</td>
<td><a href="/update_note/{{ $notices->id }}">Edit</a></td>
<td><a href="/delete_note/{{ $notices->id }}">Delete</a></td>
</tr>
@endforeach
</table>
</form>
</body>
</html>