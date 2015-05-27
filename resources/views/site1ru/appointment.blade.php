@extends('site1ru/header')

@section('content')
    
    

    <section class="appointment-sec text-center">
        <div class="container">
            <h1>Записаться на приём к специалисту</h1>

            <p class="lead">Быстрая и удобная запись в врачу где бы вы не были</p>
            <div class="row">
            <div class="col-md-6">
            	<figure><img src="/site1.ru/images/appointment-img.jpg" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
            </div>
            <div class="col-md-6">


                <div class="appointment-form clearfix">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

                                <p>Шаг 1</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                   disabled="disabled">2</a>

                                <p>Шаг 2</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                   disabled="disabled">3</a>

                                <p>Шаг 3</p>
                            </div>
                        </div>
                    </div>
                    <form role="form">
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Выберите специализацию</h5>

                                    <div class="form-group row">
                                        <label class="control-label">Место</label>
                                        <select>
                                            <option>Политехническая 1</option>
                                            <option>Политехническая 2</option>
                                            <option>Политехническая 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label">Специализациия</label>
                                        <select>
                                            <option>Врач-гастроэнтеролог</option>
                                            <option>Врач акушер-гинеколог</option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label">Врач</label>
                                        <select>
                                            <option>Дмитриева Калерия Ивановна</option>
                                            <option>Истомин Максим Олегович</option>
                                        </select>
                                    </div>


                                    <button class="btn btn-default  nextBtn btn-rounded pull-right" type="button">
                                        Далее
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Выберите дату</h5>

                                    <h4>Тут должен быть хороший календарь</h4>

                                    <button class="btn btn-default nextBtn btn-rounded pull-right" type="button">Далее
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <h5> Выберите специализацию</h5>

                                    <input type="text" placeholder="Имя">
                                    <input type="text" placeholder="Фамилия">
                                    <input type="email" placeholder="Email адрес">
                                    <input type="text" placeholder="Номер телефона">
                                    <textarea rows="4" placeholder="Комментарий"></textarea>

                                    <button class="btn btn-default btn-rounded pull-right" type="submit">Записаться!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="after-booking-sec text-center">
        <div class="container">
            <h1>Что дальше?</h1>

            <p class="lead">В течении несколько минут вам перезвонит сотрудник нашего центра что бы уточнить
                подробности</p>
            <ul class="medicom-feature-list list-inline text-left">
                <li><i class="fa fa-check medicom-check"></i>Бесплатный звонок</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный первичный приём</li>
                <li><i class="fa fa-check medicom-check"></i>Консультация профессионального специалиста</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный звонок</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный первичный приём</li>
                <li><i class="fa fa-check medicom-check"></i>Консультация профессионального специалиста</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный звонок</li>
                <li><i class="fa fa-check medicom-check"></i>Бесплатный первичный приём</li>
                <li><i class="fa fa-check medicom-check"></i>Консультация профессионального специалиста</li>
            </ul>
        </div>
    </section>
    
    @endsection