@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Файловый менеджер
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-body">


                        <iframe width="100%" frameborder="0" id="ourframe"
                                src="/admin/filemanager/dialog.php">
                        </iframe>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section><!-- /.content -->

    <script type="text/javascript">
        $(function () {
            var iframe = $('#ourframe', parent.document.body);
            iframe.height($(document.body).height());
        });
    </script>

@endsection
