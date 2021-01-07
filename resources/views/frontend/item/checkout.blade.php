@extends ('frontend.master')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend') }}/css/bootsrap1.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">

        <form  action="{{ route('order.place') }}" method="post">
            @csrf
        <div class="py-5 text-center">

            <h2>Checkout form</h2>

          </div>

      <div class="row">





        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{ $total_cart_item }}</span>
          </h4>





<ul class="list-group mb-3">

    <li class="list-group-item ">





<table class="table">
    <thead>
      <tr>
        {{-- <th scope="col">serial</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Sub-Total</th>
      </tr>
    </thead>
    <tbody>


        @foreach ($carts as $key=>$data)
      <tr>
        {{-- <th scope="row">{{$key+1}}</th> --}}
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['price'] }} BDT</td>
        <td>{{ $data['price']* $data['quantity'] }} BDT</td>
      </tr>
      @endforeach
    </tbody>
  </table>








      </li>





      <li class="list-group-item d-flex justify-content-between">
        <span>Total</span>
        <strong>{{ $total}} BDT</strong>
      </li>
    </ul>










        </div>


        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="first_name">First name</label>
                <input name="first_name" type="text" class="form-control" id="first_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="last_name">Last name</label>
                <input name="last_name" type="text" class="form-control" id="last_name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>


            <div class="mb-3">
                <label for="mobile">Mobile <span class="text-muted"></span></label>
                <input name="mobile" type="mobile" class="form-control" id="mobile" placeholder="">
                <div class="invalid-feedback">
                  Please enter a valid mobile number for shipping updates.
                </div>
              </div>


            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input name="email" type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input name="address" type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>


            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Cash On Delivery</label>
              </div>
             </div>


            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block"  type="submit">Place Order </button>
          </form>
        </div>
      </div>
     </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
@endsection
