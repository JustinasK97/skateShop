@extends('shop.main')
@section('content')

    <div class="warningProduct py-3 m-2">
        <p>Ar tikrai norite pasalinti si produktą?</p>
        <div class="warningProduct">
            <a class="btn btn-primary" href="/delete_product/ {{$product->id}}" role="button">trinti</a>
        </div>
    </div>
@stop
