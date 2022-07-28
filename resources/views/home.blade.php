@extends('index')
@section('content')

    <div class="flex bg-tools lg:bg-contain bg-no-repeat">
        {{--gear animation--}}
        <div
            class="absolute right-0 top-0 lg:-me-36 lg:-mt-2 lg:w-4/12 md:w-6/12 w-8/12 lg:-mt-20  md:-mt-20 -mt-10 -me-20">
            <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fm8bpvnl.json"
                           background="transparent"
                           speed="1"
                           loop autoplay></lottie-player>
        </div>
        <div class="flex justify-center w-full flex-col lg:p-0">
            {{--navbar--}}
            @include('layout.navbar')

            {{--welcoming--}}
            @include('layout.welcoming')

            {{--we offer--}}
            @include('layout.offers')

            {{--space--}}
            @include('layout.space')

            {{--partners--}}
            @include('layout.partners')

            {{--activities--}}
            @include('layout.activities')

            {{--team--}}
            @include('layout.team')


            {{--footer--}}
            <div class="flex flex-wrap justify-center bgbyellow opacity-90 mt-32">
                <div class="w-full p-4">
                    <h1 class="text-white tracking-wide">
                        IoT Maker 2020
                    </h1>
                </div>
            </div>

        </div>

    </div>

@endsection

