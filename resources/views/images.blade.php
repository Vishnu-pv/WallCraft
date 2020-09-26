@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
    <a href="/" class="btn btn-secondary my-3">Go Back</a> 
    </div>
    <div class="row">
    <div class="col" style="border: 1px solid black; padding: 3px; border-radius:5px;">
        <img class="img-responsive" style="object-fit:contain; width:100%" src="/storage/{{ $image->image }}"  alt="Image"/>
    </div>
</div>
</div>
    <h4>Name: {{$image->imagename}}</h4>
    <h5>Tags: {{$image->tags}}</h5>
  </div>


@endsection