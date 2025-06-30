<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">   
</head>
<body>
    <div class="container">
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row justify-content-center mt-4 " style="width: 100%;height:95vh">
           <div class="d-flex justify-content-center overflow-hidden shadow rounded p-0 border">
             <div class="col-md-6  d-flex flex-column align-items-center  justify-content-center">

           
                <div class="" style="width: 80%; height:100%;">
                    <div class="" style="object-fit:cover;width:100px;height:100px;">
                        <img class="w-100 h-100" src="{{ asset('img/logo.jpg') }}" style="" alt="">

                    </div>  
                    <h1 class="py-3 text-color fs-1" ><i>Register </i></h1>
                    <div class="form-group">
                        <form action="{{ route('auth.register.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3">
                                    <input type="text" placeholder="User Name" class="form-control shadow-none text-color @error('name') is-invalid @enderror"  value="{{ old('name') }}" name="name" id="">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div> 
                                <div class="mb-3">
                                    <input type="email" class="form-control shadow-none text-color @error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="Email" name="email" id="">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                                 <div class="mb-3">
                                    <input type="text" class="form-control shadow-none text-color @error('password') is-invalid @enderror"   placeholder="Password" name="password" id="">
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                                 <div class="mb-3">
                                    <input type="text" class="form-control shadow-none text-color @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password" name="confirm_password" id="">
                                        @error('confirm_password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>
                                <a href="{{ route('login') }}" class="text-decoration-none ">Login here ?</a><br><br>   
                                <div class="text-end">
                                    <input type="submit" class="btn bg-color" name="" id="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           <div class="col-md-6 p-0">
                <div class="w-100 h-100" style="position: relative; overflow: hidden;">
                    <img src="{{ asset('img/login_img.jpg') }}"
                        class=" w-100 h-100"
                        style="object-fit: cover;">
                </div>
            </div>

           </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>