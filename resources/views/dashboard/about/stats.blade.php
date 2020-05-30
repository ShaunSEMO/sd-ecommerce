<br><br>
<div class="card">
    <h5 class="card-header">Stats</h5>
        <div class="card-body">
            
            <div class="row">
                @if (count($stats) > 0)
                    @foreach ($stats as $stat)
                        <div class="col-md-4">
                            <h4>{{ $stat->stat_num }}</h4>
                            <br>
                            <p>{{ $stat->title }}</p>
                            <br>
                            <button class="btn btn-warning newmorph global-btn show-form-3">Edit</button>
                            <br>
                            {!! Form::open(['action' => ['DashboardController@updateStat', $stat->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data', 'class'=>'hidden hidden-form-3']) !!}
                            
                                    <div class="container value">

                                        <div class="form-group">
                                            {{ Form::label('title', 'Value')}}
                                            {{ Form::text('stat_num', $stat->stat_num , ['class' => 'form-control']) }}
                                        </div>
                                    
                                        <div class="form-group">
                                            {{ Form::label('title', 'Value')}}
                                            {{ Form::text('title', $stat->title , ['class' => 'form-control']) }}
                                        </div>
                                    </div>
                                

                            {{Form::hidden('_method', 'PUT')}}
                            {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                        </div>
                    @endforeach 
                @else
                    <div class="alert alert-danger" role="alert">
                        'Stats' content is empty
                    </div>
                @endif
                
            </div>
        </div>
  </div>