<?php



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
          if(Auth::user()){
           $data=DB::table('students')
               ->join('classcs','students.sclass','=','classcs.id')
               ->select('classcs.cname','students.*')
               ->get();
           return view('vendor.adminlte.student.index',array('data'=>$data));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function add()
    {
          if(Auth::user()){
           $classdata=DB::select('select * from classcs');
           $feedata=DB::select('select * from fee_structures');
           return view('vendor.adminlte.student.create',array('classdata'=>$classdata,'feedata'=>$feedata));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function create(Request $request)
    {
          if(Auth::user()){
           $std=new Student();
              $std->sname=Input::get('fname');
              $std->saddress=Input::get('address');
              $std->sfee=Input::get('fee');
              $std->birthdate=Input::get('bdate');
              $std->sclass=Input::get('classid');
              $std->classroll=Input::get('croll');
              $std->feedue=Input::get('due');
              $std->save();
          return redirect()->back();
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
              $classdata=DB::select('select * from classcs');
           return view('vendor.adminlte.student.edit',array('editid'=>$editid,'classdata'=>$classdata));
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
                 'sname'=>$post['fname'],
                 'saddress'=>$post['address'],
                 'feedue'=>$post['due'],
                 'sclass'=>$post['classid']
           
                        );
         $updatecontent= Student::find($post['studenteditid']);
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
           Student::find($id)->delete();
           return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
}