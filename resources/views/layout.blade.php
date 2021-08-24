<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Exercise Blade 🧛🏻🧛🏼🧛🏽🧛🏾🧛🏿🧛‍♂️🧛‍♀️</title>
    <style>body {background-color: lightblue; text-align: center;} </style>
</head>
<body>

    @include('header')
                    
    @include('main')
    @section ('header')
    @show
    @section ('main')
    @show
    @section ('footer')
    @show
            
    @include('footer')

</body>
</html>