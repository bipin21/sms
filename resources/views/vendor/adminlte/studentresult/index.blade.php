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
         <a href="addstudent" class="btn btn-info" style="position:center;margin-left:20%;">Add New Student</a>
            <!-- /.box-body -->
              <div class="box-header">
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Class</th>
                  <th>Roll</th>
                  <th>Birth Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $stdata)
                <tr>
                  <td>{{ $stdata->sname }}</td>
                  <td>{{ $stdata->saddress }}</td>
                  <td>{{ $stdata->sclass }}</td>
                  <td> {{ $stdata->classroll }}</td>
                  <td>{{ $stdata->birthdate }}</td>
                  <td>
                    <a  href="{{route('students.edit',$stdata->id)}}"><button class="btn btn-info">Edit</button></a>
                        <a> 
                            {!! Form::open(['method'=>'DELETE', 'route'=>['students.destroy',$stdata->id],'style'=>'display:inline-block']) !!}
                            {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            </a>
                    </td>
                </tr>
                    @endforeach
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Class</th>
                  <th>Roll</th>
                  <th>Birth Date</th>
                </tr>
                </tfoot>
              </table>
          </div>
              </div>
          <!-- /.box -->

		</div>
                      </section>
	</div>
</div>
@endsection
