<!DOCTYPE html>
<html lang="en">
    <head>
        @include('components.head')
    </head>
    <body>
        <div class="container d-flex justify-content-between">
            @include('components.sidebar')
            @include('components.userprofile')
        </div>
        @include('components.script')
    </body>
</html>