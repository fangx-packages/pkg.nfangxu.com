@extends("layouts.base")

@section("body")
    <body class="app ">
        <div id="spinner"></div>
        <div id="app">
            <div class="main-wrapper">
                <x-navbar></x-navbar>
                <x-aside></x-aside>
                <div class="app-content">
                    @yield("content")
                </div>
                @include("layouts.footer")
            </div>
        </div>
    </body>
@stop