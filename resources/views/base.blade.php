<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}"> --}}

    <title>{{ config('app.name', 'Point Of Sales') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@300;400;600;700;800;900&display=swap">

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @stack('styles')

</head>

<body class="antialiased m-0 p-0">
    @yield('content')

    {{-- <div class="row">
        <div class="col-md-12">
            <h2>Link List</h2>
            <ul>
                <li><a href="{{ route('user.profile', ['id' => 99, 'name' => 'Rian']) }}">User Profile</a></li>
                <li><a href="{{ route('product.index') }}">Product</a></li>
                <ul>
                    <li><a href="{{ route('product.category.handle', ['category' => 'food-beverage']) }}">Food & Beverage</a></li>
                    <li><a href="{{ route('product.category.handle', ['category' => 'beauty-health']) }}">Beauty & Health</a></li>
                    <li><a href="{{ route('product.category.handle', ['category' => 'home-care']) }}">Home Care</a></li>
                    <li><a href="{{ route('product.category.handle', ['category' => 'baby-kid']) }}">Baby & Kid</a></li>
                </ul>
                <li><a href="{{ route('transaction.index') }}">Transaction</a></li>
            </ul>
        </div>
    </div> --}}

    @stack('modals')

    @stack('scripts')
</body>
</html>