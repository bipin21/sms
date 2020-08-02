@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
                {!! Form::model($editid, ['method' => 'PATCH','route' => ['classcs.update', $editid->id]]) !!}
                  <input name="" type="hidden" value="">
            
            <div class="box-header with-border">
              <h3 class="box-title">Edit Class Information</h3>
                <a href="../../class" class="btn btn-success">Back to Student</a>
                
            </div>
            <div class="box-body">
                 <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon">Class Name</span>
                <input type="text" name="cname" class="form-control" value="<?php echo $editid->cname ?>" >
                 
              </div>
              <br>
                     
                    
                </div>
          

         
              <!-- /input-group -->
            </div>
                <div class="box-footer">
                          <input type="hidden" name="classeditid" value="{{$editid->id}}"/>
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
