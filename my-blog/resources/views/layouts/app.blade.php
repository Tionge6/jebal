
<!DOCTYPE html>
<html langa="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- include bootstrap CSS CDN header_register_callback -->
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    <body>
        @yield('content')

    </body>
    <!--include bootstrap JS CDN header_register_callback -->
    </html>