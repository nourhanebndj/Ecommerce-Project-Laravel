<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard Client</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('dashassets/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">
            @include('inc.client.sidebar')
            @include('inc.client.navbar')

            <div class="content">
              <div class="pb-5">
                <div class="row g-5">
                  <div>
                  <h4>Mes Commandes</h4>
                  <hr>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if($orders->isEmpty())
                    <p>You have no orders.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Id de commande</th>
                                <th scope="col">Total</th>
                                <th scope="col">Date de commande</th>
                                <th scope="col">Livraison</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $index => $order)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ number_format($order->total_price, 2) }} DA</td>
                                    <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                    <td>{{ ucfirst($order->delivery) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </main>

    <!-- Include your scripts here -->
    <script src="{{ asset('dashassets/js/phoenix.min.js') }}"></script>
    <script src="{{ asset('dashassets/js/user.min.js') }}"></script>
</body>
</html>
