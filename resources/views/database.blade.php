<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
.container{
    border-radius:10px;
}
th {
    color:white;
}
header{
    font-style:italic;
    color:gray;
}
a{
    color:green;
}
td{
    color:white;
}
input{
    border-radius:10px;
    width:100%;
    padding:10px;
    margin:5px;
}
button{
}
</style>
</head>

<body>
@csrf
<center><header><h3>Database</h3></header></center>
<table align='center' cellpadding='10'>
<tr><td><a class='btn btn-primary' href='/users' name='user'>ALL USERS</a></td></tr>
<tr><td><a class='btn btn-primary' href='/adminss' name='admin'>ALL ADMINS</a></td></tr>

</table>
</form>
</body>
</html>