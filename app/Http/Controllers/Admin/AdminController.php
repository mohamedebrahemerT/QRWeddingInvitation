<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  use Auth;
use App\Models\admin;
use App\Models\Order;
use App\Models\AdminGroup;

use QrCode;
use Hash;

class AdminController extends Controller
{

     public function __construct() {
           
        $this->middleware('AdminRole:dashboard_show', [
            'only' => ['dashboard'],
        ]);

          $this->middleware('AdminRole:admins_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:admins_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:admins_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:admins_delete', [
            'only' => ['destroy', 'multi_delete'],
        ]);
        
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function checkifcome($id)
    {
       $admin=admin::where('id',$id)->first();

           $admin->checkifcome='1';
            $admin->save();
     return view('admin.admins.checkifcome',compact('admin'));
     
    }
    public function index()
    {
        $admins=admin::where('type','!=','superadmin')->get();
     return view('admin.admins.index',compact('admins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('admin.admins.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

      ///  return request();

         $data = $this->validate(\request(),
            [
                 'name' => 'required',
               'email' => 'sometimes|nullable',
                'password' => 'sometimes|nullable',
                'phone' => 'required|unique:admins',
            

                 
            ]);

            if ($request->email) 
        {
            $this->validate(\request(),
            [
                'email' => 'required|email|unique:admins',
            ],[],[
                'email' => trans('trans.email'),
            ]);
               $data['email']= $request->email;
        }
        else
        {
                    $data['email']= 'user-' . date("Ymd") . '-'. date("his").'@gmail.com';
        }

     if ($request->password) 
        {
               $data['password']=Hash::make($request->password);
        }
        else
        {
        $data['password']=Hash::make('123456');;
        }

                     $AdminGroup=AdminGroup::first();
                       $data['type']='superadmin';
                       $data['group_id']=$AdminGroup->id;

        $admin=admin::create($data);

        $Qrlink = url('/').'/checkifcome/'.$admin->id;
                $time = time();
        if(!\File::exists(public_path('images'))) 
        {
            \File::makeDirectory(public_path('images'), $mode = 0777, true, true);
        }

        QrCode::size(300)->generate($Qrlink , 'images/'.$time.'.svg');

        $img_url = 'images/'.$time.'.svg';

        

        $admin->image=$img_url;
        $admin->save();

        session()->flash('success', trans('trans.createSuccess'));
        return   redirect('/admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       $admin=admin::where('id',$id)->first();
          /*$Qrlink = url('/').'/checkifcome/'.$id;
                $time = time();
        if(!\File::exists(public_path('images'))) 
        {
            \File::makeDirectory(public_path('images'), $mode = 0777, true, true);
        }

        QrCode::size(300)->generate($Qrlink , 'images/'.$time.'.svg');

        $img_url = 'images/'.$time.'.svg';

        

        $admin->image=$img_url;
        $admin->save();*/

     return view('admin.admins.edit',compact('admin'));

    }

     public function generate(Request $request)
    {
        $time = time();

        // create a folder
        if(!\File::exists(public_path('images'))) 
        {
            \File::makeDirectory(public_path('images'), $mode = 0777, true, true);
        }

        QrCode::size(300)->generate($request->qr_message, 'images/'.$time.'.svg');

        $img_url = 'images/'.$time.'.svg';

        \Session::put('qrImage', $img_url);
       $admin=admin::where('id',$request->id)->first();
        
        return view('admin.admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
           // return request();
         $data = $this->validate(\request(),
            [
                'name' => 'required',
                'email' => 'required',
            
                'phone' => 'required',
                'group_id' => 'required',
                
                 
            ]);

                        if ($request->password) 
                        {
                           $data['password']=Hash::make($request->password);
                        }
     
        $admin=admin::where('id',$request->id)->update($data);

        session()->flash('success', trans('trans.updatSuccess'));
        return   back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $admin=admin::where('id',$id)->first();
                  $admin->delete();
              session()->flash('danger', trans('trans.deleteSuccess'));
        return   redirect('/admins');
    }

        public function viwlogin ()
        {
          if (Auth::guard('admin')->check())
           { 
                

             return view('admin.dashboard');
              
          }
            
             $lang = 'ar';
        if(Session::has('lang')) {
            $lang = Session::get('lang');
        }
        app()->setLocale($lang);
        Session::put('lang', $lang);
             return view('admin.login.viwlogin');
        }

        public function admin_login( )
        { 
               $remeber=Request('Remember')==1? true:false ;
     
  if(Auth::guard('admin')->attempt( ['email'=>Request('username'),'password'=>Request('password') ],$remeber) )
     {   

        return redirect ('/dashboard');
     }
     
      
     
  
     else
     {
            session()->flash('danger',trans('trans.invald email or password '));
      return redirect('/admin_login');
     }
        }


        public function dashboard()
    {
                

             return view('admin.dashboard');
       
    }

    public function Admin_logout_fun()
            {
              auth('admin')->logout();
              return redirect('/admin_login');

                
                
            }



}


 
