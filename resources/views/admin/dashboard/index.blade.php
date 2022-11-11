@extends('admin.layouts.main')
@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$patients}}</span></div>
                                    <div class="stat-heading">Patients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-notebook"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$doctors}}</span></div>
                                    <div class="stat-heading">Doctors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$observations}}</span></div>
                                    <div class="stat-heading">Observations</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-box1"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{$extras}}</span></div>
                                    <div class="stat-heading">Extras</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- /Widgets -->
        <!--  Traffic  -->
        
        <!--  /Traffic -->
        
        <!-- Orders -->
        
        <!-- /.orders -->
        <!-- To Do and Live Chat -->
        
        <!-- /To Do and Live Chat -->
        <!-- Calender Chart Weather  -->
        
        <!-- /#event-modal -->
        <!-- Modal - Calendar - Add Category -->
       

    </div>
    <!-- .animated -->
</div>

@endsection