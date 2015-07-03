
@extends('app')

@section('content')

    <div class="hbox hbox-auto-xs hbox-auto-sm">
        <!-- main -->
        <div class="col">
            <!-- main header -->
            <div class="bg-light lter b-b wrapper-md">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="m-n font-thin h4 text-black">Панель управления</h1>
                        <small class="text-muted">Статистика</small>
                    </div>
                    <div class="col-sm-6 text-right hidden-xs">
                        <div class="inline m-r text-left">
                            <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
                            <div
                                    ui-jq="sparkline"
                                    ui-options="[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}"
                                    class="sparkline inline">loading...
                            </div>
                        </div>
                        <div class="inline text-left">
                            <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
                            <div
                                    ui-jq="sparkline"
                                    ui-options="[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}"
                                    class="sparkline inline">loading...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / main header -->
            <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                <!-- stats -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="row row-sm text-center">
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="h1 text-info font-thin h1">{{$Page}}</div>
                                    <span class="text-muted text-xs">Страниц</span>

                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <a href class="block panel padder-v bg-primary item">
                                    <span class="text-white font-thin h1 block">{{ SMS::balance() }} <i class="fa fa-rub"></i></span>
                                    <span class="text-muted text-xs">Баланс СМС</span>



                <span class="bottom text-right w-full">
                  <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                </span>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href class="block panel padder-v bg-info item">
                                    <span class="text-white font-thin h1 block">432</span>
                                    <span class="text-muted text-xs">Comments</span>
                <span class="top text-left">
                  <i class="fa fa-caret-up text-warning m-l-sm"></i>
                </span>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="font-thin h1">129</div>
                                    <span class="text-muted text-xs">Feeds</span>
                                    <div class="bottom text-left">
                                        <i class="fa fa-caret-up text-warning m-l-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 m-b-md">
                                <div class="r bg-light dker item hbox no-border">
                                    <div class="col w-xs v-middle hidden-md">
                                        <div ui-jq="sparkline" ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}" class="sparkline inline"></div>
                                    </div>
                                    <div class="col dk padder-v r-r">
                                        <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                                        <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="panel wrapper">
                            <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
                                <input type="checkbox" ng-model="showSpline">
                                <i></i>
                            </label>
                            <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
                            <div ui-jq="plot" ui-refresh="showSpline" ui-options="
              [
                { data: [ [0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7] ], label:'TV', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                { data: [ [0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3] ], label:'Mag', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } }
              ],
              {
                colors: ['#23b7e5', '#7266ba'],
                series: { shadowSize: 3 },
                xaxis:{ font: { color: '#a1a7ac' } },
                yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                tooltip: true,
                tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
              }
            " style="height:246px" >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / stats -->

                <!-- service -->
                <div class="panel hbox hbox-auto-xs no-border">
                    <div class="col wrapper">
                        <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
                        <h4 class="font-thin m-t-none m-b-none text-primary-lt">Managed Services</h4>
                        <span class="m-b block text-sm text-muted">Service report of this year (updated 1 hour ago)</span>
                        <div ui-jq="plot" ui-options="
            [
              { data: [ [1,5.5],[2,6.5],[3,7],[4,8],[5,7.5],[6,7],[7,6.8],[8,7],[9,7.2],[10,7],[11,6.8],[12,7],[13,2.5],[14,3.5],[15,7],[16,7],[17,6],[18,7],[19,6.8],[20,5],[21,7],[22,8],[23,6.8],[24,7] ], lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
            ],
            {
              colors: ['#e8eff0'],
              series: { shadowSize: 3 },
              xaxis:{ show:false },
              yaxis:{ font: { color: '#a1a7ac' } },
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
              tooltip: true,
              tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
            }
          " style="height:240px" >
                        </div>
                    </div>
                    <div class="col wrapper-lg w-lg bg-light dk r-r">
                        <h4 class="font-thin m-t-none m-b">Reports</h4>
                        <div class="">
                            <div class="m-b">
                                <span class="pull-right text-primary">60%</span>
                                <span>Consulting</span>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-primary" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                            </div>
                            <div class="m-b">
                                <span class="pull-right text-info">35%</span>
                                <span>Online tutorials</span>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                            </div>
                            <div class="m-b">
                                <span class="pull-right text-warning">25%</span>
                                <span>EDU management</span>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                            </div>
                        </div>
                        <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                    </div>
                </div>
                <!-- / service -->

                <!-- tasks -->
                <div class="panel wrapper">
                    <div class="row">
                        <div class="col-md-6 b-r b-light no-border-xs">
                            <a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
                            <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
                            <div class=" m-b">
                                <div class="m-b">
                                    <span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> 19:30</span>
                                    <a href>Feed cat</a>
                                </div>
                                <div class="m-b">
                                    <span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i> 12:30</span>
                                    <a href>Fishing Time</a>
                                </div>
                                <div class="m-b">
                                    <span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> 10:30</span>
                                    <a href>Kick-off meeting</a>
                                </div>
                                <div class="m-b">
                                    <span class="label text-base bg-light pos-rlt m-r"><i class="arrow right arrow-light"></i> 07:30</span>
                                    <a href>Morning running</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row row-sm">
                                <div class="col-xs-6 text-center">
                                    <div ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#7266ba',
                    scaleColor: false,
                    size: 115,
                    rotate: 90,
                    lineCap: 'butt'
                  }" class="inline m-t">
                                        <div>
                                            <span class="text-primary h4">75%</span>
                                        </div>
                                    </div>
                                    <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
                                </div>
                                <div class="col-xs-6 text-center">
                                    <div ui-jq="easyPieChart" ui-options="{
                    percent: 50,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#23b7e5',
                    scaleColor: false,
                    size: 115,
                    rotate: 180,
                    lineCap: 'butt'
                  }" class="inline m-t">
                                        <div>
                                            <span class="text-info h4">50%</span>
                                        </div>
                                    </div>
                                    <div class="text-muted font-bold text-xs m-t m-b">Started</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / tasks -->


            </div>
        </div>
        <!-- / main -->

    </div>

















@endsection
