@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                <form method="POST" action="{{route('subject.add')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Add New Subject Information</h3>
                <br/>
                <a href="subject" class="btn btn-danger">Back To Subject</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Subject Name</span>
                <input type="text" name="subname" class="form-control" placeholder="">
              </div>
              <br>
                     
                     

                </div>
             <div class="col-md-6">
                 
            
              <div class="input-group">
                <span class="input-group-addon">Class</span>
                <select name="classid" class="form-control" required>
                  <option>Select</option>
                     @foreach($classdata as $cdata)
                 <option value="{{ $cdata->id }}" selected="selected">{{ $cdata->cname }}</option>
                 @endforeach
                  </select>
              </div>
              <br>
                 
<!--
                 <div class="input-group">
                <span class="input-group-addon">Class name</span>
                <input type="text" name="classname" class="form-control" placeholder="CLassname">
              </div>
              <br>
-->
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
