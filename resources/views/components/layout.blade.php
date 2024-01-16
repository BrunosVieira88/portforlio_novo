<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/font.awesome.min.css" />
    <script src="css/all.min.js"></script>
    <script src="js/font.awesome.min.js"></script>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
    
    <title>{{ $title }}</title>
</head>
<body >
   {{$slot}}
</body>
</html>
<script src="{{asset('site/jquery.js')}}"></script>
<script src="{{asset('site/bootstrap.js')}}"></script>