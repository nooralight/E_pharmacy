<html>
    <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

            <style>
                body {
                        background: #f4f4f4;
                    }

                .banner {
                background: #a770ef;
                background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
                background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
                }
            </style>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg" style="background-color:  #2e86c1  ">
        <div class="container-fluid">
          <a style="color: white;font-size:14px" class="navbar-brand" href="{{route("home")}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
            <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
          </svg><b>E-pharmacy</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color:white;margin-left:710px" href="{{route("home")}}"><b>Home</b></a>
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
    <!-- End -->
	<br>
    <div class="row">


    @foreach ($drugs as $item)
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="{{asset("images/".$item->image)}}" alt="Napa" class="img-fluid card-img-top">
          <div class="p-4">
            <h5>{{$item->name}}</h5>
            <p class="small text-muted mb-0">Brand: {{$item->brand}}</p>
            <p class="small text-muted mb-0">{{$item->mg}} mg</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><a href="{{url("/drug/".$item->id."/update")}}" style="color: white;">Update</a></div>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><a href="#" onclick="document.getElementById('drug-delete-{{$item->id}}').submit()" style="color: white;">Delete</a></div>
              <form style="display: none" method="post" action={{route("drug.delete", $item->id)}} id={{"drug-delete-".$item->id}}>
                @csrf
                @method("PUT")
            </form>
              <div class="badge badge-success px-3 rounded-pill font-weight-normal"><a href="{{url("/buy/".$item->id."/drug")}}" style="color: white;">Buy</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
    @endforeach
      

    </div>
    <div class="py-5 text-right"><a href="{{route("addDrug")}}" class="btn btn-dark px-5 py-3 text-uppercase">Add New Medicine <br>(Admin)</a></div>
  </div>
</div>
    </body>

</html>