@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{route('comics.store')}}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter title comic">
                      @error('title')
                      <div class="alert alert-danger"> {{ $message }} </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">     
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">     
                    </div>
                    <div class="form-group">
                      <label for="series">Series</label>
                      <input type="text" name="series" class="form-control" id="series" placeholder="Enter series">     
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      <select name="type" id="type" class="form-control">
                        <option value="">-- Seleziona --</option>
                        <option value="ComicBook">Comic Book</option>
                        <option value="GraphicNovel">Graphic Novel</option>
                      </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection