@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#d4d4d4; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="card">
                <h5 class="card-header">Contacts</h5>
                <div class="card-body">
                    <div class="container">
                        {!! Form::open(['action' => ['DashboardController@updateSocialLink', $social_link->id], 'files' => true, 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                                    
                            {{ Form::text('platform', $social_link->platform, ['class' => 'form-control', 'placeholder' => 'Social Media Platform']) }}
                            <br>
                            {{ Form::text('link', $social_link->link, ['class' => 'form-control', 'placeholder' => 'Social Media Link']) }}
                            <br>
                            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
