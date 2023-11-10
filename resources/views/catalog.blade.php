@props(['catalog_element'=>[]])

@extends('layouts.public')

@section('title', 'Catalogo')

@section('content')
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">

    <div class="catalog-container">
        <h2 style="text-align: left; padding-bottom: 50px">Scegli il tuo veicolo:</h2>
        <div class="catalog_element-container">

            @foreach($catalog_element as $cars)
                @include('partials.catalog_element',
[
    'brand'=>$catalog_element->brand,
    'model'=>$catalog_element->model,
    'number_of_seats'=>$catalog_element->number_of_seats,
    'number_of_doors'=>$catalog_element->number_of_doors,
    'transmission'=>$catalog_element->transmission,
    'fuel'=>$catalog_element->fuel,
    'price'=>$catalog_element->price,
    'image_path'=> $catalog_element->image_path
])
            @endforeach

        </div>
    </div>
@endsection


