@extends('layouts/header')
@section('content')
<h4>Latest Wallpapers</h4>
<div class="row">

  @foreach ($data as $image) 


    <div class="col col-md-3">
    <a href="/{{$image->id}}">
        <img class="img-thumbnail " src="/storage/{{ $image->image }}"  alt="Image"/>
            </a>

  </div>
  @endforeach

</div>

<div class="row">
  <div class="col-12 d-flex justify-content-center py-3">
    {!! $data->render() !!}
  </div>

</div>


@endsection
