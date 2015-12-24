/*
 * Проверим установленна ли сейчас печенька
 */


var UserIdentification = Cookies.get('UserIdentification');

if (UserIdentification == undefined) {
    console.log('кука не посавлена');
    //Cookies.set('UserIdentification', 'value', { expires: 1 });
}

var ID = function () {
    return '_' + Math.random().toString(36).substr(2, 9);
};


var HistoryUserRequest = Cookies.get('HistoryUserRequest');
if (HistoryUserRequest == undefined) {
    HistoryUserRequest = {
        message: 'Здравствуйте! Могу ли я чем то помочь?',
        author: 1,
        time: (new Date()).getHours() + ':' + ("0" + (new Date()).getMinutes()).substr(-2)
    };
}
else {
    HistoryUserRequest = JSON.parse(HistoryUserRequest);
}


var NotificationAudio = new Audio("/chat/dist/mp3/Notification.mp3", 100, true);