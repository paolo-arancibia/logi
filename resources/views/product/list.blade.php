<html>

<head>
    <title>Logi</title>

    {!! HTML::style('css/products.css') !!}

    <!--  HTML::script('script/products/clicking.js') -->
</head>

<body>

<h1>Lista de Productos</h1>

@if (count($products))
<ul class="products">
    @foreach( $products as $product )
    <li>
        <a href="{{ url('product/' . $product->id) }}">
        <article>
            <header>{{ $product->name  }}</header>
            <span id="price">Valor {{ money_format('%i', $product->price) }}</span>
        </article>
        </a>
    </li>
    @endforeach
</ul>
@endif

</body>
</html>