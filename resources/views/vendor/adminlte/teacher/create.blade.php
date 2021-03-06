@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                <form method="POST" action="{{route('teacher.add')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Add New Teacher Information</h3>
                <br/>
                <a href="teacher" class="btn btn-danger">Back To Teacher</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Full Name</span>
                <input type="text" name="tname" class="form-control" placeholder="Fullname">
              </div>
              <br>
                     <div class="input-group">
                <span class="input-group-addon">Address </span>
                <input type="text" name="taddress" class="form-control" placeholder="Address">
              </div>
              <br>
                   
                </div>
             <div class="col-md-6">
                 
              <div class="input-group">
                <span class="input-group-addon">Phone</span>
                <input type="number" name="tphone" class="form-control" placeholder="Phone">
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
