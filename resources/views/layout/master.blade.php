<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- belong to include folder header and footer -->
    @include('include/header')

    <!-- include the main content of the web site -->
    @yield('content')

    <!-- belong to the include folder header and footer -->
    @include('include/footer')

</body>

</html>
