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
              
                 
          
                 
                 
                  <table class="table">
                    <thead>
                      <tr>
                            <th>SN</th>
                            <th>Exam</th>
                            <th>Subject</th>
                            <th>Obtained Marks</th>
                        </tr>
                      </thead>
                      <tbody>
                          <p style="display:none;">{{ $i=1 }}</p>
                            @foreach($data as $testdata)
<!--                          To Group By Exams -->
<!--                        <div style="display:none;">-->
<!--                             $exid=$testdata->examid -->
                          
<!--                          </div>-->
<!--                          if($exid==2)-->
                          
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td> {{ $testdata->ename }}</td>
                            <td>        {{ $testdata->subname }}</td>
                            <td> {{   $testdata->obtained_marks }}</td>
                          </tr>
<!--                          endif-->
                           @endforeach
                      </tbody>
                  </table>
                  
                  
                  
                  <div class="container">
  <h2>Dynamic Pills</h2>
  <p>To make the tabs toggleable, add the data-toggle="pill" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
<!--
    <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
-->
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
      
<!--
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
-->
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
