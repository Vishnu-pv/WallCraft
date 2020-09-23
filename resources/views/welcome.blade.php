@extends('layouts/header')
@section('content')
<h4>Latest Wallpapers</h4>
<div class="row">

  @foreach ($data as $image) 
  <div class="col-md-4">
    <div class="card mb-4 img-card">
        <a href="#">
        <img class="img-thumbnail" src="/storage/{{ $image->image }}"  alt="Image" />
            </a>
    </div>
  </div>
  @endforeach

</div>

<div class="row">
  <div class="col-12 d-flex justify-content-center py-3">
    {!! $data->render() !!}
  </div>

</div>


@endsection
