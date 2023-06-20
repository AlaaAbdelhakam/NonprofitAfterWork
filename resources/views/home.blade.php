@extends('layouts.app-master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="app">
                <router-view></router-view>
               </div>
               <script src="/js/app.js"></script>
                <example-component>
                </example-component>
                
           
        </div>
    </div>
</div>
@endsection
