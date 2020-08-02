@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                <form method="POST" action="{{route('result.add')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Add New Result Information</h3>
                <br/>
                <a href="result" class="btn btn-danger">Back To Result</a>
            </div>
                    
            <div class="box-body">
                 <div class="col-md-6">
                     <script type="text/javascript">
                     $(function(){
                       $('.add').click(function(){
//                           alert('hello');
                           var subjects=$('.subid').html();
                         var num=($('.tablebody tr').length-0)+1;
                           var adrow='<tr><th class="num">'+num+'</th>'+
                               '<td><select name="subname[]" class="form form-control subid" style="">'+subjects+'</select></td>'+
                              
                               '<td><input type="text" name="obtainedmark[]" class="Obtained mark form-control"/></td></tr>';
                           $('.tablebody').append(adrow);
                      
                       });
                     });
                     </script>
              <div class="input-group">
                <span class="input-group-addon">Class</span>
                <select name="classid" class="form-control" required>
                  <option selected="selected">Select</option>
                     @foreach($classdata as $cdata)
                 <option value="{{ $cdata->id }}" >{{ $cdata->cname }}</option>
                 @endforeach
                  </select>
              </div>
              <br>
                     <div class="input-group">
                <span class="input-group-addon">Exam </span>
                <select name="examid" class="form-control" required>
                  <option selected="selected">Select</option>
                     @foreach($examdata as $edata)
                 <option value="{{ $edata->id }}" >{{ $edata->ename }}</option>
                 @endforeach
                  </select>
              </div>
              <br>
                    
                    

                </div>
             <div class="col-md-6">
                 
              <div class="input-group">
                <span class="input-group-addon">Student</span>
                <select name="studentid" class="form-control" required>
                  <option selected="selected">Select</option>
                     @foreach($studentdata as $sdata)
                 <option value="{{ $sdata->id }}" >{{ $sdata->sname }}</option>
                 @endforeach
                  </select>
              </div>
              <br>
             
                </div>

         
              <!-- /input-group -->
           
              <table class="table">
                <thead>
                
                        <th>SN</th>
                        <th>Subject Name</th>

                        <th>Obtained Marks</th>
                        
                      
                </thead>
                <tbody class="tablebody">
                  <tr>
                    <th class="num">1</th>
                      <td>
                      <select name="subname[]" class="form form-control subid" style="" required>
                          <option value="">Select</option>
                          @foreach($tdata as $subdata)
                 <option value="{{ $subdata->id }}" >{{ $subdata->subname }}</option>
                 @endforeach
                          </select> 
                      </td>
                      <td>
                      <input type="text" name="obtainedmark[]" class="Obtainedmark form-control"/>
                      </td>  
                      
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
        <td colspan="3"><input type="button" class="btn btn-primary add" value="Add Subject +" /></td>
            
        </tr>
                    
                </tfoot>  
              </table>
                 </div>
                <div class="box-footer">
                         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" value="Submit" name="addcontent" >Submit</button>
              </div>
              </form>
              
              
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

		</div>
                      </section>
	</div>
</div>
@endsection
<script src="js/jquery-2.2.4.min.js"></script>