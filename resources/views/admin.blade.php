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
            <div class="col-10 bg-light shadow p-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <td style="width: 50px">#</td>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th style="width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>