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
        <div class="row justify-content-center mt-4 " style="width: 100%;height:90vh">
           <div class="d-flex justify-content-center overflow-hidden shadow rounded p-0 border">
             <div class="col-md-6  d-flex flex-column align-items-center  justify-content-center">

           
                <div class="" style="width: 80%; height:80%;">
                    <div class="" style="object-fit:cover;width:100px;height:100px;">
                        <img class="w-100 h-100" src="{{ asset('img/logo.jpg') }}" style="" alt="">

                    </div>  
                    <h1 class="py-3 text-color fs-1" ><i>Login </i></h1>
                    <div class="form-group">
                        <form action="{{ route('auth.login.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="email" placeholder="Email address" class="form-control shadow-none text-color @error('email')
                                    is-invalid
                                @enderror" value="{{ old('email') }}" name="email" id="">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> 
                            <div class="mb-3">
                                <input type="password" class="form-control shadow-none text-color @error('password')
                                    is-invalid
                                @enderror" placeholder="Password" name="password" id="">
                                  @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <a href="{{ route('auth.register') }}" class="text-decoration-none ">Register here ?</a><br><br>   
                            <div class="text-end">
                                <input type="submit"  class="btn btn-info text-white text-indigo">
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