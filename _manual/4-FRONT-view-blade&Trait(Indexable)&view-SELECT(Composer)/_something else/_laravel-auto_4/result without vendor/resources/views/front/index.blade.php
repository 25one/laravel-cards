@extends('front.layout')

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
@endsection

@section('main')

@php
//print_r($autos);
@endphp

<div class="row margin">
    <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="form-group">
            <label for="type" class="size">Select coutry</label>
            <select class="form-control input-size" style="height: auto;" name="country_id" id="country_id">
                <option value="0" class="input-size" 
                   >-----</option> 
                @foreach($countries as $key => $country)  
                   <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach                 
            </select>
        </div>
    </div>
</div>   

<!-- brick-wrapper -->
<div class="bricks-wrapper">
    <div id="pannel">
       @include('front.brick-standard')
    </div>   
</div>

@endsection

@section('js')
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
       //...
    </script>
@endsection    
