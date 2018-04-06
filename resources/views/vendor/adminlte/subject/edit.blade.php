@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                {!! Form::model($editid, ['method' => 'PATCH','route' => ['subjects.update', $editid->id]]) !!}
                  <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Edit Subject Information</h3>
                <a href="../../subject" class="btn btn-success">Back to Subject</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Subject Name</span>
                <input type="text" name="subname" class="form-control" value="{{ $editid->subname}}" placeholder="Fullname">
              </div>
              <br>
                     
                    
                </div>
             <div class="col-md-6">
                 
             
             
                 <div class="input-group">
              <span class="input-group-addon">Class</span>
                <select name="classid" class="form-control" required>
                  <option value="{{ $editid->classid}}" selected="selected">Change or Leave</option>
                     @foreach($classdata as $cdata)
                 <option value="{{ $cdata->id }}" >{{ $cdata->cname }}</option>
                 @endforeach
                  </select>
              </div>
              <br>
                </div>

         
              <!-- /input-group -->
            </div>
                <div class="box-footer">
                          <input type="hidden" name="subjecteditid" value="{{$editid->id}}"/>
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
