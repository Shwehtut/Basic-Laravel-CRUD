@extends('layout.master')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success">
   {{Session::get('success')}}
</div>
@endif

 <form action="{{route('item.update',$item->id)}}" method="post" enctype="multipart/form-data" >
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Enter name</label>
      <input value="{{$item->name}}" type="text" name="name" class="form-control @error('name')border border-danger @enderror">

        @error('name')
          <small class="text text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Choose image</label>
        <input  type="file"  name="image" class="form-control @error('image')border border-danger @enderror">
        @error('image')
          <small class="text text-danger">{{$message}}</small>
        @enderror
        <img src="{{asset($item->image)}}" style="width:50px;border-redius:20px" alt="">
    </div>
    <br>
    <input type="submit" class="btn btn-sm btn-dark" value="Update">
 </form>

@endsection
