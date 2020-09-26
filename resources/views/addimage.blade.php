@extends('layouts/header')

@section('content')

<a href="/" class="btn btn-secondary my-3">Go Back</a> 
<form enctype="multipart/form-data" method="post">
    @csrf
    <h4 class="py-3">Add New Images</h4>
    <div class="form-group ">
      <label for="ImageName">Image Name</label>
      <input type="text" class="form-control @error('imagename') is-invalid @enderror" id="imagename" placeholder="Image Name" name="imagename">
    </div>
    @error('imagename')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="form-group">
      <label for="Tags">Tags</label>
      <textarea class="form-control @error('tags') is-invalid @enderror" id="Tags" rows="2" name="tags"></textarea>
    </div>

    @error('tags')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="form-group">
      <label for="Image">Image : </label>
      <input type="file" name="image" class="@error('image') is-invalid @enderror">
    </div>


@error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <button class="btn btn-primary">Add New Image</button>
  </form>


@endsection