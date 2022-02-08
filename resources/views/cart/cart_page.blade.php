<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/datatable.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

        {{-- icon --}}
        <link rel="canonical" href="https://icons.getbootstrap.com/icons/cart4/">


    </head>
    <body>
        <div class="container-fluid">
              <div class="row justify-content-center pt-2" >
                <div class="col-11 pt-3">
                  <h3 class="text-center">Cart Page</h3>
                </div>
                  <div class="col-11 pt-4" style="font-size: 14px">
                    <table id="userTable" class="table table-striped" style="width:100%">
                      <thead>
                        <tr>
                          <th scope="col">Product Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Action</th>
                      </thead>
                      <tbody>
                        @foreach ($carts as $cart)
                        <tr>
                          <td class="product-name">{{$cart->product_name}}</td>
                          <td class="product-price-cart">{{$cart->product_price}}</td>
                          <td class="product-quantity">
                            <div class="cart-plus-minus">
                              <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" disabled/>
                            </div>
                          </td>
                          <td class="product-subtotal">{{$cart->product_price}}</td>
                          <td>
                            <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><a href="#" onclick="document.getElementById('cart-delete-{{$cart->id}}').submit()" class="text-light">Delete</a></div>
                          </td>
                        </tr>
                        <form style="display: none" method="post" id="{{"cart-delete-".$cart->id}}" action="{{route("cart.delete", $cart->id)}}">
                          @csrf
                          @method("PUT")
                        </form>
                        @endforeach
                      </tbody>
                  </table>








                  <div class="d-flex justify-content-center">
                    <form action="#" method="post">
                      @csrf
                      <label class="form-label">Upload your Prescription</label>
                      <input type="file" name="prescription" class="form-control" id="inputCity">
                      <div class="d-flex justify-content-center pt-2">
                        <button type="submit" class="btn btn-primary px-2">Make Payment</button>
                      </div>
                    </form>
                  </div>
                  <div class="d-flex justify-content-center pt-2">
                    <p class="text-center text-warning bg-success">You can make payment while admin will verify your prescription</p>
                  </div>
                  </div>
              </div>
          </div>
          <script>
            var CartPlusMinus = $('.cart-plus-minus');
            CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
            CartPlusMinus.append('<div class="inc qtybutton">+</div>');
            $(".qtybutton").on("click", function() {
              var $button = $(this);
              var oldValue = $button.parent().find("input").val();

              if ($button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
              } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                  var newVal = parseFloat(oldValue) - 1;
                } else {
                  newVal = 1;
                }
              }
              $button.parent().find("input").val(newVal);

              var unitPrice = +$button.closest("tr").find(".product-price-cart").text();
              $button.closest('tr').find(".product-subtotal").text("$" + (unitPrice * newVal))

            });
          </script>

    </body>
</html>