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

            <form method="POST" action="/store-category">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5">

                        <h3 class="mb-4 text-black">Pridėkite kategorija</h3>

                        <form action="#" class="p-5 bg-white">

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="email">Pavadinimas</label>
                                    <input type="text" id="title" name="category" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </form>
        </div>
    </div>


@stop
