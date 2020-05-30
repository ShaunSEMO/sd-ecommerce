@extends('layouts.app')

@section('content')
  
    <div class="row container-fluid">
        <div class="col-md-2 side-menu" style="background-color:#d4d4d4; height: 100%;">
            @include('dashboard.sideMenu')
        </div>
        <div class="col-md-10 dashboard-content">
            <div class="content">
                <div class="container">
                    @include('dashboard.about.about')
                    <br>
                    <br>
                    @include('dashboard.about.values')
                    <br>
                    <br>
                    @include('dashboard.about.stats')
                </div>
            </div>
        </div>
    </div>

    {{-- JS script to show and hide edit forms upon request --}}
    <script>
        $(document).ready(function(){
            var btn = $('.show-form');
            var forms = $('.hidden-form');

            btn.click(function () {
                forms.toggleClass('hidden')
            });

            var btn2 = $('.show-form-2');
            var forms2 = $('.hidden-form-2');

            btn2.click(function () {
                forms2.toggleClass('hidden')
            });

            var btn3 = $('.show-form-3');
            var forms3 = $('.hidden-form-3');

            btn3.click(function () {
                forms3.toggleClass('hidden')
            });

        });
    </script>
    
@endsection
