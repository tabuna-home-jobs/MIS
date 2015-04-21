
@extends('app')

@section('content')

    <section class="content-header">
        <h1>
            Онлайн консультант
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">



            <div class='col-md-12'>
                <!-- DIRECT CHAT -->
                <div class="box box-primary direct-chat direct-chat-primary">
                    <div class="box-header with-border">
                        <div class="box-title">

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Фразы <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Стандартный тектс</a></li>
                                    <li><a href="#">Стандартный тектс</a></li>
                                    <li><a href="#">Стандартный тектс</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Досвидания</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class='badge bg-yellow'>3</span>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-left'>Александр</span>
                                    <span class='direct-chat-timestamp pull-right'>2015-04-21 16:06:24</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    С другой стороны консультация с широким активом влечет за собой процесс внедрения и модернизации систем массового участия. Повседневная практика показывает, что новая модель организационной деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач.
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-right'>Sarah Bullock</span>
                                    <span class='direct-chat-timestamp pull-left'>2015-04-21 16:06:24</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    С другой стороны консультация с широким активом влечет за собой процесс внедрения и модернизации систем массового участия. Повседневная практика показывает, что новая модель организационной деятельности требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач.
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-left'>Оператор</span>
                                    <span class='direct-chat-timestamp pull-right'>2015-04-21 16:06:24</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                   Что это?
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-right'>Оператор</span>
                                    <span class='direct-chat-timestamp pull-left'>2015-04-21 16:06:24</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Это рыба!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                        </div><!--/.direct-chat-messages-->


                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class='contacts-list'>
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Count Dracula
                              <small class='contacts-list-date pull-right'>2/28/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Sarah Doe
                              <small class='contacts-list-date pull-right'>2/23/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>I will be waiting for...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nadia Jolie
                              <small class='contacts-list-date pull-right'>2/20/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>I'll call you back at...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nora S. Vans
                              <small class='contacts-list-date pull-right'>2/10/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>Where is your new...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              John K.
                              <small class='contacts-list-date pull-right'>1/27/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>Can I take a look at...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Kenneth M.
                              <small class='contacts-list-date pull-right'>1/4/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>Never mind I found...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Ваше сообщение ..." class="form-control"/>
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-flat">Send</button>
                      </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->






        </div><!-- /.row -->

    </section><!-- /.content -->

@endsection
