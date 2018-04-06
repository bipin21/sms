<?php



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Subject;
use App\Classc;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
  
   
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
          if(Auth::user()){
           $data=DB::table('subjects')
               ->join('classcs','subjects.classid','=','classcs.id')
               ->select('classcs.cname','subjects.*')
               ->get();
           return view('vendor.adminlte.subject.index',array('data'=>$data));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function add()
    {
          if(Auth::user()){
           $classdata=DB::select('select * from classcs');
           return view('vendor.adminlte.subject.create',array('classdata'=>$classdata));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function create(Request $request)
    {
          if(Auth::user()){
           $std=new Subject();
              $std->subname=Input::get('subname');
              $std->classid=Input::get('classid');
             
              
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
        $editid=Subject::find($id);
         $data=DB::select('select * from subjects');
 $classdata=DB::select('select * from classcs');
        return view('vendor.adminlte.subject.edit',compact('editid'),array('user'=>Auth::user(),'classdata'=>$classdata));
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
                 'subname'=>$post['subname'],
                 'classid'=>$post['classid']
                
           
                        );
         $updatecontent= Subject::find($post['subjecteditid']);
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
           Subject::find($id)->delete();
           return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
}