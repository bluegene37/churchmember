<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content"{{ csrf_token() }}">
    <title>Church Member's Info</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
{{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  --}}
</head>
<body>

        <div id="app">
            <Mynav></Mynav>
                <div class="container">
                   <router-view></router-view> 
                </div>
            <Myfooter></Myfooter>
        </div>

    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>