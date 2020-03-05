@extends('shop.main')
@section('content')

    <div class="warningOrder py-3 m-2">
        <p>Ar tikrai norite pašalinti šį užsakymą?</p>
        <div class="warningOrder">
            <a class="btn btn-primary" href="/delete_order/ {{$order->id}}" role="button">trinti</a>
        </div>
    </div>
@stop
