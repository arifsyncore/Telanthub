<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Talenta</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/home/img/Frame-3.png') }}" style="object-fit: cover;" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('/assets/home/css/bootstrap.min.css')}}" />
    <link href="{{ asset('/assets/home/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @yield('css')
  </head>
  <body>
    @yield('content')
    <script type="text/javascript" src="{{asset('/assets/home/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/home/select2/js/select2.min.js') }}"></script>
    @yield('js')
  </body>
</html>
