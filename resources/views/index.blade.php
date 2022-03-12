<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/fonts/avantgarde-bk-bt/avantgarde.css" rel="stylesheet">
    <meta name="yandex-verification" content="0ad382af5a348276"/>

    <link rel="icon" href="IoTLogo.png">

    <title>IoT Maker</title>
    <style>
        body {
            font-family: 'Avant Garde Book BT';
            /*overflow-x: hidden;*/
        }

        html, body {
            position: relative;
            overflow-x: hidden;
        }

        .bg-shade-black {
            background-color: #0d0e11;
        }

        .bg- {
            background-color: #050505;
        }

        .bgblue {
            background-color: #307ABA;
        }

        .bgbyellow {
            background-color: #F39E19;
        }

        .content-desktop {
            display: initial;
        }

        .content-mobile {
            display: none;
        }

        .bg-tools {
            background-image: url("/bgtools.png");

        }

        @media screen and (max-width: 768px) {

            .content-desktop {
                display: none;
            }

            .content-mobile {
                display: initial;
            }
        }

        .side-menu .active {
            color: white;
        }

        .mobile-menu .active {
            color: #F39E19
        }

        img {
            align-self: flex-start;
        }

        [v-cloak] {
            display: none;
        }

        .contact {
            float: end;
            bottom: 0;
            position: fixed;
        }

        .flip:dir(rtl) {
            /*-webkit-transform: scaleX(-1);*/
            /*transform: scaleX(-1);*/
        }

        .sticky-element {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        .scroll-bar {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
</head>
<body dir="" class="bg-shade-black max-w-full">

<div id="app" class="flex bg-tools fill-current lg:bg-contain bg-no-repeat " v-cloak>

    {{--gear animation--}}
    <div
        class="absolute right-0 top-0 lg:-me-36 lg:-mt-2 lg:w-4/12 md:w-6/12 w-8/12 lg:-mt-20  md:-mt-20 -mt-10 -me-20">
        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fm8bpvnl.json" background="transparent"
                       speed="1"
                       loop autoplay></lottie-player>
    </div>


    {{--content--}}
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

        {{--startups--}}
        @include('layout.startups')

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
{{--<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>--}}
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="/js/app.js"></script>


<script>

    let vue = new Vue({
        el: '#app',
        data: {
            isOpen: false,
            projects: false,
            showNavbar: false,
        },
        methods: {
            toggleNavbar() {
                this.showNavbar = !this.showNavbar
            },
            openContact() {
                this.isOpen = !this.isOpen
            },
            openProjects() {
                this.projects = true
            },

        },
        mounted() {

        },
    })

</script>


</body>
</html>
