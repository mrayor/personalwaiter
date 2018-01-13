<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en-US" class="no-js">

<head>
    @include('partials._head')
</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-4 ie" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('partials._nav') 
    @yield('content') 
    @include('partials._footer') 
    @include('partials._scripts')
</body>
</html>