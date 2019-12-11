@extends('master.master')

@section('title')
    Finder
@endsection


@section('side')
<!--
<div class="col-sm-6 col-md-2 d-flex flex-row float-sm-left mt-4 card ml-4">
    <div class="filter">
            <ul>
                <h3 class="m-1">Sportschool</h3>
                @foreach($brand as $brand)
                <li type="none" class=""><a href="{{ route('index', ['brand' => $brand->name]) }}" type="checkbox[]" class="btn btn-outline-primary m-1">{{ $brand->name }}</a></li>
                @endforeach
                <h3 class="m-1">Services</h3>
                @foreach($attribute as $attribute)
                <li type="none" class=""><a href="{{ route('index', ['attribute' => $attribute->name]) }}" type="checkbox[]" class="btn btn-outline-primary m-1" name="action">{{ $attribute->name }}</a></li>
                @endforeach

            </ul>
    </div>
</div>
-->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<div class="side col-sm-6 col-md-2 float-sm-left mt-4 card ml-4">
    <h3>Sportschool</h3>
    @foreach($item as $brands)
    @if($loop->remaining < 5)
    <div class="filterblock">
		<input id="check1" type="checkbox" name="check" value="{{ $brands->brand_id }}" class="category">
    	<label for="check1" class="font-weight-bold">{{ $brands->name }}</label>
     </div>
    @endif
    @endforeach
<script>

$( ".category" ).click(function() {
    
     $.get( "/get/items", { search: $( this ).val() })
    .done(function( data ) {
        alert( "Data Loaded: " + data );
    });

});
 

</script>

@endsection

@section('content')
@foreach($item->chunk(4) as $itemsChunk)
<div class="resultblock">
<div class="row mt-4 d-flex flex-row">
    @foreach($itemsChunk as $item)
    <div class="col-sm-6 col-md-3 d-flex flex-row resultblock" data-tag="{{ $item->brand_id }}">
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
</div>
@endforeach
@endsection