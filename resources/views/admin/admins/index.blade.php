

@extends('admin.index')

@section('content')

    @push('style')
    

    @endpsu

 


                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                                 <a href="{{url('/')}}">{{trans('trans.Home')}}</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="{{url('/')}}/admins">{{trans('trans.admins')}}</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                 
                            </ul>
                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">

<table class="table table-bordered">
  <thead>
    <tr>
 
      <th scope="col">{{trans('trans.admins')}}</th>
      <th scope="col">  لم يحضر  </th>
      <th scope="col"> حضر</th>
    </tr>
  </thead>
  <tbody>
    <tr>
 
      <td>  {{trans('trans.admins')}} : {{App\Models\admin::where('email','!=','admin@admin.com')->count()}} زائر  </td>
      <td>{{App\Models\admin::where('email','!=','admin@admin.com')->where('checkifcome','0')->count()}} ائر </td>
      <td> {{App\Models\admin::where('email','!=','admin@admin.com')->where('checkifcome','1')->count()}} زائر</td>
    </tr>
    
  </tbody>
</table>

                                           


                                            
                                        </div>
                                         
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="btn-group">
                                                        <a href="{{url('/')}}/admins/create" id="sample_editable_1_new" class="btn sbold green"> {{trans('trans.Add New')}}
                                                            <i class="fa fa-plus"></i>
                                                        </a>



                                                    </div>


                                              
                                                </div>


                                            </h3>
                                            <small>{{trans('trans.users')}}</small>
                                                
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> {{trans('trans.name')}}  </th>
                                                    
                                                    <th> {{trans('trans.phone')}} </th>
                                                     <th> {{trans('trans.checkifcome')}} </th>
                                                    <th> {{trans('trans.image')}} </th>
                                                   

                                                    <th>{{trans('trans.Actions')}}  </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            	@foreach($admins as $admin)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td> {{$admin->name}} </td>
                                                     checkifcome
                                                    <td>
                                                      {{$admin->phone}} 
                                                    </td>

                                                    <td>
                                                     @if($admin->checkifcome == '1')
<button type="button" class="btn btn-info"> حضر     </button>
                                   
                                                     @else
 
<button type="button" class="btn btn-warning">لم  يحضر </button>
                                                     @endif
                                                    </td>
                                                    <td class="center">
                                                      
<a href="{{url('/')}}/{{ $admin->image   }}"   download>
                        <img src="{{url('/')}}/{{ $admin->image   }}" class="img img-responsive"

style="width: 150px; height: 150px;" 
                        >
                        </a> 

                         <a onclick="copyToClipboard('copy_{{ $admin->id }}')" href="http://Wa.me/966{{$admin->phone}}?text={{url('/')}}/{{ $admin->image}}" target="_blank">
                                    <i class="fa fa-whatsapp" style="margin-top: 21%;font-size:40px;color:green"></i>
                                </a>

                                <input type="text" id="copy_{{ $admin->id }}" 
value="{{url('/')}}/{{ $admin->image   }}"     style="width: 0px;
border: white;"   /> 
                         
                                                      </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> {{trans('trans.Actions')}}
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">

                                                                

                                                                  <li>
                                                 <a href="{{url('/')}}/checkifcome/{{$admin->id}}">
                                     <i class="icon-docs"></i>  تأكيد بدون كيو ار  </a>
                                                                </li>

                                                                <li>
                                                 <a href="{{url('/')}}/admins/{{$admin->id}}/edit">
                                     <i class="icon-docs"></i>{{trans('trans.edit')}} </a>
                                                                </li>

                                                                 <li>
                                                 <a href="{{url('/')}}/admins/{{$admin->id}}/destroy ">
                                     <i class="icon-docs"></i>{{trans('trans.delete')}} </a>
                                                                </li>
                                                                
                                                                
                                                               
                                                                 
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                  @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                       
                        
                    </div>
                    <!-- END CONTENT BODY -->
                @push('js')
                          <script src="{{url('/')}}/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
                @endpush

  @endsection

  