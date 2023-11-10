@props(['brand'=>'',
        'model'=>'',
        'number_of_seats'=>'',
        'number_of_doors'=>'',
        'transmission'=>'',
        'fuel'=>'',
        'price'=>'',
        'image_path'=>''
         ])

<link rel="stylesheet" href="{{asset('css/partials/catalog_element.css')}}">

<div class="element-container">
    <img class="image-container" src="{{asset('images/' .$image_path)}}" alt="">
    <div class="big-container">
        <div class="brand_model-container">
            <h2>{{$brand}}</h2>
            <h3>{{$model}}</h3>
        </div>
        <div class="features-container">
            <p><strong>N° di posti: </strong>{{$number_of_seats}}</p>
            <p><strong>N° di porte: </strong>{{$number_of_doors}}</p>
            <p><strong>Cambio: </strong>{{$transmission}}</p>
            <p><strong>Carburante: </strong>{{$fuel}}</p>
        </div>
        <div class="price-container">
            <p><strong>{{$price}}</strong> / al giorno</p>
            <button class="selection-button">Seleziona</button>
        </div>
    </div>
</div>
