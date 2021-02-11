{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 7 PayPal Payment Gateway Integration Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>

<body>
    <div class="container mt-5 text-center">
        <h2>Laravel 7 PayPal Integration Example</h2>

        <a href="{{ route('make.payment') }}" class="btn btn-primary mt-3">Pay $224 via Paypal</a>
    </div>
</body>

</html> --}}
<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  {{-- <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> --}}
  {{-- <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet"> --}}
</head>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AcjvWd_BX9E4k7zJqi81MezUjYlF_KcsVjFDhLFrEqEhh0LbaxIaDNO0hp2G6SXRxw7dHAlLVi1b_6JF"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
  
  <div id="paypal-button-container"></div>

  {{-- <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script> --}}
</body>
<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '10.0'
            }
          }]
        });
      }
    }).render('#paypal-button-container');
  </script>
  {{-- <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
          alert('Transaction completed by ' + details.payer.name.given_name);
        });
      }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
  </script> --}}
  <h1>hi fayaz</h1>
    <h1><i class="fas fa-angle-down"></i></h1>
    <h1><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      {{-- <i class="fad fa-user-astronaut fa-rotate-90"></i></h1> --}}
      {{-- <i class="fa fa-car"></i> --}}
{{-- <i class="fa fa-car" style="font-size:48px;"></i> --}}
{{-- <i class="fa fa-car" style="font-size:60px;color:red;"></i> --}}