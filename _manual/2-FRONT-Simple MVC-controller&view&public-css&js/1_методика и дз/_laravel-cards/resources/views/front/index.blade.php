@extends('front.layout')

@section('css')

@endsection

@section('main')

<h3>Front-page</h3>

@endsection

@section('js')
<script src="{{ asset('public/js/mine.js') }}"></script>
<script>
   $(document).ready(function(){
      //...
   });
</script>    
@endsection
