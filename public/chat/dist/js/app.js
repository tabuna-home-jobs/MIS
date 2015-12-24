var consult = new Vue({
    el: '#consult',
    data: {
        title: 'Онлайн консультант',
        dialog: [],
        newMessage: ''

    },
    ready: function () {
        this.dialog.push(HistoryUserRequest);
    },
    methods: {
        sendMessage: function () {
            var message = this.newMessage.trim();
            var date = new Date();
            var minutes = "0" + date.getMinutes();


            if (message) {
                //Показывыем клиенту
                var push = {message: message, author: 0, time: date.getHours() + ':' + minutes.substr(-2)};
                this.dialog.push(push);
                this.newMessage = '';

                //Отправляем на сокет
                socket.send(JSON.stringify(push));
                Cookies.set('HistoryUserRequest', push, {expires: 1});


                NotificationAudio.pause();
                NotificationAudio.currentTime = 0;

                $('#dialog-container').animate({scrollTop: $('#dialog-container')[0].scrollHeight}, 700);
                NotificationAudio.play();

            }


        },
        receivingMessage: function (message) {

            console.log(consult.$data.dialog);

            var messageBool = message.message.trim();
            if (messageBool !== 'undefined') {
                consult.$data.dialog.push(message);
                Cookies.set('HistoryUserRequest', message, {expires: 1});


                NotificationAudio.pause();
                NotificationAudio.currentTime = 0;
                $('#dialog-container').animate({scrollTop: $('#dialog-container')[0].scrollHeight}, 700);
                NotificationAudio.play();

            }


        }


    }
});