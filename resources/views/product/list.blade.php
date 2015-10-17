<html>

<head>
    <title>Logi</title>
    {!! HTML::style('css/products.css') !!}
</head>

<body>

<h1>Lista de Productos</h1>

@if (count($products))
<ul>
    @foreach( $products as $product )
    <li>
        <article>
            <header>{{ $product->name  }}</header>
            <span id="price">{{ $product->price  }}</span>
        </article>

    </li>
    @endforeach
</ul>
@endif

</body>
</html>