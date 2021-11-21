<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Reset Password</h3>
                    <div class="d-flex justify-content-end social_icon">
                        {{-- <span><i class="fa fa-facebook-square"></i></span> --}}
                        {{-- <span><i class="fa fa-twitter-square"></i></span> --}}
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('reset.password.post') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" id="email_address" class="form-control" name="email" placeholder="email" required autofocus>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" id="password" class="form-control" name="password" placeholder="password" required autofocus>
                        </div>
                        @if (session()->has('errorLogin'))
                            <div class="alert alert-danger">{{ session()->get('errorLogin') }}</div>
                        @endif
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="cfm-pwd" required autofocus>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="ResetPassword" class="btn float-right login_btn">
                        </div>

                    </form>

                </div>
                {{-- <hr> --}}

                {{-- <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary"><i
                                class="fa fa-google"></i> Google</a>
                    </div>
                </div> --}}
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Are have an account?<a href="{{ route('showFormLogin') }}">Sign Up</a>
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        <a href="{{ route('forget.password.get') }}">Forgot your password?</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
