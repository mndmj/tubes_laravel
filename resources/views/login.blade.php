<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        @include('link/css')
        @include('link/js')
        @include('link/fa')

        <title>TUBES WR</title>
    </head>
    <body>
        <div class="contrainer-fluid p-0 m-0">
            <div class="row m-0 vh-100 d-flex justify-content-center">
                @include('link/nav')            
                <div class="col-12 align-self-stretch">
                    <div class="col-lg-3 m-auto">
                        <div class="card border-danger border-5">
                            <div class="card-header bg-dark">
                                <h3>
                                    <strong class="d-block text-center text-white">Form <span class="text-danger">Login</span></strong>
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="/cekLogin" method="post">
                                    @csrf
                                    @if(isset($notif))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Hi!</strong>, akun yang anda masukkan salah.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <small class="text-muted">Belum punya akun? <a href="/register">Register.</a></small>
                                    <div class="form-group text-center pt-3">
                                        <button class="btn btn-primary w-50 rounded-pill" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        -->
    </body>
</html>