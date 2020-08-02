@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                <form method="POST" action="{{route('feestructure.add')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Add New Fee Structure Information</h3>
                <br/>
                <a href="feestructure" class="btn btn-danger">Back To Fee Structure</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
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
                <span class="input-group-addon">Fee Type (Scholorship)</span>
                         <select name="fee_type" class="form-control" required>
                  <option selected="selected">Select</option>
                    
                 <option  class="form-control" value="0" >No Scholorship</option>
                 <option  class="form-control" value="10" >10%</option>
                 <option  class="form-control" value="30" >30%</option>
                 <option  class="form-control" value="50" >50%</option>
                 <option  class="form-control" value="100" >100%</option>
                
                  </select>
               
              </div>
              <br>
                     <div class="input-group">
                <span class="input-group-addon">Security Deposit</span>
                <input type="number" name="deposit" class="form-control" placeholder="deposit">
              </div>
              <br>
                    
                    

                </div>
             <div class="col-md-6">
                 
              <div class="input-group">
                <span class="input-group-addon">Monthly fee</span>
                <input type="number" name="monthly_fee" class="form-control" placeholder="Monthly fee">
              </div>
              <br> 
                 <div class="input-group">
                <span class="input-group-addon">Lab fee</span>
                <input type="number" name="lab_fee" class="form-control" placeholder="lab fee">
              </div>
              <br>
                 <div class="input-group">
                <span class="input-group-addon">Admission fee</span>
                <input type="number" name="admission_fee" class="form-control" placeholder="Admission Fee">
              </div>
              <br>
                 
             
                </div>

         
              <!-- /input-group -->
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
