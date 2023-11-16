@extends('layouts.frontend.site')
@section('title',$title??'Gấu Bông Hải Shop')
@section('footer')
<script src="{{ asset('js/add2cart.js') }}"></script>
@endsection
@section('content')
<div class="">
<x-slider-show/>
</div>
    <section class="body container mt-4">
        <div class="product_cate ">

            
    
            <div class="product my-3">
                <div class="row">
                    @foreach($new_product as $product)
                    <div class="col-6 col-md-3">
                            <x-product-item :productitem="$product"/>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
        @foreach ($list_category as $category)
            <x-product-home :rowcate="$category"/>
        @endforeach
        


    </section>


@endsection
