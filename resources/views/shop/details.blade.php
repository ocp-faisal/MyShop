@extends('shopify-app::layouts.default')

@section('content')
    <div>
        <h4>Shop Name: <b>{{ $shopName ?? Auth::user()->name }}</b></h4>
    </div>
    <div>
        <h4>Shop ID: <b>{{ Auth::user()->id }}</b></h4>
    </div>

    <!-- Additional Shopify App Bridge script -->
    @if(isset($shopDomain))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const shopName = '{{ $shopName ?? Auth::user()->name }}';

                // Use the Shopify App Bridge to set the shop name
                if (window.ShopifyApp) {
                    window.ShopifyApp.Bar.initialize({ title: `Shop Name: ${shopName}` });
                }
            });
        </script>
    @endif
@endsection

