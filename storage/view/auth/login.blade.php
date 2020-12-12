@extends("layouts.app")

@section('title', 'Login')

@section("content")
    <div class="row">
        <div class="single-page single-pageimage construction-bg cover-image"
             data-image-src="{{ assets('img/news/img10.jpg') }}">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wrapper wrapper2">
                        <form id="login" class="card-body" tabindex="500">
                            <h3>Sign In</h3>
                            <div class="mail">
                                <input id="email" type="email" name="mail">
                                <label for="email">Mail or Username</label>
                            </div>
                            <div class="passwd">
                                <input id="password" type="password" name="password">
                                <label for="password">Password</label>
                            </div>
                            <div class="submit">
                                <a class="btn btn-primary btn-block" href="{{ route('login') }}"
                                   data-toggle="modal" data-target="#login-failure">Sign In</a>
                            </div>
                            <p class="mb-2"><a href="#" data-toggle="modal" data-target="#sorry">Forgot Password</a></p>
                            <p class="text-dark mb-0">
                                Don't have account?
                                <a href="#" class="text-primary ml-1" data-toggle="modal" data-target="#sorry">SIGN UP</a>
                            </p>
                        </form>
                        <div class="card-body border-top">
                            <a class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#sorry">
                                <i class="fa fa-github"></i> Sign in with Github
                            </a>
                        </div>
                        <div class="modal fade" id="sorry" tabindex="-1" role="dialog" aria-labelledby="sorryLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="sorryLabel">Sorry...</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>This feature is coming soon...</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="login-failure" tabindex="-1" role="dialog" aria-labelledby="loginFailureLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginFailureLabel">Sorry...</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Something went wrong...</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="log-wrapper text-center">
                        <h1 class="mb-2 mt-4 mt-lg-0 ">{{ config('app_name') }}</h1>
                        <br>
                        <p>
                            Here is Niu Fangxu's open source library,
                            there are many extensions about PHP,
                            and many extensions specifically developed for Hyperf and Laravel.
                        </p>
                        <a class="btn btn-primary mt-3" href="https://github.com/fangx-packages" target="_blank">View
                            Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("layouts.footer")
@stop

@section("script")
    <script src="{{ assets('js/moment.min.js') }}"></script>
@stop
