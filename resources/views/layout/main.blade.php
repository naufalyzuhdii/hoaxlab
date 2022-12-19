<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navigationbar.css">
    <link rel="stylesheet" href="css/footer.css">
    @yield('link')
    <title>Document</title>
</head>
<body>
    @include('template.navigationbar')
    @yield('content')
    @include('template.footer')

    <script src="{{ asset('js/popup-scan.js') }}"></script>
</body>
</html>