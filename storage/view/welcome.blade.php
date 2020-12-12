@extends("layouts.app")

@section('title', 'Login')

@section("content")
    <div class="container mt-6 mb-5 ">
        <div class="row">
            <div class="single-page construction-bg cover-image" data-image-src="assets/img/news/img14.jpg">
                <div class="text-white text-center construction">
                    <h1 class="mb-0">{{ config('app_name') }}</h1>
                    <p class="">We are Currently Working on Our Site...please stay tuned</p>
                </div>
                <div class="row ">

                    <div id="count-down" class="center-block text-white mt-3">
                        <div class="clock-presenter days_dash">
                            <div class="digit"></div>
                            <div class="digit"></div>
                            <p class="mt-2">Days</p>
                        </div>
                        <div class="clock-presenter hours_dash">
                            <div class="digit"></div>
                            <div class="digit"></div>
                            <p class="mt-2">Hours</p>
                        </div>
                        <div class="clock-presenter minutes_dash">
                            <div class="digit"></div>
                            <div class="digit"></div>
                            <p class="mt-2">Minutes</p>
                        </div>
                        <div class="clock-presenter seconds_dash">
                            <div class="digit"></div>
                            <div class="digit"></div>
                            <p class="mt-2">Seconds</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ assets('plugins/count-down/jquery.lwtCountdown-1.0.js') }}"></script>
    <script>
        $(function () {
            "use strict";
            $('#count-down').countDown({
                targetDate: {
                    'day': 14,
                    'month': 2,
                    'year': 2021,
                    'hour': 13,
                    'min': 14,
                    'sec': 0
                },
                omitWeeks: true
            });

        });
    </script>
@stop