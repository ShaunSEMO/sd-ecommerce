@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="card">
                <h5 class="card-header">Add Member</h5>
                <div class="card-body">
                    <div class="container">
                                {!! Form::open(['action' => ['DashboardController@updateMember', $member->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                
                                {{ Form::label('image', 'Image')}}
                                <br>
                                {{ Form::file('image',['class' => 'form-control'] ) }}
                                <br>
                            
                        
                                {{ Form::label('name', 'Name')}}
                                {{ Form::text('name', $member->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}

                                {{ Form::label('text', 'Bio') }}
                                {{ Form::textArea('desc', $member->desc, ['class' => 'form-control']) }}
                            
                        
                                {{ Form::label('position', 'Position')}}
                                {{ Form::text('position', $member->position, ['class' => 'form-control', 'placeholder' => 'Position']) }}
                    
                            
                        
                                {{ Form::label('email', 'E-mail')}}
                                {{ Form::text('email', $member->email, ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
                            
                                <br>

                                {{Form::hidden('_method', 'PUT')}}
                                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                            {!! Form::close() !!}
                    </div>
                </div>
              </div>

        </div>
    </div>
    
@endsection
