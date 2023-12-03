<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Details</title>
    <!-- Include Shopify App Bridge script -->
    <script src="https://unpkg.com/@shopify/app-bridge@1"></script>
</head>
<body>
    <div id="app"></div>

    <script>
        var app = AppBridge.createApp({
            apiKey: '7181dbcff577092695775c247235a9f5',
            shopOrigin: '{{ request()->get('shop') }}',
        });

        // Use app to render the shop details
        app.render('ShopifyAdmin.Details', {
            data: {
                shopName: '{{ $shopName }}',
                shopId: '{{ $shopId }}',
            },
        });
    </script>
</body>
</html>
