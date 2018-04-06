@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                <form method="POST" action="{{route('class.add')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Add New Class Information</h3>
                <br/>
                <a href="class" class="btn btn-danger">Back To Class</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Class Name</span>
                <input type="text" name="cname" class="form-control" placeholder="Fullname">
              </div>
              <br>
               
 <div class="col-md-6">
                     <script type="text/javascript">
                     $(function(){
                       $('.add').click(function(){
//                           alert('hello');
                           var subjects=$('.subid').html();
                         var num=($('.tablebody tr').length-0)+1;
                           var adrow='<tr><th class="num">'+num+'</th>'+
                               
                               '<td><input type="text" name="subject[]" class="subject form-control"/></td></tr>';
                           $('.tablebody').append(adrow);
                      
                       });
                     });
                     </script>
      
         
              <!-- /input-group -->
           
              <table class="table">
                <thead>
                
                        <th>SN</th>
                        <th>Subject Name</th>
                        
                      
                </thead>
                <tbody class="tablebody">
                  <tr>
                    <th class="num">1</th>
                     
                      <td>
                      <input type="text" name="subject[]" class="subject form-control"/>
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
                </div>
                    </div>

         
              <!-- /input-group -->
            
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