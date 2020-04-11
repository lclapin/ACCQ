<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
    <body>
        <div id="app">
            <div>
                <app></app>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>

