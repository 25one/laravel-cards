@extends('front.layout')

@section('css')

@endsection

@section('main')

@php
print_r($cards);
@endphp

@endsection

@section('js')
<script src="{{ asset('public/js/mine.js') }}"></script>
<script>
   $(document).ready(function(){
      //...
   });
</script>    
@endsection
