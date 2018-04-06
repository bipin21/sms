<?php



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Teacher;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
          if(Auth::user()){
           $data=DB::select('select * from teachers');
           return view('vendor.adminlte.teacher.index',array('data'=>$data));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function add()
    {
          if(Auth::user()){
//           $classdata=DB::select('select * from classcs');
           return view('vendor.adminlte.teacher.create');
             }
        else{
            return redirect()->back();
        }
    
    }
     public function create(Request $request)
    {
          if(Auth::user()){
           $std=new Teacher();
              $std->tname=Input::get('tname');
              $std->taddress=Input::get('taddress');
              $std->tphone=Input::get('tphone');
             
              $std->save();
          return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
    //edit page teacher
    public function edit($id){
         if(Auth::user()){
        $editid=Teacher::find($id);
         $data=DB::select('select * from teachers');
//              $classdata=DB::select('select * from classcs');
           return view('vendor.adminlte.teacher.edit',array('editid'=>$editid));
//        return view('vendor.adminlte.student.edit',compact('editid'),array('user'=>Auth::user()));
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
                 'tname'=>$post['tname'],
                 'taddress'=>$post['taddress'],
                 'tphone'=>$post['tphone'],
                 
           
                        );
         $updatecontent= Teacher::find($post['teachereditid']);
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
           Teacher::find($id)->delete();
           return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
}