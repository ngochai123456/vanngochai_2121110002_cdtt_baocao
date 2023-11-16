@extends('layouts.frontend.site')
@section('title',$title??'Gấu Bông Hải Shop')
@section('content')
<div class="container modal-body">
    
    <div class="text-center"><h4>TÀI KHOẢN CỦA TÔI</h4></div>
    @includeIf('frontend.modal-login')
</div>


@endsection