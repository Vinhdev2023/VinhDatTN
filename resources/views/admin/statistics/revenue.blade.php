<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader/>
    <x-admin.navbar/>
    <x-admin.main-sidebar-container :path="$path"/>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Revenue statistics</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Revenue statistics</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            <div class="row">
                <div class="col">
                    <x-admin.card :class="'card-primary card-outline'">
                        <x-admin.card-header>
                            <h3 class="card-title">Date picker</h3>
                        </x-admin.card-header>
                        <form action="{{ route('admin.statistics.data') }}" method="post">
                            @csrf
                            <x-admin.card-body>
                                <!-- Date range -->
                                    <div class="form-group">
                                        <label>Date range:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="FromDateToDate" @if(@isset($dateInput))value="{{$dateInput}}"@endif class="form-control float-right" id="reservation">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                            </x-admin.card-body>
                            <x-admin.card-footer>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </x-admin.card-footer>
                        </form>
                    </x-admin.card>
                </div>
            </div>
            <div class="row">
                <div class="col-11">
                    <x-admin.card :class="'card-primary card-outline'">
                        <x-admin.card-header>
                            <h3 class="card-title">
                                    Thống Kê doanh thu Theo Ngày
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                        </x-admin.card-header>
                        <x-admin.card-body>
                            <div id="line-chart" style="height: 420px;"></div>
                        </x-admin.card-body>
                        <x-admin.card-footer>
                            <h3 class="card-title">
                                Total: {{number_format($sumTotal,0,',','.')}} VND
                            </h3>
                        </x-admin.card-footer>
                    </x-admin.card>
                </div>
                <div class="col-12">
                    <x-admin.card :class="'card-primary card-outline'">
                        <x-admin.card-header>
                            <h3 class="card-title">
                                    Thống Kê Số lượng đơn hàng theo trạng thái
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                        </x-admin.card-header>
                        <x-admin.card-body>
                            <div id="bar-chart" style="height: 420px;"></div>
                        </x-admin.card-body>
                        <x-admin.card-footer>
                            <h3 class="card-title">
                                Tổng số lượng đơn hàng: {{number_format($orderTotal,0,',','.')}}
                            </h3>
                        </x-admin.card-footer>
                    </x-admin.card>
                </div>
            </div>
        </x-admin.main-content>
    </div>
    <x-admin.footer/>
    <x-admin.script>
        <script>
            $(function () {
                //Date range picker
                $('#reservation').daterangepicker({
                    locale: {
                        format: 'DD-MM-YYYY'
                    }
                })
                /*
                 * LINE CHART
                 * ----------
                 */
                //LINE randomly generated data

                var sin = @json($dataDateTotal);
                var date = @json($dataDate);
                var line_data1 = {
                    data : sin,
                    color: '#3c8dbc'
                }
                $.plot('#line-chart', [line_data1], {
                    grid  : {
                        hoverable  : true,
                        borderColor: '#f3f3f3',
                        borderWidth: 1,
                        tickColor  : '#f3f3f3'
                    },
                    series: {
                        shadowSize: 0,
                        lines     : {
                            show: true
                        },
                        points    : {
                            show: true
                        }
                    },
                    lines : {
                        fill : false,
                        color: ['#3c8dbc', '#f56954']
                    },
                    yaxis : {
                        show: true
                    },
                    xaxis : {
                        show: true
                    }
                })
                //Initialize tooltip on hover
                $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
                    position: 'absolute',
                    display : 'none',
                    opacity : 0.8
                }).appendTo('body')
                $('#line-chart').bind('plothover', function (event, pos, item) {
                    if (item) {
                        $('#line-chart-tooltip').html(sin[item.dataIndex][1] + ' VND in ' + date[item.dataIndex][1])
                            .css({
                                top : item.pageY + 5,
                                left: item.pageX + 5
                            })
                            .fadeIn(200)
                    } else {
                        $('#line-chart-tooltip').hide()
                    }

                })
                /* END LINE CHART */

                /*
                 * BAR CHART
                 * ---------
                 */

                var bar_data = {
                data : @json($orderNumStatus_num),
                bars: { show: true }
                }
                $.plot('#bar-chart', [bar_data], {
                grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                },
                series: {
                    bars: {
                    show: true, barWidth: 0.5, align: 'center',
                    },
                },
                colors: ['#3c8dbc'],
                xaxis : {
                    ticks: @json($orderNumStatus_title)
                }
                })
                /* END BAR CHART */
            })
            /*
             * Custom Label formatter
             * ----------------------
             */
            function labelFormatter(label, series) {
                return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                    + label
                    + '<br>'
                    + Math.round(series.percent) + '%</div>'
            }
        </script>
    </x-admin.script>
</x-admin.layout>