<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield("title", "Tech Academy")</title>

        <!-- Styles / Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body>
        @include("partials.navbar")
        @section("content")
        @show
    </body>
</html>
