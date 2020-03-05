@extends('shop/main')
@section('content')

    <div class="site-section bg-light py-4">
        <div class="container">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/change_status/{{$order->id}}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5">

                        <h3 class="mb-4 text-black">Keiskite būsena</h3>

                        <form action="#" class="p-5 bg-white">

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="email">Būsena</label>
                                    <select class="form-control" name="orderStatus" >
                                        <option>{{$order->orderStatus}}</option>
                                        <option>Pateiktas</option>
                                        <option>Vykdomas</option>
                                        <option>Išsiųstas</option>
                                        <option>Įvykdytas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Keisti" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </form>
        </div>
    </div>


@stop
