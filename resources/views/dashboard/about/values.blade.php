<div class="card">
    <h5 class="card-header">Values</h5>
    <div class="card-body">

        <div class="row">
            @if (count($values) > 0)
                @foreach ($values as $value)
                    <div class="col-md-4">
                        <h4>{{ $value->value }}</h4>
                        <br>
                        <p>{{ $value->desc }}</p>
                        <br>
                        <button class="btn btn-warning newmorph global-btn show-form-2">Edit</button>
                        <br>
                        {!! Form::open(['action' => ['DashboardController@updateValue', $value->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'hidden hidden-form-2']) !!}
                            
                                    <div class="container value">
                                        <div class="form-group">
                                            {{ Form::label('title', 'Value')}}
                                            {{ Form::text('value', $value->value , ['class' => 'form-control']) }}
                                        </div>
                                    
                                        <div class="form-group">
                                            {{ Form::label('text', 'Description') }}
                                            {{ Form::textArea('desc', $value->desc, ['id' => 'summary-ckeditor','class' => 'form-control', 'placeholder' => 'About...']) }}
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

