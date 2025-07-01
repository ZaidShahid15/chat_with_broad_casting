<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>
    <div class="main">
        <div class="side-left-bar border">
           <div class="main-icon">
                <div class="icon1 mb-2">
                    <a href="" id="anchor"><i class="ri-message-2-line fs-3"></i></a>
                </div>
                <div class="icon2 mb-2">
                    <a href="" id="anchor"><i class="ri-phone-fill fs-3"></i></a>
                </div>
                <div class="icon3 mb-2">
                    <a href="" id="anchor"><i class="ri-copper-coin-line fs-3"></i></a>
                </div>
           </div>
           <div class="logout">
                <a href="{{ route('auth.logout') }}" class="btn btn-danger">logout</a>
           </div>
        </div>
        <div class="side-right" style="height: 200px">
            <div class="nav-box  shadow">
                <div class="box"> 
                    <form action="">
                        <div class="search">
                        <input type="text" class="px-2 search-input" placeholder="search">
                        <button  type="submit" class="submit"><i class="ri-search-line"></i></button>
                            </div>
                    </form>
                </div>
                <div class="content ">
                    <div class="cguset d-flex align-items-center gap-3">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                      
                </div>
                   <div class="d-flex gap-4 " >
                        <div class="icon1">
                            <a href="" id="anchor"><i class="ri-message-2-line fs-3"></i></a>
                        </div>
                        <div class="icon2">
                            <a href="" id="anchor"><i class="ri-phone-fill fs-3"></i></a>
                        </div>
                        <div class="icon3">
                            <a href="" id="anchor"><i class="ri-copper-coin-line fs-3"></i></a>
                        </div>
                    </div>
                <div class="">
                    
                </div>
            </div>
            {{-- messeg person chat box --}}
            <div class="messeg-box">
                <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                 <a href="" class="text-decoration-none text-dark " >
                    <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                        <div class="img-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="title">
                            <h6>guset name</h6>
                            <p>Lorem ipsum, dolor sit ..</p>
                        </div>
                    </div>
                </a>
                
            
                
            </div>

            <div class="message-chat">  
                <div class="meesage-screen">
                    <div class="meseg1 d-flex mb-3  gap-3 align-items-center">
                        <div class="img-chat-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="img-1" alt="">    
                        </div>
                        <div class="text-box">
                            Hello!
                        </div>
                    </div>
                    <div class="meseg1   d-flex  justify-content-end  gap-3 align-items-center">
                        <div class="text-box1">
                            hey
                        </div>
                         <div class="img-chat-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="img-1" alt="">    
                        </div>
                    </div>
                </div>
                <form action="">
                    <div class="chat-box px-5 d-flex flex-nowrap">
                       <div class="chat-box-input d-flex align-items-center justify-content-center" style="background-color: #cacaca;">
                        <i class="ri-emoji-sticker-line fs-5" style="margin-right: 10px"></i>
                         <input type="text" class="w-100 border-0 py-2 bg-transparent meseg-input">
                        <button type="submit" class="chat-button border-none bg-transparent"><i class="ri-send-plane-2-fill"></i>  </button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>