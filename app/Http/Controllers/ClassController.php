<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Classc;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index()
    {
          if(Auth::user()){
           $data=DB::select('select * from classcs');
           return view('vendor.adminlte.class.index',array('data'=>$data));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function add()
    {
          if(Auth::user()){
           
           return view('vendor.adminlte.class.create');
             }
        else{
            return redirect()->back();
        }
    
    }
     public function create(Request $request)
    {
          if(Auth::user()){
           $post=$request->all();
              $classdata=array(
              'cname'=>$post['cname']
              );
              $classid=DB::table('classcs')->insertGetId($classdata);
              if($classid>0){
                  for($i=0;$i < count($post['subject']); $i++){
              $classsubject=array(
                  'classid'=>$classid,
                  'subname'=>$post['subject'][$i]
              );
              
              DB::table('subjects')->insert($classsubject);
                  }
          return redirect()->back();
              }
             }
        else{
            return redirect()->back();
        }
    
    }
    //edit page student
    public function edit($id){
         if(Auth::user()){
        $editid=Student::find($id);
         $data=DB::select('select * from students');
//           return view('vendor.adminlte.class.edit',array('editid'=>$editid));
        return view('vendor.adminlte.class.edit',compact('editid'),array('user'=>Auth::user(),'editid'=>$editid));
              }
        else{
            return redirect()->back();
        }
    }
    //update Student
       public function update(Request $request,$id){
        
         if(Auth::user()){
            $post=$request->all();
//             $today=Carbon::now();
             $updatedata=array(
                 'cname'=>$post['cname']
                 
           
                        );
         $updatecontent= Classc::find($post['classeditid']);
             $updatecontent->update($updatedata);
        return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    }
    //delete id of student
     public function destroy($id)
    {
          if(Auth::user()){
           Classc::find($id)->delete();
           return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
}