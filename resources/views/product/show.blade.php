<html>

<head>
    <title>Logi</title>

    {!! HTML::style('css/products.css') !!}

    <!--  HTML::script('script/products/clicking.js') -->
</head>

<body>

<h1> {{ $product->name }}</h1>
<p>Me visitaste! Gracias :> </p>

<p><span id="price">Precio {{ money_format('%i', $product->price) }}</span></p>

</body>
</html>