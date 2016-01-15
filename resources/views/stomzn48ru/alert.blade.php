
@if (Session::has('good'))
    <div class="container alert-container">
        <div class="vc_message_box vc_message_box-solid vc_message_box-square vc_color-success">
            <div class="vc_message_box-icon"><i class="fa fa-check-circle-o"></i>
            </div><p class="p1"> {{Session::get('good')}}</p>
        </div>
    </div>
@elseif(Session::has('bad'))
    <div class="container alert-container">
        <div class="vc_message_box vc_message_box-solid vc_message_box-square vc_color-danger">
            <div class="vc_message_box-icon"><i class="fa fa-times-circle-o"></i>
            </div><p class="p1"> {{Session::get('bad')}}</p>
        </div>
    </div>







@endif


@if (count($errors) > 0)
    <div class="container alert-container">
        <div class="vc_message_box vc_message_box-solid vc_message_box-square vc_color-danger">
            <div class="vc_message_box-icon"><i class="fa fa-times-circle-o"></i>
            </div><p class="p1"> <strong>Ошибка!</strong> Пожалуйста проверте вводимые данные.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </p>
        </div>
    </div>



@endif
