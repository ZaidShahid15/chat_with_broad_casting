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
@vite('resources/js/app.js')
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
               <div class="search-section">
                 <div class="box"> 
                    <form action="">
                        <div class="search">
                        <input type="text" class="px-2 search-input" placeholder="search">
                        <button  type="submit" class="submit"><i class="ri-search-line"></i></button>
                            </div>
                    </form>
                </div>
               </div>
                <div class="" id="user-data">
                    <div class="content">
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
                    <div class="d-flex gap-4" >
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
                </div>
                
            </div>
            {{-- messeg person chat box --}}
            <div class="messeg-box">
                
                @foreach ($user as $users)
                    <a href="#" data-id="{{ $users->id }}" class="text-decoration-none text-dark reciver_id profile" >
                        {{-- <input type="hidden" class=""  name="" id=""> --}}
                        <div class="border mb-2 px-2 py-2 d-flex align-items-center gap-3 shadow"  style="background-color: #FFFFFF;">
                            <div class="img-box">
                                <img src="{{ asset('img/guset.jpeg') }}" class="w-100 h-100" alt="">
                            </div>
                            <div class="title">
                                <h6>{{ $users->name }}</h6>
                                <p>Lorem ipsum, dolor sit ..</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                  

                
            </div>

            <div class="message-chat">  
                <div class="meesage-screen">
                    {{-- <div class="meseg1 d-flex mb-3  gap-3 align-items-center">
                        <div class="img-chat-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="img-1" alt="">    
                        </div>
                        <div class="text-box" id="messages">
                            Hello!
                        </div>
                    </div> --}}
                    {{-- <div class="meseg1   d-flex  justify-content-end  gap-3 align-items-center">
                        <div class="text-box1">
                            hey
                        </div>
                         <div class="img-chat-box">
                            <img src="{{ asset('img/guset.jpeg') }}" class="img-1" alt="">    
                        </div>
                    </div> --}}
                </div>
                <form  class="form-submit">
                    @csrf
                    <div class="chat-box px-5 d-flex flex-nowrap">
                       <div class="chat-box-input d-flex align-items-center justify-content-center" style="background-color: #cacaca;">
                        <i class="ri-emoji-sticker-line fs-5" style="margin-right: 10px"></i>
                         <input name="message" type="text" class="w-100 border-0  py-2 bg-transparent meseg-input">
                         <input type="hidden" class="w-100 border-0  py-2 bg-transparent " id="reciver-id">
                        <button type="submit" class="chat-button border-none bg-transparent"><i class="ri-send-plane-2-fill"></i>  </button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
            <input type="hidden" class="user" value="{{ auth()->user()->id }}" name="" id="">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function() {
        $('.form-submit').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            // var reciverID = $(this).data('id');
            var reciverID = $('#reciver-id').val();
            // alert(reciverID);
            formData.append('reciverid',reciverID);

            $.ajax({
                url: "{{ route('messegEnter') }}",
                type: 'POST',
                data: formData,
                processData: false,  // ✅ Needed for FormData
                contentType: false,  // ✅ Needed for FormData
                dataType: 'json',    // ✅ Expect JSON response
                success: function(response) {
                    $('.meseg-input').val('');
                },
                error: function(xhr) {
                    console.log('Error:', xhr.responseText);
                }
            });
        });

            // $('.profile').on('click', function () {
            //     var id = $(this).data('id');
            //     var user_id = $('.user').val();
            //     // var reciverid = $('#reciver-id').val();
            //     // alert(id)
            //     const container = document.querySelector('.meesage-screen');
            //     window.Laravel.receiver = document.querySelector('#reciver-id')?.value || null;

            //     $.ajax({
            //         url: "{{ route('chatopen', ['id' => ':id']) }}".replace(':id', id),
            //         type: 'GET',
            //         data: false,
            //         processData: false,
            //         contentType: false,
            //         dataType: 'json',
            //         success: function (response) {
            //             var recive = $('#reciver-id').val(id)
            //             const currentUserId = window.Laravel.user.id;
            //             const otherUserId = id;

            //             console.log('✅ currentUserId:', currentUserId, 'otherUserId:', otherUserId);
            //                 if (!currentUserId || !otherUserId) {
            //                         console.error('❌ User IDs are not defined. currentUserId:', currentUserId, 'otherUserId:', otherUserId);
            //                     } else {
            //                         const ids = [currentUserId, otherUserId].sort();

            //                         const chatChannel = `chat.${ids[0]}.${ids[1]}`;
            //                         console.log(`✅ Listening for chat messages on: ${chatChannel}`);

            //                         window.Echo.private(chatChannel)
            //                             .listen('ChatEvent', (e) => {
            //                                 console.log('📥 New message:', e.message, 'from:', e.senderId);

            //                                 const isSender = currentUserId === e.senderId;
            //                                 let messageHtml = '';

            //                                 const container = document.querySelector('.meesage-screen');
            //                                 container.insertAdjacentHTML('beforeend', messageHtml);
            //                                 if (!container) {
            //                                     console.error('❌ Message container not found!');
            //                                     return;
            //                                 }


            //                                 if (isSender) {
            //                                     messageHtml = `
            //                                         <div class="meseg1 d-flex justify-content-end gap-3 align-items-center">
            //                                         <div class="text-box1">
            //                                             ${e.message}
            //                                         </div>
            //                                         <div class="img-chat-box">
            //                                             <img src="/img/guset.jpeg" class="img-1" alt="">    
            //                                         </div>
            //                                         </div>
            //                                     `;
            //                                 } else {
            //                                     messageHtml = `
            //                                         <div class="meseg1 d-flex mb-3 gap-3 align-items-center">
            //                                         <div class="img-chat-box">
            //                                             <img src="/img/guset.jpeg" class="img-1" alt="">    
            //                                         </div>
            //                                         <div class="text-box" id="messages">
            //                                             ${e.message}
            //                                         </div>
            //                                         </div>
            //                                     `;
            //                                 }

            //                                 container.insertAdjacentHTML('beforeend', messageHtml);
            //                             });
            //                     }

            //                     response.forEach(function (message) {
            //                     let messageHtml = '';

            //                     if (message.user_id == user_id) {
            //                         // Outgoing message
            //                         messageHtml = `
            //                             <div class="meseg1 d-flex justify-content-end gap-3 align-items-center">
            //                                 <div class="text-box1">
            //                                     ${message.message}
            //                                 </div>
            //                                 <div class="img-chat-box">
            //                                     <img src="/img/guset.jpeg" class="img-1" alt="">    
            //                                 </div>
            //                             </div>
            //                         `;
            //                     } else if(message.reciver_id == user_id ) {
            //                         // Incoming message
            //                         messageHtml = `
            //                             <div class="meseg1 d-flex mb-3 gap-3 align-items-center">
            //                                 <div class="img-chat-box">
            //                                     <img src="/img/guset.jpeg" class="img-1" alt="">    
            //                                 </div>
            //                                 <div class="text-box" id="messages">
            //                                     ${message.message}
            //                                 </div>
            //                             </div>
            //                         `;
            //                     }else{
            //                         // messageHtml = `
            //                         // <div>not messeg yet</div>
            //                         // `;
            //                     }

            //                     container.insertAdjacentHTML('beforeend', messageHtml);
            //                     // alert(reciverid)

            //                 });

            //                 container.scrollTop = container.scrollHeight;
            //             },
            //         error: function (xhr) {
            //             console.log('Error:', xhr.responseText);
            //         }
            //     });
            // });

            $('.profile').on('click', function () {
                const otherUserId = $(this).data('id');   // This is the receiver ID
                const currentUserId = window.Laravel.user.id;  // This is your logged-in user

                $('#reciver-id').val(otherUserId);
                $('.message-chat').css('display','block');
                $('.user-data').css('display','block');
                console.log('✅ currentUserId:', currentUserId, 'otherUserId:', otherUserId);

                const container = document.querySelector('.meesage-screen');
                container.innerHTML = ''; // Clear old messages!

                $.ajax({
                    url: "{{ route('chatopen', ['id' => ':id']) }}".replace(':id', otherUserId),
                    type: 'GET',
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function (response) {
                        // 🗂️ Loop through messages and show only valid ones
                        response.forEach(function (message) {
                            let messageHtml = '';

                            const sentByMe = message.user_id == currentUserId && message.reciver_id == otherUserId;
                            const receivedByMe = message.user_id == otherUserId && message.reciver_id == currentUserId;
                            // console.log('sent by ' + sentByMe + " " + "recive by" + receivedByMe)
                            if (sentByMe) {
                                // Outgoing
                                messageHtml = `
                                    <div class="meseg1 d-flex justify-content-end mb-2 gap-3 align-items-center">
                                        <div class="text-box1">
                                            ${message.message}
                                        </div>
                                        <div class="img-chat-box">
                                            <img src="/img/guset.jpeg" class="img-1" alt="">    
                                        </div>
                                    </div>
                                `;
                            } else if (receivedByMe) {
                                // Incoming
                                messageHtml = `
                                    <div class="meseg1 d-flex mb-2 gap-3 align-items-center">
                                        <div class="img-chat-box">
                                            <img src="/img/guset.jpeg" class="img-1" alt="">    
                                        </div>
                                        <div class="text-box" id="messages">
                                            ${message.message}
                                        </div>
                                    </div>
                                `;
                            }

                            if (messageHtml !== '') {
                                container.insertAdjacentHTML('beforeend', messageHtml);
                            }
                        });

                        // Optional: scroll to bottom
                        container.scrollTop = container.scrollHeight;

                        // ✅ Listen to real-time updates for this chat
                        const ids = [otherUserId , currentUserId].sort();
                        const chatChannel = `chat.${ids[0]}.${ids[1]}`;

                        console.log(`✅ Listening on ${chatChannel}`);
                            window.Echo.leave(`private-${chatChannel}`);

                        window.Echo.private(chatChannel)
                            .listen('ChatEvent', (e) => {
                                console.log('📥 New message:', e);

                                const isSender = currentUserId == e.senderId;
                                const isReciver = otherUserId == e.receiverId;
                                console.log('is sender' + isSender + " " + "is reciver" + isReciver);
                                // const isSender = currentUserId == e.senderId;
                                let newMsgHtml = '';

                                if (isSender) {
                                        newMsgHtml = `
                                            <div class="meseg1 d-flex justify-content-end gap-3 align-items-center">
                                                <div class="text-box1">
                                                    ${e.message}
                                                </div>
                                                <div class="img-chat-box">
                                                    <img src="/img/guset.jpeg" class="img-1" alt="">    
                                                </div>
                                            </div>
                                        `;
                                } else if(isReciver){
                                    newMsgHtml = `
                                        <div class="meseg1 d-flex mb-3 gap-3 align-items-center">
                                            <div class="img-chat-box">
                                                <img src="/img/guset.jpeg" class="img-1" alt="">    
                                            </div>
                                            <div class="text-box" id="messages">
                                                ${e.message}
                                            </div>
                                        </div>
                                    `;
                                }else{
                                    return 0;
                                }

                                container.insertAdjacentHTML('beforeend', newMsgHtml);
                                container.scrollTop = container.scrollHeight;
                            });
                    },
                    error: function (xhr) {
                        console.log('Error:', xhr.responseText);
                    }
                });
            });


    });

</script>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'user' => auth()->user(),
        'receiver' => $receiverId ?? null,  
    ]) !!};

    // window.Laravel.receiverId = document.querySelector('#reciver-id').value || null;
    // alert(window.Laravel.receiverId);
</script>


</body>
</html>