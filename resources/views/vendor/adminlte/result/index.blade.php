@extends('adminlte::layouts.app')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
              <br/>
         <a href="addresult" class="btn btn-info" style="position:center;margin-left:20%;">Add New Results</a>
            <!-- /.box-body -->
              <div class="box-header">
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Exam Name</th>
                  <th>Purpose</th>
                  <th>Class</th>
                  
                  <th>Exam Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $stdata)
                <tr>
                  <td>{{ $stdata->ename }}</td>
                  <td>{{ $stdata->epurpose }}</td>
                  <td>{{ $stdata->classid }}</td>
                  
                  <td>{{ $stdata->edate }}</td>
                  <td>
                    <a  href="{{route('exams.edit',$stdata->id)}}"><button class="btn btn-info">Edit</button></a>
                        <a> 
                            {!! Form::open(['method'=>'DELETE', 'route'=>['exams.destroy',$stdata->id],'style'=>'display:inline-block']) !!}
                            {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            </a>
                    </td>
                </tr>
                    @endforeach
               
                </tbody>
               
              </table>
          </div>
              </div>
          <!-- /.box -->

		</div>
                      </section>
	</div>
</div>
@endsection
