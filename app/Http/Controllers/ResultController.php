<?php



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Exam;
use App\Result;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
          if(Auth::user()){
           $data=DB::table('exams')
               ->join('classcs','exams.classid','=','classcs.id')
               ->select('classcs.cname','exams.*')
               ->get();
           return view('vendor.adminlte.result.index',array('data'=>$data));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function add()
    {
          if(Auth::user()){
           $classdata=DB::select('select * from classcs');
           $studentdata=DB::select('select * from students');
           $examdata=DB::select('select * from exams');
           return view('vendor.adminlte.result.create',array('classdata'=>$classdata,'examdata'=>$examdata,'studentdata'=>$studentdata));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function create(Request $request)
    {
          if(Auth::user()){
          
              $post=$request->all();
              $resultdata=array(
                'examid'=>$post['examid'],
                'studid'=>$post['studentid'],
                'classid'=>$post['classid']
              );
             
            $rid=DB::table('results')->insertGetId($resultdata);
              if($rid > 0){
                  for($i=0;$i<count($post['subname']);$i++){
                $resultdetail=array(
                  'subid'=>$post['subname'][$i],
                  'obtained_marks'=>$post['obtainedmark'][$i],
                  'studresid'=>$rid 
              );
                      DB::table('studentresultdetails')->insert($resultdetail);
                  }
              }
              
             
          return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
    //edit page student
    public function edit($id){
         if(Auth::user()){
        $editid=Exam::find($id);
         $data=DB::select('select * from exams');
              $classdata=DB::select('select * from classcs');
           return view('vendor.adminlte.result.edit',array('editid'=>$editid,'classdata'=>$classdata));
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
                 'ename'=>$post['ename'],
                 'epurpose'=>$post['epurpose'],
                 
                 'classid'=>$post['classid']
           
                        );
         $updatecontent= Exam::find($post['exameditid']);
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
           Exam::find($id)->delete();
           return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
}