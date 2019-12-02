@extends('master.master')

@section('title')
    Finder
@endsection


@section('side')
<div class="col-sm-4 col-md-1 d-flex flex-row card">
    <div class="filter">
        <h3>Sportschool</h3>
            <ul>
                @foreach($brand as $brand)
                <li type="none"><a href="{{ route('index', ['brand' => $brand->name]) }}">{{ $brand->name }}</a></li>
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