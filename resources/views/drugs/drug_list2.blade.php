<html>
    <!--For General User's Page-->
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
      <div class="col-md-2 container-fluid">
        <div class="card border border-success rounded-top">
          <div class="card-title text-center p-3 mb-2 bg-success text-white"><h3>Catagories</h3></div>
          <div class="card-body">

            <div class="d-flex justify-content-center text-center">
              <a href="{{route('homeTodrug')}}" class="text-success"><Strong>All</Strong></a>
            </div>

            <div class="d-flex justify-content-center text-center">
              <a href="{{route('homeTodrug_T')}}" class="text-success"><Strong>Tablets</Strong></a>
            </div>

            <div class="d-flex justify-content-center text-center">
              <a href="{{route('homeTodrug_S')}}" class="text-success"><Strong>Syrups</Strong></a>
            </div>

            <div class="d-flex justify-content-center text-center">
              <a href="{{route('homeTodrug_Dental')}}" class="text-success"><Strong>Dental Products</Strong></a>
            </div>

            <div class="d-flex justify-content-center text-center">
              <a href="{{route('homeTodrug_Drop')}}" class="text-success"><Strong>Drops</Strong></a>
            </div>

            <div class="d-flex justify-content-center text-center">
              <a href="{{route('homeTodrug_Inhaler')}}" class="text-success"><Strong>Inhalers</Strong></a>
            </div>

            <div class="d-flex justify-content-center text-center">
              <a href="{{route('homeTodrug_Inj')}}" class="text-success"><Strong>Others</Strong></a>
            </div>
          {{-- <a href="#" class="text-center text-success"><Strong>Syrups</Strong></a>
              <a href="#" class="text-center text-success"><Strong>Drops</Strong></a>
              <a href="#" class="text-center text-success"><Strong>Dental Products</Strong></a>
              <a href="#" class="text-center text-success"><Strong>Inhalers</Strong></a>
              <a href="#" class="text-center text-success"><Strong>Injections</Strong></a> --}}
            {{-- <a href="#" class="text-center text-success"><Strong>Tablets</Strong></a>
            <p class="text-center text-success"><strong>Syrups</strong></p>
            <p class="text-center text-success"><strong>Drops</strong></p>
            <p class="text-center text-success"><strong>Dental Products</strong></p>
            <p class="text-center text-success"><strong>Inhalers</strong></p>
            <p class="text-center text-success"><strong>Injections</strong></p> --}}
            {{-- <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br> --}}
          </div>
        </div>
        {{-- <h3 class="text-center">Catagories</h3>
        <br>
          <p class="text-center">Tablets</p>
          <p class="text-center">Syrups</p>
          <p class="text-center">Drops</p>
          <p class="text-center">Dental Products</p>
          <p class="text-center">Inhalers</p>
          <p class="text-center">Injections</p> --}}
          <div class="card border border-success rounded-top">
            <div class="card-title text-center p-3 mb-2 bg-success text-white"><h3>Brands</h3></div>
            <div class="card-body">

              <div class="d-flex justify-content-center text-center">
                <a href="{{route('homeTodrug_Square')}}" class="text-success"><Strong>Square</Strong></a>
              </div>

              <div class="d-flex justify-content-center text-center">
                <a href="{{route('homeTodrug_Incepta')}}" class="text-success"><Strong>Incepta</Strong></a>
              </div>

              <div class="d-flex justify-content-center text-center">
                <a href="{{route('homeTodrug_Beximco')}}" class="text-success"><Strong>Beximco</Strong></a>
              </div>
              <div class="d-flex justify-content-center text-center">
                <a href="{{route('homeTodrug_Beacon')}}" class="text-success"><Strong>Beacon</Strong></a>
              </div>
              <div class="d-flex justify-content-center text-center">
                <a href="{{route('homeTodrug_Others')}}" class="text-success"><Strong>Others</Strong></a>
              </div>
              <br><br><br>
            {{-- <a href="#" class="text-center text-success"><Strong>Syrups</Strong></a>
                <a href="#" class="text-center text-success"><Strong>Drops</Strong></a>
                <a href="#" class="text-center text-success"><Strong>Dental Products</Strong></a>
                <a href="#" class="text-center text-success"><Strong>Inhalers</Strong></a>
                <a href="#" class="text-center text-success"><Strong>Injections</Strong></a> --}}
              {{-- <a href="#" class="text-center text-success"><Strong>Tablets</Strong></a>
              <p class="text-center text-success"><strong>Syrups</strong></p>
              <p class="text-center text-success"><strong>Drops</strong></p>
              <p class="text-center text-success"><strong>Dental Products</strong></p>
              <p class="text-center text-success"><strong>Inhalers</strong></p>
              <p class="text-center text-success"><strong>Injections</strong></p> --}}
              {{-- <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br> --}}
            </div>
          </div>

      </div>

      <div class="col-md-10">
        <div class="row d-flex flex-row-reverse">

          <div class="p-4">
            <form action="{{ route('searchAll') }}" method="get">
              @csrf
              <div class="input-group">
                <div class="form-outline">
                  <input type="search" id="form1" name="search" class="form-control" placeholder="search" />

                </div>
                <button type="submit" class="btn btn-primary">
                  Search
                </button>
              </div>
            </form>

          </div>

          <div class="p-4">
            <button class="btn btn-success" type="button"><a href="{{url('/cart_page')}}" class="text-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>Cart</a>
            </button>
          </div>

        </div>


        <div class="row">

          @foreach ($drugs as $item)
          <div class="col-md-4">
            <div class="card border border-bottom-0 border-dark rounded-top">
              <div class="card-body">
                            <!-- Gallery item -->
              <div class="bg-white rounded shadow-sm"><img src="{{asset("images/".$item->image)}}" alt="Napa" class="img-fluid card-img-top">
                <div class="p-4">
                  <h5>{{$item->name}}</h5>
                  <p class="small text-muted mb-0">Brand: {{$item->brand}}</p>
                  <p class="small text-muted mb-0">{{$item->mg}} mg</p>
                  <p class="small text-muted mb-0">Catagory: {{$item->catagory}}</p>
                  <p class="small text-muted mb-0">Scientific Name: {{$item->scientific}}</p>
                  <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <h3>{{$item->price}}৳</h3>
                  </div>
                  <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                    <div class="badge badge-success px-3 rounded-pill font-weight-normal"><a href="{{url("/buy/".$item->id."/drug")}}" style="color: white;">Add to Cart</a></div>
                  </div>
                </div>
              </div>
            <!-- End -->
              </div>
            </div>


          </div>
          @endforeach
        </div>
      </div>
    </div>
    {{-- @foreach ($drugs as $item)
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="{{asset("images/".$item->image)}}" alt="Napa" class="img-fluid card-img-top">
          <div class="p-4">
            <h5>{{$item->name}}</h5>
            <p class="small text-muted mb-0">Brand: {{$item->brand}}</p>
            <p class="small text-muted mb-0">{{$item->mg}} mg</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <div class="badge badge-success px-3 rounded-pill font-weight-normal"><a href="{{url("/buy/".$item->id."/drug")}}" style="color: white;">Buy</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
    @endforeach --}}
    </body>

</html>