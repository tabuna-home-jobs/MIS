
@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Расписание записи на приём
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                    <div class="box box-primary">
                        <div class="box-body no-padding">
                            <!-- THE CALENDAR -->
                            <div id="calendar"></div>
                        </div><!-- /.box-body -->
                    </div><!-- /. box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->




    <script>
        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        $('#calendar').fullCalendar({
            lang: 'ru',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            buttonText: {
                today: 'Сегодня',
                month: 'Месяц',
                week: 'Неделя',
                day: 'День'
            },
            //Random default events
            events: [
              @foreach($Calendar as $element)
                {
                    title: '{{ $element['title'] }}',
                    start: '{{ $element['start'] }}',
                    end: '{{ $element['end'] }}',
                    backgroundColor: '{{ $element['backgroundColor'] }}',
                    borderColor: '{{ $element['borderColor'] }}'
                },
              @endforeach
            ],
            editable: false,
            droppable: false
        });
    </script>






@endsection
