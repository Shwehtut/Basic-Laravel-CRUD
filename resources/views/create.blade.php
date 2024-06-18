@extends('layout.master')
@section('content')
 <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
        <label for="">Enter name</label>
      <input type="text" name="name" class="form-control @error('name')border border-danger @enderror">

        @error('name')
          <small class="text text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Choose image</label>
        <input type="file"  name="image" class="form-control @error('image')border border-danger @enderror">
        @error('image')
          <small class="text text-danger">{{$message}}</small>
        @enderror
    </div>
    <br>
    <input type="submit" class="btn btn-sm btn-dark" value="Create">
 </form>

@endsection
