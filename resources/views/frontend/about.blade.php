@extends('frontend.layout')
@section('frontend')
    <style>
        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animated-text {
            animation: slideInFromLeft 3s ease-in-out;
        }

        .row {
            animation: fadeIn 5s ease-in-out;
        }
    </style>


    <!-- Blog-Section -->
    <div class="about-page">
        <div class="container">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                <div class="container">
                    <div class="row">
                        @foreach ($about as $abt)
                            <div class="col-md-6">
                                <div class="container">
                                    <img src="{{ $abt->getFirstMediaUrl() }}" alt="" style="max-width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-10 p-lg-5 mx-auto my-5">
                                    <h1 class="display-4 font-weight-normal animated-text">Jason K C</h1>
                                    <p class="lead font-weight-normal animated-text">{{ $abt->about }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>


            <div class="container-fluid">
                <div id="specific-row" class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12" style="margin-bottom: 45px;">
                        <div class="bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                            <div class="my-3 py-3">
                                <h2 class="display-5">Education</h2>
                                @foreach ($education as $edu)
                                    <ul>
                                        <li>
                                            <span style='font-size:20px;'>&#128321; </span> {{ $edu->desc }}
                                        </li>
                                        <br>
                                        {{ $edu->school }}
                                    </ul>
                                @endforeach
                            </div>
                            <div class="bg-light shadow-sm mx-auto"
                                style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" style="margin-bottom: 45px;">
                        <div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                            <div class="my-3 p-3">
                                <h2 class="display-5">Experience</h2>
                                @foreach ($experience as $exp)
                                    <ul>
                                        <li>
                                            <span style='font-size:20px;'>&#128321; </span> {{ $exp->desc }}
                                        </li>
                                        <br>
                                        {{ $exp->inst }}
                                    </ul>
                                @endforeach
                            </div>
                            <div class="bg-dark shadow-sm mx-auto"
                                style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                            <div class="my-3 p-3">
                                <h2 class="display-5">Skills</h2>
                                @foreach ($skill as $sk)
                                    <ul>
                                        <li>
                                            <span style='font-size:20px;'>&#128321; </span> {{ $sk->desc }}
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                            <div class="bg-light shadow-sm mx-auto"
                                style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;"></div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>



    @extends('frontend.nav.script')
@endsection
