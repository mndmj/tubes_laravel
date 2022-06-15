<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    @include('link/css')
    @include('link/js')
    @include('link/fa')

</head>
<body>

    <div class="contrainer-fluid p-0 m-0">
        <div class="row m-0 d-flex justify-content-center">
            @include('link/nav')            
            <div class="col-12 bg-success"></div>
        </div>
    </div>
</body>
</html>