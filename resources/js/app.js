import './bootstrap';


window.Echo.channel('cartoon')
    .listen('ChatEvent', (e) => {
        console.log('New message:', e);
    });