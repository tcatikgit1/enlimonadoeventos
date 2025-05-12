@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();

/* Display elements */
$customizerHidden = ($customizerHidden ?? '');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - @yield('code')</title>
    @vite(['resources/assets/vendor/scss/pages/page-misc.scss' ])
    @include('layouts/sections/styles')

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .btn-inicio {
            border: 2px solid #b9ff38;
            color: #000;
            background-color: #b9ff38;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
        }
        
        .btn-inicio:hover {
            background-color: #9bd42f;
            color: #000;
        }

        .title-error {
            color: #B9FF38;
        }

        .error-container{
        background: linear-gradient(to bottom, #000000 30%, #160b24 100%);
    }

    </style>
</head>
<body class="error-container">
   
        <div class="misc-wrapper">
            <h1 class="mb-2 mx-2 fs-xxlarge title-error" style="line-height: 6rem;font-size: 6rem;">@yield('code')</h1>
            <h4 class="mb-2 mx-2 text-white">@yield('title')</h4>
            <p class="mb-6 mx-2 text-white">@yield('message')</p>
            <a href="{{ route('app')}}" class="btn mb-10 btn-inicio">@yield('boton')</a>
          
        </div>

</body>
</html>

