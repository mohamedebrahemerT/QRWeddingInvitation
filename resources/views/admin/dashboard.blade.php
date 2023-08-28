

@extends('admin.index')

@section('content')

 


                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                <a href="{{url('/')}}">{{trans('trans.Home')}}</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>{{trans('trans.Dashboard')}}</span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">{{trans('trans.Dashboard')}}
                            <small>{{trans('trans.Dashboard')}} & {{trans('trans.statistics')}} </small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-green-sharp">
                                                <span data-counter="counterup" data-value="{{App\Models\admin::where('email','!=','admin@admin.com')->count()}}">{{App\Models\admin::where('email','!=','admin@admin.com')->count()}}</span>
                                              
                                            </h3>
                                            <small>{{trans('trans.users')}}</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-pie-chart"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only"> </span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title">   </div>
                                            <div class="status-number">   </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-green-sharp">
                                                <span data-counter="counterup" data-value="{{App\Models\admin::where('email','!=','admin@admin.com')->where('checkifcome','0')->count()}}">{{App\Models\admin::where('email','!=','admin@admin.com')->where('checkifcome','0')->count()}}</span>
                                              
                                            </h3>
                                            <small> لم يحضر </small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-pie-chart"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only"> </span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title">   </div>
                                            <div class="status-number">   </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-green-sharp">
                                                <span data-counter="counterup" 
                                                data-value="{{App\Models\admin::where('email','!=','admin@admin.com')->where('checkifcome','1')->count()}}">{{App\Models\admin::where('email','!=','admin@admin.com')->where('checkifcome','1')->count()}}</span>
                                              
                                            </h3>
                                            <small>  حضر    </small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-pie-chart"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only"> </span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title">   </div>
                                            <div class="status-number">   </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                           
                        </div>
                       
 
                         
                        
                    </div>
                    <!-- END CONTENT BODY -->
               

  @endsection

  