@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                {!! Form::model($editid, ['method' => 'PATCH','route' => ['exams.update', $editid->id]]) !!}
                  <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Edit Exam Information</h3>
                <a href="../../exam" class="btn btn-success">Back to Exam</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Exam Name</span>
                <input type="text" name="ename" class="form-control" value="{{ $editid->ename }}" placeholder="Fullname">
              </div>
              <br>
                <div class="input-group">
              <span class="input-group-addon">Class</span>
                <select name="classid" class="form-control" required>
                  <option value="{{ $editid->classid}}" selected="selected">Change or Leave</option>
                     @foreach($classdata as $cdata)
                 <option value="{{ $cdata->id }}" >{{ $cdata->cname }}</option>
                 @endforeach
                  </select>
              </div>     
                    
                </div>
             <div class="col-md-6">
                 
              <div class="input-group">
                <span class="input-group-addon">Exam Purpose</span>
                <input type="text" name="epurpose" value="{{ $editid->epurpose }}" class="form-control" placeholder="Address">
              </div>
              <br>
             
                 
                </div>

         
              <!-- /input-group -->
            </div>
                <div class="box-footer">
                          <input type="hidden" name="exameditid" value="{{$editid->id}}"/>
<!--            <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>-->
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <button type="submit" class="btn btn-info pull-right" value="Submit" name="addcontent" >Submit</button>
              </div>
{!! Form::close()  !!}
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

		</div>
                      </section>
	</div>
</div>
@endsection
