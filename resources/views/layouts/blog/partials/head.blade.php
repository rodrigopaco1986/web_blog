<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ config('app.name') }}</title>
    
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" />
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <link rel="image_src" href="{{ asset('favicon.png') }}" />

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Ionicons -->
    <link rel="preload" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <!-- Google Font: Source Sans Pro -->
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <!-- Main styles -->
    <link rel="preload" href="{{ mix('admin/css/default.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
</head>