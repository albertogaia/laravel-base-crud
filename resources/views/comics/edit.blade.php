@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('comics.update', $detailComic['id'])}}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input value="{{ $detailComic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter title comic">     
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input value="{{ $detailComic['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter description">     
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input value="{{ $detailComic['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter price">     
                    </div>
                    <div class="form-group">
                      <label for="series">Series</label>
                      <input value="{{ $detailComic['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter series">     
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      <input value="{{ $detailComic['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter type">     
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection