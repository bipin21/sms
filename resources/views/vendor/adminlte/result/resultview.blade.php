@extends('adminlte::layouts.appin')




@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     <!-- Input addon -->
         
          <div class="box box-info">
              <br/>
        
            <!-- /.box-body -->
              <div class="box-header">
              </div>
              <div class="box-body">
              
                 
    
                  
                  
                  
                  <div class="container">
 
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
   
    
       @foreach($data1 as $testdata1)
      
      <li><a data-toggle="pill" href="#menu{{$testdata1->id}}">{{$testdata1->ename}}</a></li>
      @endforeach

  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Choose Specific Exam to See Exam Result Detail</h3>
     
    </div>
       @foreach($data1 as $testdata1)
    <div id="menu{{$testdata1->id}}" class="tab-pane fade">
        
         <table class="table">
                    <thead>
                      <tr>
                            <th>SN</th>
                           
                            <th>Subject</th>
                            <th>Full Marks</th>
                            <th>Pass Marks</th>
                            <th>Obtained Marks</th>
                        </tr>
                      </thead>
                      <tbody>
                         
                          <p style="display:none;">{{ $i=1 }}</p> 
                           @foreach($data as $testdata)
      <div style="display:none;">{{ $itd=$testdata->examid }}
           {{ $ttd=$testdata1->id }} 
        </div>
      @if($ttd==$itd)
                        <tr>
                            <td>{{ $i++ }}</td>
                             <td>        {{ $testdata->subname }}</td>
                            <td> 100</td>
                            <td> 32</td>
                           
                            <td> {{   $testdata->obtained_marks }}</td>
                          </tr>
                           @endif
                           @endforeach
<!--                          endif-->
                          
                      </tbody>
                  </table>
     
    </div>
   
     
      @endforeach

  </div>
</div>
                 
          </div>
              </div>
          <!-- /.box -->

		</div>
                      </section>
	</div>
</div>
@endsection
