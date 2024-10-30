<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
        }

        html {
            line-height: 1.5;
            font-family: Figtree, sans-serif;
        }

        body {
            margin: 0;
        }

        .relative {
            position: relative;
        }

        .flex {
            display: flex;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .bg-center {
            background-position: center;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .text-right {
            text-align: right;
        }

        .font-semibold {
            font-weight: 600;
        }

        .hover\:text-gray-900:hover {
            color: #1f2937;
        }

        .ml-4 {
            margin-left: 1rem;
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed;
            }

            .sm\:top-0 {
                top: 0;
            }

            .sm\:right-0 {
                right: 0;
            }
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-center justify-center min-h-screen bg-center"
        style="background-image: url('{{ asset('assets/images/ERP.jpeg') }}'); background-size: contain;">

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"
                style="background-color: rgb(52, 135, 160); border-radius: 15px;">
                @auth
                    <a href="{{ url('/account/dashboard') }}" class="font-semibold hover:text-gray-900"
                        style="font-size: 20px">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold hover:text-gray-900"
                        style="font-size: 20px">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold hover:text-gray-900"
                            style="font-size: 20px">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>
