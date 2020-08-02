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
         <a href="addfeestructure" class="btn btn-info" style="position:center;margin-left:20%;">Add New Fee_structure</a>
            <!-- /.box-body -->
              <div class="box-header">
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Classid</th>
                  <th>Fee Type</th>
                  <th>Monthly</th>
                  <th>Lab</th>
                  <th>Admission</th>
                  <th>Deposit</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $stdata)
                <tr>
                  <td>{{ $stdata->classid }}</td>
                  <td>{{ $stdata->fee_type }}</td>
                  <td>{{ $stdata->monthly_fee }}</td>
                  <td> {{ $stdata->lab_fee }}</td>
                  <td>{{ $stdata->admission_fee }}</td>
                  <td>{{ $stdata->deposit }}</td>
                  <td>
                    <a  href="{{route('feestructures.edit',$stdata->id)}}"><button class="btn btn-info">Edit</button></a>
                        <a> 
                            {!! Form::open(['method'=>'DELETE', 'route'=>['feestructures.destroy',$stdata->id],'style'=>'display:inline-block']) !!}
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
