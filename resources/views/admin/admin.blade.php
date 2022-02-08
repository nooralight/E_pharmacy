<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/datatable.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Outfit" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatable.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
          <div class="row justify-content-center pt-2">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Cart Confirm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>

            <div class="row justify-content-center pt-2" >
              <div class="col-11 pt-3">
                <h3 class="text-center">User List</h3>
              </div>
                <div class="col-11 pt-4" style="font-size: 14px">
                  <table id="userTable" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                      <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->status}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                </div>
                <div class="pt-3">
                  <h3 class="text-center">Medicine List</h3>
                </div>
                <div class="col-11 pt-4" style="font-size: 14px">
                  <table id="userTable" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">mg</th>
                        <th scope="col">quantity</th>
                        <th scope="col">image</th>
                        <th scope="col">catagory</th>
                        <th scope="col">scientific</th>
                        <th scope="col">status</th>
                    </thead>
                    <tbody>
                        @foreach ($drugs as $drug)
                      <tr>
                        <td>{{$drug->name}}</td>
                        <td>{{$drug->brand}}</td>
                        <td>{{$drug->mg}}</td>
                        <td>{{$drug->quantity}}</td>
                        <td>{{$drug->image}}</td>
                        <td>{{$drug->catagory}}</td>
                        <td>{{$drug->scientific}}</td>
                        <td>{{$drug->status}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <script>
          $(document).ready(function() {
            $('#dfUsageTable').DataTable({
              pageLength: 10,
              filter: true,
              deferRender: true,
              scrollY: 200,
              scrollCollapse: true,
              scroller: true
            });
          });
    </body>
</html>