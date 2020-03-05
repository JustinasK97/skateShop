@extends('shop/main')
@section('content')


    <div class="site-section bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mb-4 text-black">Valdykite užsakymus</h3>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-md-2">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Vardas</th>
                            <th scope="col">Pavardė</th>
                            <th scope="col">Adresas</th>
                            <th scope="col">Prekė</th>
                            <th scope="col">Kiekis</th>
                            <th scope="col">Užsakyta</th>
                            <th scope="col">Iš viso</th>
                            <th scope="col">Užsakymo būsena</th>
                            <th scope="col">Šalinimas</th>
                            <th scope="col">Keisti būsena</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->buyerName}}</td>
                                <td>{{$order->buyerLastName}}</td>
                                <td>{{$order->buyerAddress }}</td>
                                @foreach($products as $product)
                                    @if($order->itemID == $product->id)
                                        <td>{{$product->title}}</td>
                                    @endif
                                @endforeach
                                <td>{{$order->itemID }}</td>

                                <td>{{$order->productQuantity }}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->orderSum}}</td>
                                <td>{{$order->orderStatus}}</td>
                                <td><a href="/warning_order/{{$order->id}}">Šalinti</a></td>
                                <td><a href="/change_status/order/{{$order->id}}">Keisti</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <br>
                </div>
            </div>
        </div>
    </div>
@stop
