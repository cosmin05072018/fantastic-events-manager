<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fantastic Events</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>

    <body>
        <div
            class="container container-first-page d-flex align-items-center justify-content-center min-vh-100 flex-column py-3">
            <div class="col-12 col-md-4 d-flex d-md-none justify-content-center mb-3 mb-md-0">
                <img src="{{ asset('storage/logo.svg') }}" alt="Logo" class="logo-img img-fluid">
            </div>

            <!-- Primul rând: Public Events -->
            <div class="row w-100 justify-content-center mb-4">
                <div class="col-12 col-md-8">
                    <div class="card py-5 d-flex align-items-center justify-content-center public-events">
                        <div class="card-body d-flex align-items-center flex-column justify-content-between">
                            <h3 class="text-center">Public <br> Events</h3>
                            <button type="button" class="btns-first-page py-2 py-md-3 px-3 px-md-5">Să începem</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Al doilea rând: Hotel Manager, Logo, Booking Restaurant Hotel -->
            <div class="row w-100 justify-content-center mb-4">
                <div class="col-12 col-md-7 col-lg-4 mb-3 mb-md-0">

                    <div class="card py-5 d-flex align-items-center justify-content-center hotel-manager">
                        <div class="card-body d-flex align-items-center flex-column justify-content-between">
                            <h3 class="text-center text-white">Hotel <br> Manager</h3>
                            <button type="button" class="btns-first-page py-2 py-md-3 px-3 px-md-5">Să începem</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-4 d-none d-md-flex justify-content-center mb-3 mb-md-0">
                    <img src="{{ asset('storage/logo.svg') }}" alt="Logo" class="logo-img img-fluid">
                </div>
                <div class="col-12 col-md-7 col-lg-4">
                    <div class="card py-5 d-flex align-items-center justify-content-center booking">
                        <div class="card-body d-flex align-items-center flex-column justify-content-between">
                            <h3 class="text-center text-white">Booking <br> Restaurant Hotel</h3>
                            <button type="button" class="btns-first-page py-2 py-md-3 px-3 px-md-5">Să începem</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Al treilea rând: Crează Evenimentul Tău -->
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="card py-5 d-flex align-items-center justify-content-center">
                        <div class="card-body d-flex align-items-center flex-column justify-content-between">
                            <h3 class="text-center">Crează <br> Evenimentul Tău</h3>
                            <button type="button" class="btns-first-page py-2 py-md-3 px-3 px-md-5">Să începem</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<section id="particles-js"></section> -->

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
        <!--<script src="{{ asset('js/particle.js') }}"></script> -->
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>

    </html>
