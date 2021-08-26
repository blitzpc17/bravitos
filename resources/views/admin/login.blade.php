<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bravo's - Administración</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('Backend/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('Backend/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('Backend/assets/plugins/animation/css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('Backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Backend/assets/css/layouts/dark.css')}}">

</head>

<body>
    @if(Session::has('Advertencia'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <b>¡Advertencia!</b> {{Session::Get('Advertencia')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    @endif
    <div class="auth-wrapper aut-bg-img" style="background-image: url('{{asset('Backend/assets/images/bg-images/bg3.jpg')}}');">
        <div class="auth-content">
            <div class="text-white">
                <div class="card-body text-center">
                    <form method="post" action="{{route('admin.loguear')}}">
                        @csrf
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>
                        <h3 class="mb-4 text-white">Administración Bravo's</h3>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Correo">
                            <small id="helpId" class="form-text text-muted">{{$errors->login->first('email')}}</small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            <small id="helpId" class="form-text text-muted">{{$errors->login->first('password')}}</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary shadow-2 mb-4">Enviar</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->has('error'))
         <span ><strong>{{ $errors->first('error') }}</strong></span>
         @endif

    <!-- Required Js -->
    <script src="{{asset('Backend/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('Backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/pcoded.min.js')}}"></script>

</body>
</html>
