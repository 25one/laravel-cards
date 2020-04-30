@extends('back.products.template')

@section('form-open')
    <form method="put" action="{{ route('products.update', [$product->id]) }}">
                     {{ csrf_field() }}
@endsection
