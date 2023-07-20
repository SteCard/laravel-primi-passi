<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="text-center border-primary">
                        <div class="">
                            <h1>ABOUT US</h1>
                        </div>
                        <div class="my-5">
                            <h3>
                                <strong>La nostra storia:</strong><span> {{ $story }} </span>
                            </h3>
                            <h3>
                                <strong>Indirizzo:</strong><span> {{ $address }} </span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </body>
</html>
