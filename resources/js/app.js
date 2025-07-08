import './bootstrap';

// const currentUserId = window.Laravel.user.id;
// const otherUserId = window.Laravel.receiver;
// // console.log(window.Laravel.receiver)

// // Make sure IDs exist!
// console.log(`Listening for chat messages between ${currentUserId} and ${otherUserId}`);

// window.Echo.private(`chat.${currentUserId}.${otherUserId}`)
//     .listen('ChatEvent', (e) => {
//         console.log('New message:', e.message);

//         const isSender = currentUserId === e.senderId;

//         // Get the container (assumes only one element has this class)
//         const container = document.querySelector('.meesage-screen');

//         if (!container) {
//             console.error('Message container not found!');
//             return;
//         }

//         let messageHtml = '';

//         if (isSender) {
//             messageHtml = `
//                 <div class="meseg1 d-flex justify-content-end gap-3 align-items-center">
//                   <div class="text-box1">
//                     ${e.message}
//                   </div>
//                   <div class="img-chat-box">
//                     <img src="/img/guset.jpeg" class="img-1" alt="">    
//                   </div>
//                 </div>
//             `;
//         } else {
//             messageHtml = `
//                 <div class="meseg1 d-flex mb-3 gap-3 align-items-center">
//                   <div class="img-chat-box">
//                     <img src="/img/guset.jpeg" class="img-1" alt="">    
//                   </div>
//                   <div class="text-box" id="messages">
//                     ${e.message}
//                   </div>
//                 </div>
//             `;
//         }

// container.insertAdjacentHTML('beforeend', messageHtml);
//     });


// const currentUserId = window.Laravel?.user?.id || null;
// const otherUserId = window.Laravel.receiver || null;

// if (!currentUserId || !otherUserId) {
//     console.error('❌ User IDs are not defined. currentUserId:', currentUserId, 'otherUserId:', otherUserId);
// } else {
//     // ✅ Sort IDs to ensure both users listen on the SAME channel
//     const ids = [currentUserId, otherUserId].sort();

//     const chatChannel = `chat.${ids[0]}.${ids[1]}`;
//     console.log(`✅ Listening for chat messages on: ${chatChannel}`);

//     window.Echo.private(chatChannel)
//         .listen('ChatEvent', (e) => {
//             console.log('📥 New message:', e.message, 'from:', e.senderId);

//             const isSender = currentUserId === e.senderId;

//             // ✅ Get the container
//             const container = document.querySelector('.meesage-screen');

//             if (!container) {
//                 console.error('❌ Message container not found!');
//                 return;
//             }

//             let messageHtml = '';

//             if (isSender) {
//                 messageHtml = `
//                     <div class="meseg1 d-flex justify-content-end gap-3 align-items-center">
//                       <div class="text-box1">
//                         ${e.message}
//                       </div>
//                       <div class="img-chat-box">
//                         <img src="/img/guset.jpeg" class="img-1" alt="">    
//                       </div>
//                     </div>
//                 `;
//             } else {
//                 messageHtml = `
//                     <div class="meseg1 d-flex mb-3 gap-3 align-items-center">
//                       <div class="img-chat-box">
//                         <img src="/img/guset.jpeg" class="img-1" alt="">    
//                       </div>
//                       <div class="text-box" id="messages">
//                         ${e.message}
//                       </div>
//                     </div>
//                 `;
//             }

//             container.insertAdjacentHTML('beforeend', messageHtml);
//         });
// }