<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Med Line PH</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
<style>
        /* Change background color of the sidebar */
        .main-sidebar {
            background-color: #fff;
            /* Replace with your desired background color */
        }

        /* Change background color of active menu item */
        .sidebar .nav-item.active {
            background-color: #F25F64 !important;
            /* Replace with your desired background color */
        }
 

        /* Change background color of hovered menu item */
        .sidebar .nav-item .nav-link:hover {
            background-color: #FFD8D9 !important;
            /* Replace with your desired hover color */
        }

        .menu-item {
            width: 300px !important;
            margin-left: -10px;
            display: flex;
            align-items: center;
        }

        .icon-left .menu-text {
            display: inline-block ;
            vertical-align: middle;
        }

        .icon-left i {
            margin-right: 30px;
            /* Adjust this margin as needed */
            display: inline-block;
            vertical-align: middle;
        }
        
    </style>

</head>
<body>