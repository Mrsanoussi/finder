@extends('master.master')

@section('title')
    Finder
@endsection

@section('content')
<div class="mt-2 d-flex flex-row float-left md-2">
    

    <div class="img img-thumbnail float-lg-left md-2">
        <img src="{{ $item->imagepath }}" alt="" class="thumbnail" height="400" width="500">
    </div>

    <div class="text card ml-2 md-2">
        <p class="m-2">{{ $item->description }}</p>
        <h6 class="pull-left price d-flex flex-row bd-highlight ml-2">Prijs: €{{ $item->price }}</h6>
        <a href="{{ $brand->url }}" class="btn btn-outline-primary d-flex justify-content-center m-2 pull-down" role="button">Bekijk de site!</a>
    </div>

    
</div>

<div class="card d-flex flex-collum pull-left">
    <h3 class="mt-2 ml-2">Services</h3>

    @foreach($attribute as $attributes)
    <div class="mt-2 d-flex flex-row pull-left">

        <div class="mt-2 ml-2">
            <p>{{ $attributes->name }}</p>
        </div>

    </div>
    @endforeach
    
</div>

@endsection