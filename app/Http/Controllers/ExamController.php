<?php



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Exam;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
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
           return view('vendor.adminlte.exam.index',array('data'=>$data));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function add()
    {
          if(Auth::user()){
          
          $classdata=DB::table('classcs')
               ->select('classcs.*')
              ->distinct()
               ->get(); 
              $subdata=DB::table('classcs')
               ->join('subjects','subjects.classid','=','classcs.id')
               ->select('classcs.*','subjects.*')
              ->distinct()
               ->get();
           return view('vendor.adminlte.exam.create',array('classdata'=>$classdata,'subdata'=>$subdata));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function create(Request $request)
    {
          if(Auth::user()){
          $post=$request->all();
              $examdata=array(
                'ename'=>$post['ename'],
                'epurpose'=>$post['epurpose'],
                'classid'=>$post['classid'],
                'edate'=>$post['edate'],
              );
              $exid=DB::table('exams')->insertGetId($examdata);
              if($exid>0){
                  for($i=0;$i<count($post['subname']);$i++){
                      $examdetaildata=array(
                      'exid'=>$exid,
                      'classid'=>$post['classid'],
                      'subid'=>$post['subname'][$i],
                      'full_marks'=>$post['fullmark'][$i],
                      'pass_marks'=>$post['passmark'][$i],
                      'examdate'=>$post['examdate'][$i]
                      ); 
                      DB::table('exam_details')->insert($examdetaildata);
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
           return view('vendor.adminlte.exam.edit',array('editid'=>$editid,'classdata'=>$classdata));
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