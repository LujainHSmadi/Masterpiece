<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
   <meta charset="utf-8" />
   <title>Meat</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <!--Template style -->
   <link rel="stylesheet" type="text/css" href="css/animate.css" />
   <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="css/fonts.css" />
   <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
   <link rel='stylesheet' href='../../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="css/responsive.css" />
   <!--favicon-->
   <link rel="shortcut icon" type="image/png" href="images/fav-icon.png" />
<script src='../../google_analytics_auto.js'></script></head>
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
