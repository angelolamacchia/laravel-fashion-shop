@extends('layouts.app')

@section('pageTitle', 'Products')

@section('content')

{{-- @dump($products) --}}
<div id="products">
    <ul>
        @foreach ($products as $product)
            <div class="card">
                <img src="img/shirt.png" alt="">
                <ul>
                    <li>{{$product['brand']}}</li>
                    <li>{{$product['category']}}</li>
                    <li>{{$product['code']}}</li>
                    <li>{{$product['season'].' '. $product['year']}}</li>
                    <li style="font-weight: bold; font-size:30px;">{{$product['retail_price']. '€'}}</li>
                </ul>
            </div>
        @endforeach
    </ul> 
</div>
   

@endsection