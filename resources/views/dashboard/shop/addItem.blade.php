@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#A4A4AA; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="card">
                <h5 class="card-header">Add Category</h5>
                <div class="card-body">
                    <div class="container">
                        {!! Form::open(['action' => 'DashboardController@saveItem', 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'hidden hidden-form']) !!}

                            {{ Form::text('name', '' , ['class' => 'form-control']) }}
                            <br>
                            {{ Form::selectRange('price', 0, 10000) }}
                            <br>
                            {{ Form::textArea('desc', '', ['id' => 'summary-ckeditor','class' => 'form-control', 'placeholder' => 'About...']) }}
                            <br>
                            {{ Form::text('color', '' , ['class' => 'form-control']) }}
                            <br>
                            {{ Form::text('tag', '' , ['class' => 'form-control']) }}
                            <br>
                            {{-- {{ Form::select('category', $category_arr) }} --}}

                            
                            {{Form::hidden('_method', 'PUT')}}
                            {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
              </div>

        </div>
    </div>
    
@endsection
