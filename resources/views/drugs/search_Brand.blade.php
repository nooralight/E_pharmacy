<!DOCTYPE html>

<html>

<head>

<meta name="_token" content="{{ csrf_token() }}">



<title>Live Search</title>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  body{
    background: url('{{ asset('img/searchB.jpg')}}')center / cover no-repeat;
  	      height: 100vh;
	        margin: 0;
          position: relative;
  }
</style>

</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color:  #2e86c1;font-size:14px  ">
        <div class="container-fluid">
          <a style="color: white;font-size:14px" class="navbar-brand" href="{{route("home")}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
            <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
          </svg><b> E- Pharmacy</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color:white;margin-left:710px" href="{{route("home")}}"><b>Home</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" style="color:white;margin-left:50px" aria-expanded="false">
                  <b>Drugs</b>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li style="font-size:14px  "><a class="dropdown-item" href="{{route("addDrug")}}">Add Drug</a></li>
                  <li style="font-size:14px  "><a class="dropdown-item" href="{{route("homeTodrug")}}">Drug List</a></li>
                </ul>
              </li>
              

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" style="color:white;margin-left:50px" aria-expanded="false">
                  <b>Search</b>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li style="font-size:14px  "><a class="dropdown-item" href="{{route("name.search")}}">Search by Name</a></li>
                  <li style="font-size:14px  "><a class="dropdown-item" href="{{route("brand.search")}}">Search by Brand</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color:white;margin-left:610px" href="{{route("logout")}}"><b>Log Out</b> <svg style="margin-left: 3px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg></a>
              </li>
              
            </ul>

          </div>
        </div>
      </nav>

<div class="container">

<div class="row">

<div class="panel panel-default">

<div class="panel-heading">

<h3 style="font-size:20px  ">Drug info (Search by Brand) </h3>

</div>

<div class="panel-body">

<div class="form-group">

<input type="text" class="form-controller" id="search" name="search" style="padding:11px; font-size:13px" placeholder="Type brand.."></input>

</div>

<table class="table table-bordered table-hover">

<thead style="font-size:16px  ">

<tr  >

<th>ID</th>

<th>Name</th>

<th>Brand</th>

<th>Milligram</th>

<th>Quantity</th>

</tr>

</thead>

<tbody style="font-size:16px">

</tbody>

</table>

</div>

</div>

</div>

</div>

<script type="text/javascript">

$('#search').on('keyup',function(){

$value=$(this).val();

$.ajax({

type : 'get',

url : '{{ route('searchBybrand')}}',

data:{'search':$value},

success:function(data){

$('tbody').html(data);

}

});
})

</script>

<script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>

</body>

</html>