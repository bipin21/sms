@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                {!! Form::model($editid, ['method' => 'PATCH','route' => ['teachers.update', $editid->id]]) !!}
                  <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Edit Teacher Information</h3>
                <a href="../../teacher" class="btn btn-success">Back to Teacher</a>
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Full Name</span>
                <input type="text" name="tname" class="form-control" value="{{ $editid->tname }}" placeholder="Fullname">
              </div>
              <br>
                     
                    
                </div>
             <div class="col-md-6">
                 
              <div class="input-group">
                <span class="input-group-addon">Address</span>
                <input type="text" name="taddress" value="{{ $editid->taddress }}" class="form-control" placeholder="Address">
              </div>
              <br>
             
                 <div class="input-group">
                <span class="input-group-addon">Phone</span>
                <input type="number" name="tphone" class="form-control" value="{{ $editid->tphone }}"  placeholder="Fee">
              </div>
              <br>
                </div>

         
              <!-- /input-group -->
            </div>
                <div class="box-footer">
                          <input type="hidden" name="teachereditid" value="{{$editid->id}}"/>
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
