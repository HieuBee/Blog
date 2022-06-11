<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>@yield('title')</title>
    
</head>
{{--css dung chung--}}
<body>
    {{--goi code trang header--}}
    @include('master.header')

    {{--noi chua noi dung thay doi--}}
    @section('content')
        @show

    {{--goi code trang footer--}}
    @include('master.footer')
                                                                                                                                                                                                                                                                                        
    {{--javascrtip dung chung--}}
</body>
</html>