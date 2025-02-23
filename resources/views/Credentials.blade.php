<!DOCTYPE html>
<html lang="en">
    <head>
        @include('components.Header')
    </head>
    <body>
        <div class="container d-flex justify-content-between">
            @include('components.Sidebar')
            @include('components.UserProfile')
        </div>
        @include('components.Script')
    </body>
</html>