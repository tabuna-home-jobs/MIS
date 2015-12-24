var socket = new WebSocket("ws://193.111.141.198:8991");

socket.onopen = function () {
    console.log("Соединение установлено.");
};

socket.onclose = function (event) {
    if (event.wasClean) {
        console.log('Соединение закрыто чисто');
    } else {
        console.log('Обрыв соединения'); // например, "убит" процесс сервера
    }
    console.log('Код: ' + event.code + ' причина: ' + event.reason);
};

socket.onmessage = function (event) {
    console.log("Получены данные " + event.data);

    console.log(JSON.parse(event.data));

    consult.$options.methods.receivingMessage(JSON.parse(event.data));
};

socket.onerror = function (error) {
    console.log("Ошибка " + error.message);
};