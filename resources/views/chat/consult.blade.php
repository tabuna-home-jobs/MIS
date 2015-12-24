<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Consult</title>
    <link href="/chat/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/chat/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/chat/dist/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<div class="container" id="consult">


    <div class="col-md-6 col-md-offset-3 padder-lg">
        <!-- chat -->
        <div class="panel panel-default">
            <div class="panel-heading">@{{ title }}

                <button type="button" class="close" id="consult-close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body" id="dialog-container">


                <div class="m-b" v-for="message in dialog">


                    <template v-if="!message.author">
                        <a href="" class="pull-left thumb-sm avatar"><img src="/chat/dist/img/a2.jpg" alt="..."></a>

                        <div class="m-l-xxl">
                            <div class="pos-rlt wrapper b b-light r r-2x">
                                <span class="arrow left pull-up"></span>

                                <p class="m-b-none  word-wrap">@{{message.message}}</p>
                            </div>
                            <small class="text-muted"><i class="fa fa-check"></i> Отправлено в @{{message.time}}</small>
                        </div>

                    </template>


                    <template v-if="message.author">


                        <a href="" class="pull-right thumb-sm avatar"><img src="/chat/dist/img/a3.jpg"
                                                                           class="img-circle"
                                                                           alt="..."></a>

                        <div class="m-r-xxl">
                            <div class="pos-rlt wrapper bg-primary r r-2x">
                                <span class="arrow right pull-up arrow-primary"></span>

                                <p class="m-b-none word-wrap">@{{message.message}}</p>

                            </div>
                            <p class="text-right">
                                <small class="text-muted"><i class="fa fa-check"></i> Отправлено в @{{message.time}}
                                </small>
                            </p>
                        </div>


                    </template>


                </div>
            </div>
            <footer class="panel-footer">
                <!-- chat form -->
                <div>
                    <div class="m-b-none">
                        <div class="input-group">
                            <input type="text" class="form-control" required placeholder="Написать сообщение"
                                   v-model="newMessage" v-on:keyup.enter="sendMessage" maxlength="255">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button" v-on:click="sendMessage">Отправить</button>
                </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


</div>


<script src="/chat/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/chat/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/chat/bower_components/js-cookie/src/js.cookie.js"></script>
<script src="/chat/bower_components/vue/dist/vue.min.js"></script>
<script src="/chat/dist/js/secure.js"></script>
<script src="/chat/dist/js/app.js"></script>
<script src="/chat/dist/js/socket.js"></script>


</body>
</html>

