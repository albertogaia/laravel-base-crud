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
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{$comic['id']}}</th>
                                <td>{{$comic['title']}}</td>
                                <td>{{$comic['type']}}</td>
                                <td>{{$comic['price']}} €</td>
                                <td>
                                    <a href="{{route('comics.show', $comic['id'])}}" class="btn btn-info">Details</a>
                                    <a href="{{route('comics.edit', $comic['id'])}}" class="btn btn-warning">Edit</a>
                                    <form action="{{route('comics.destroy', $comic['id'])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="myConfirm($comic['title'])">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection