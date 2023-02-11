<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basic Livewire Template</title>
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">

        @livewireStyles
    </head>

    <body class="container mt-5 antialiased">
        <livewire:counter /> 

        @livewireScripts
    </body>
</html>
