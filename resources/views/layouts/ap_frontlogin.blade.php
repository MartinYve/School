<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('logi/css/style.css')}}">
    <style>
      .login{
          text-decoration:none;
      }
    </style>
</head>
<body>
    <br><br><br>
        @yield('content')
  <script src="{{asset('logi/js/jquery.min.js')}}"></script>
  <script src="{{asset('logi/js/popper.js')}}"></script>
  <script src="{{asset('logi/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('logi/js/main.js')}}"></script>
</body>  
</html>