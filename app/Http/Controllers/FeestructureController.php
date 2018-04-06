<?php



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Subject;
use App\Fee_structure;
use App\Classc;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class FeestructureController extends Controller
{
  
   
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
          if(Auth::user()){
           $data=DB::table('fee_structures')
               ->join('classcs','fee_structures.classid','=','classcs.id')
               ->select('classcs.cname','fee_structures.*')
               ->get();
           return view('vendor.adminlte.fee_structure.index',array('data'=>$data));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function add()
    {
          if(Auth::user()){
           $classdata=DB::select('select * from classcs');
           return view('vendor.adminlte.fee_structure.create',array('classdata'=>$classdata));
             }
        else{
            return redirect()->back();
        }
    
    }
     public function create(Request $request)
    {
          if(Auth::user()){
           $std=new Fee_structure();
             
              $std->classid=Input::get('classid');
              $std->fee_type=Input::get('fee_type');
              $std->monthly_fee=Input::get('monthly_fee');
              $std->lab_fee=Input::get('lab_fee');
              $std->admission_fee=Input::get('admission_fee');
              $std->deposit=Input::get('deposit');
             
              
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
        $editid=Fee_structure::find($id);
         $data=DB::select('select * from fee_structures');
 $classdata=DB::select('select * from classcs');
        return view('vendor.adminlte.fee_structure.edit',compact('editid'),array('user'=>Auth::user(),'classdata'=>$classdata));
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
                 
                 'classid'=>$post['classid'],
                 'fee_type'=>$post['fee_type'],
                 'monthly_fee'=>$post['monthly_fee'],
                 'lab_fee'=>$post['lab_fee'],
                 'admission_fee'=>$post['admission_fee'],
                 'deposit'=>$post['deposit']
                
           
                        );
         $updatecontent= Fee_structure::find($post['feestructureeditid']);
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
           Fee_structure::find($id)->delete();
           return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    
    }
}