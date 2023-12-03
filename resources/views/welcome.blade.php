@extends('shopify-app::layouts.default')

@section('content')
 
    <h1>products</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product['title']}}</td>
                <td>{{$product['variants'][0]['price']}}</td>
                <td>{{$product['created_at']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection