@extends('master.master')

@section('title')
    Finder
@endsection


@section('side')
<div class="col-sm-6 col-md-2 d-flex flex-row float-sm-left mt-4 card ml-4">
    <div class="filter">
            <ul>
                <h3 class="m-1">Sportschool</h3>
                @foreach($brand as $brand)
                <li type="none" class=""><a href="{{ route('index', ['brand' => $brand->name]) }}" class="btn btn-outline-primary m-1">{{ $brand->name }}</a></li>
                @endforeach
                <h3 class="m-1">Services</h3>
                @foreach($attribute as $attribute)
                <li type="none" class=""><a href="{{ route('index', ['attribute' => $attribute->name]) }}" class="btn btn-outline-primary m-1">{{ $attribute->name }}</a></li>
                @endforeach
            </ul>
    </div>
</div>


@endsection

@section('content')
@foreach($item->chunk(4) as $itemsChunk)
<div class="row mt-4 d-flex flex-row">
    @foreach($itemsChunk as $item)
    <div class="col-sm-6 col-md-3 d-flex flex-row">
        <div class="img-thumbnail">
            <img src="{{ $item->imagepath }}" class="img-responsive mx-auto" width="245" height="200">
            <div class="caption">
                <a href="/app/show/{{ $item->id }}" class="font-weight-bold">{{ $item->name }}</a>
                <p class="description">{{ $item->description }}</p>
                <div class="clearfix">
                    <h6 class="pull-left price align-bottom pull-down">€{{ $item->price }}</h6>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach



@endsection