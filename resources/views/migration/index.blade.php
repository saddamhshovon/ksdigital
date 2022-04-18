<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Database Migration</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="flex justify-center items-center h-screen bg-neutral-800 text-orange-500 text-left text-sm">
    <main class="p-5 w-full md:w-2/3 lg:w-1/2">
        <img class="w-36 md:w-48 mb-5" src="{{ asset('images/app/logo/logo_dark.svg') }}" alt="KS digital" srcset="">
        <div class="p-6 bg-black rounded-lg overflow-scroll">
            <pre>{{ $artisanOutput }}</pre>
        </div>
        <p class="mt-5 font-semibold text-xs text-white">Copyright &copy; {{ now()->year }} {{ env('APP_NAME') }}</p>
    </main>
</body>

</html>
