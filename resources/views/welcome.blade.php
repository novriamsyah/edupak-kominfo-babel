<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-dupak</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.addons.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/shared/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}"> --}}
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" /> --}}
  </head>
  <body>
    <div class="error_page error_2">
      <div class="container inner-wrapper">
        <h1 class="display-1 error-heading">Hallo!</h1>
        <h2 class="error-code">Kamu harus login agar bisa mengakses E-DUPAK</h2>
        <a href="{{ url('/login') }}" class="btn btn-outline-primary" style="width: 150px;">Login</a>
      </div>
    </div>
  </body>
</html>
