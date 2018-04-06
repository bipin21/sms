@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                <form method="POST" action="{{route('student.add')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Add New Student Information</h3>
                <br/>
                <a href="student" class="btn btn-danger">Back To Student</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Full Name</span>
                <input type="text" name="fname" class="form-control" placeholder="Fullname">
              </div>
              <br>
                     <div class="input-group">
                <span class="input-group-addon">BirtDate </span>
                <input type="date" name="bdate" class="form-control" placeholder="Fee">
              </div>
              <br>
                     <div class="input-group">
                <span class="input-group-addon">Class Roll </span>
                <input type="number"  name="croll" class="form-control" placeholder="Roll">
              </div>
              <br>
<!--
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <br>
-->
                </div>
             <div class="col-md-6">
                 
              <div class="input-group">
                <span class="input-group-addon">Address</span>
                <input type="text" name="address" class="form-control" placeholder="Address">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon">$ Fee </span>
                <input type="number" name="fee" class="form-control" placeholder="Fee">
              </div>
              <br>
                 <div class="input-group">
                <span class="input-group-addon">$ Fee  Due</span>
                <input type="number" name="due" class="form-control" placeholder="Fee">
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
