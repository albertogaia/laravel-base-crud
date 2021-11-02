@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i fumetti</h1>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{$comic['id']}}</th>
                                <td>{{$comic['title']}}</td>
                                <td>{{$comic['type']}}</td>
                                <td>{{$comic['price']}} €</td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection