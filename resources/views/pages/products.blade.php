@extends('layouts.app')

@section('pageTitle', 'Products')

@section('content')

{{-- @dump($products) --}}
<div id="products">
    <ul>
        @foreach ($products as $product)
            <li>{{$product['code'].' '. $product['brand']. ' '. $product['category']}}</li>
        @endforeach
    </ul> 
</div>
   

@endsection