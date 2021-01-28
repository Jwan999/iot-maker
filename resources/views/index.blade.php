<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/fonts/avantgarde-bk-bt/avantgarde.css" rel="stylesheet">

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
    </style>
</head>
<body class="bg-shade-black relative overflow-x-hidden max-w-full">

<div id="app" class="flex bg-tools fill-current md:bg-contain bg-no-repeat" v-cloak>
    {{--gear animation--}}
    <div class="absolute top-0 right-0 md:-mr-36 md:-mt-24 md:w-4/12 w-8/12 -mt-10 -mr-20">
        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fm8bpvnl.json" background="transparent"
                       speed="1"
                       loop autoplay></lottie-player>
    </div>
    {{--mobile navbar--}}
    <div class="flex flex-row text-white content-mobile fixed z-10 m-2 p-4 bg-black opacity-90 rounded">
        <div class="flex w-full items-center">
            <div class="w-12 mr-4">
                <img src="smalllogo.png" alt="">
            </div>
            <scrollactive class="mobile-menu" active-class="active" :offset="400" :duration="800"
                          bezier-easing-value=".5,0,.35,1">
                <a href="#offers" class="scrollactive-item text-gray-300 mx-3">
                    01
                </a>
                <a href="#space" class="scrollactive-item text-gray-300 mx-3">
                    02
                </a>
                <a href="#partners" class="scrollactive-item text-gray-300 mx-3">
                    03
                </a>
                <a href="#activities" class="scrollactive-item text-gray-300 mx-3">
                    04
                </a>
                <a href="#team" class="scrollactive-item text-gray-300 mx-3">
                    05
                </a>
                <a href="#startups" class="scrollactive-item text-gray-300 mx-3">
                    06
                </a>
            </scrollactive>
        </div>

    </div>
    {{--sidebar--}}
    {{-- todo using divide from tailwind--}}
    <div class="flex content-desktop fixed z-10 top-0 left-0 justify-center bg-shade-black border-white border-r h-screen w-2/12 p-8">
        <div class="w-full flex justify-center">
            <img class="w-32" src="/IoTLogo.png" alt="">
        </div>
        <div class="flex flex-col justify-center text-center text-gray-500 mt-20">
            <scrollactive class="side-menu flex flex-col" active-class="active" :offset="400" :duration="800"
                          bezier-easing-value=".5,0,.35,1">
                <a href="#offers"
                   class="scrollactive-item text-xl m-4 hover:text-white hover:shadow-2xl">01</a>
                <a href="#space"
                   class="scrollactive-item text-xl m-4 hover:text-whi te hover:shadow-2xl">02</a>
                <a href="#partners"
                   class="scrollactive-item text-xl m-4 hover:text-white hover:shadow-2xl">03</a>
                <a href="#activities"
                   class="scrollactive-item text-xl m-4 hover:text-white hover:shadow-2xl">04</a>
                <a href="#team"
                   class="scrollactive-item text-xl m-4 hover:text-white hover:shadow-2xl">05</a>
                <a href="#startups"
                   class="scrollactive-item text-xl m-4 hover:text-white hover:shadow-2xl">06</a>
            </scrollactive>
        </div>
    </div>

    {{--contact us--}}
    <transition name="slideLeft">
        <div v-show="isOpen ? 'transition duration-500 ease-in-out transform' : ''"
             class="bgblue md:w-4/12 w-10/12 h-screen fixed right-0 z-10">
            <div class="w-3/12 md:w-3/12 z-10 top-0 left-0 m-4">
                <img src="sidepattern.png" alt="">
            </div>
            <div class="flex flex-col w-full p-4">
                <h1 class="text-white text-xl mb-3">
                    Reach out if you want
                </h1>
                {{--todo--}}
                {{--                @if(Session::has('success'))--}}
                {{--                    <div class="alert alert-success">--}}
                {{--                        {{Session::get('success')}}--}}
                {{--                    </div>--}}
                {{--                @endif--}}
                <form method="post" action="/contact">
                    @csrf
                    <div class="w-full">
                        <input name="email"
                               class="outline-none placeholder-gray-200 text-lg rounded w-full py-2 px-3 border-blue-200 border mt-3"
                               placeholder="Email Address" type="text">
                        <input name="subject"
                               class="outline-none placeholder-gray-200 text-lg rounded w-full py-2 px-3 border-blue-200 border mt-3"
                               placeholder="Subject" type="text">
                        <input name="body"
                               class="outline-none placeholder-gray-200 text-lg rounded w-full py-2 px-3 border-blue-200 border mt-3 h-32"
                               placeholder="Body" type="text">
                        <button type="submit" class="self-end mt-3 text-white bgbyellow py-2 px-3 rounded">
                            Submit
                        </button>
                    </div>
                </form>
                <div class="md:mt-10 mt-3">
                    <a href="https://www.instagram.com/iotmaker_official/">
                        <div class="mt-3 flex">
                            <svg class="fill-current text-white w-7 h-7" xmlns="http://www.w3.org/2000/svg"
                                 data-name="Layer 1" viewBox="0 0 24 24">
                                <path
                                        d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"/>
                            </svg>
                            <h1 class="ml-4 text-blase text-white">
                                iotmaker_offical
                            </h1>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/iotmakeriq">
                        <div class="mt-3 mr-2 flex">
                            <svg class="fill-current text-white w-7 h-7" xmlns="http://www.w3.org/2000/svg"
                                 data-name="Layer 1" viewBox="0 0 24 24">
                                <path
                                        d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"/>
                            </svg>
                            <h1 class="ml-4 text-blase text-white">
                                iotmakeriq
                            </h1>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </transition>
    <div @click="openContact()"
         class="fixed bottom-0 right-0 md:mr-12 mr-4 md:mb-12 mb-6 text-white md:w-2/12 w-5/12 z-10">
        <img src="reachout.png" alt="">
    </div>
    <div class="md:w-2/12"></div>
    {{--content--}}
    <div class="flex flex-col md:p-0 md:w-10/12">
        {{--welcoming--}}
        <div class="flex flex-col text-white p-3">
            <div v-show="projects == false" class="w-8/12 md:mt-72 mt-10 md:ml-14 ml-0 content-desktop">
                <img src="sloganwhite.png" alt="">
            </div>
            <div v-show="projects == false" class="md:mt-72 mt-32 md:ml-14 ml-0 content-mobile w-full">
                <img class="mt-14 w-10/12" src="makeyour.png" alt="">
                <img class="mt-2 w-7/12" src="passion.png" alt="">
            </div>

            <div v-show="projects" class="w-10/12 md:mt-72 mt-10 md:ml-14 ml-0 content-desktop">
                <img src="What%20our%20passion%20made.png" alt="">
            </div>
            <div v-show="projects" class="md:mt-72 mt-32 md:ml-14 ml-0 content-mobile w-full">
                <img class="mt-14 w-9/12" src="whatour.png" alt="">
                <img class="mt-2 w-10/12" src="passionmade.png" alt="">
            </div>

            <div v-show="projects == false">
                <div class="mt-12 w-7/12 md:ml-14 ml-0 w-full md:w-10/12">
                    {{--todo--}}
                    <p class="text-gray-300 md:text-lg text-">
                    </p>
                </div>
                <div class="flex mt-8 mb-80 md:ml-14 ml-0">
                    {{--                    @click="openProjects"--}}
                    <a href="/" class="text-yellow-500 md:text-2xl text-xl hover:text-yellow-400">
                        CHECK OUT WHAT WE DO
                    </a>
                    <svg class="fill-current text-yellow-500 hover:text-yellow-400 w-9 h-9"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                                d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                    </svg>
                </div>
            </div>
            {{--            todo--}}
            <div v-show="projects">
                <div class="flex justify-center w-10/12 mt-12 md:ml-14 ml-2 mt-24 mb-32">
                    <carousel autoplay :pagination-color="'#a6a7aa'"
                              :pagination-active-color="'white'" :pagination-size="6"
                              :per-page-custom="[[480, 1], [768, 1], [1024, 3]]" :navigation-enabled="true">
                        <slide>
                            <div class="rounded p-4 opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl text-yellow-400 mt-3 text-center">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl text-yellow-400 mt-3 text-center">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl text-yellow-400 mt-3 text-center">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl text-yellow-400 mt-3 text-center">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl text-yellow-400 mt-3 text-center">
                                    title
                                </h1>
                            </div>
                        </slide>

                    </carousel>
                </div>
            </div>

        </div>

        {{--we offer--}}

        <div id="offers" class="scrollspy offers flex flex-wrap justify-center md:mt-28 mt-10 p-4">
            <div class="w-full text-start md:mx-16 mx-0">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
                    Get to know IoT Maker
                </h1>
            </div>
            <div class="flex flex-col justify-center w-full md:m-4 m-0">
                <div class="flex md:flex-row flex-col-reverse justify-around md:mx-4 mx-0">

                    <div class="flex flex-col md:w-7/12 w-full md:mt-0 mt-6">
                        <h1 class="text-white text-4xl">
                            Mission
                        </h1>
                        <p class="text-xl text-gray-300 mt-6">
                            Our co-working space is a true representation of a collaborative environment where people
                            can
                            get comfortable with innovation.
                            Our friendly space allows you to get things done creatively and proudly meet your goals.
                        </p>
                    </div>

                    <div class="md:w-3/12 w:10/12 flex justify-center">
                        <img src="coworking.png" alt="">
                    </div>

                </div>
                <div class="flex md:flex-row flex-col-reverse justify-around md:mx-4 mx-0 mt-10">

                    <div class="flex flex-col md:w-7/12 w-full md:mt-0 mt-6">
                        <h1 class="text-white text-4xl">
                            Vision
                        </h1>
                        <p class="text-xl text-gray-300 mt-6">
                            With the help of a group consisted of talented and motivated trainers we provide a wide
                            variety
                            of technical courses and
                            mentorships which made our vision of expanding the community of 3D modeling, design
                            manufacturing, cinema 4D, electronics,
                            robotics, Ai and web development come to live.
                        </p>
                    </div>

                    <div class="md:w-3/12 w:10/12 flex justify-center">
                        <img src="learn.png" alt="">
                    </div>

                </div>
                <div class="flex md:flex-row flex-col-reverse justify-around md:mx-4 mx-0 mt-10">

                    <div class="flex flex-col md:w-7/12 w-full md:mt-0 mt-6">
                        <h1 class="text-white text-4xl">
                            Passion
                        </h1>
                        <p class="text-xl text-gray-300 mt-6">
                            We are here to share the passion of creating with you, you can learn how to use
                            materials as well as build cool projects.
                            Imagine DIY meets education! Maker Space is a place where you can launch your creativity and
                            satisfy your eagerness to learn and use machines to create prototypes.
                        </p>
                    </div>

                    <div class="md:w-3/12 w-9/12 flex justify-center self-center md:-mr-0 -mr-4">
                        <img class="w-10/12" src="workshop.png" alt="">
                    </div>

                </div>

            </div>
        </div>

        {{--space--}}

        <div id="space" class="scrollspy space flex flex-wrap justify-center mt-32 p-4">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
                    Our Space
                </h1>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 justify-items-center">
                <div class="bg-black rounded p-6 flex flex-col justify-center md:w-10/12 w-full">
                    <img class="m-2 md:w-8/12 w-full self-center" src="bigspace%20copy.png" alt="">
                    <h1 class="text-white text-2xl mt-3">
                        Co-working Space
                    </h1>
                    <p class="text-gray-300 text-sm mt-6">
                        This is where you'll work, innovate and meet your goals.
                        we've made sure our startups would have what they need to get things done, from consulting,
                        branding or even a place to facilitate meetings
                    </p>
                </div>
                <div class="bg-black rounded p-6 flex flex-col justify-items-center md:w-10/12 w-full">
                    <img class="m-2 md:w-6/12 w-full self-center" src="makerspace.png" alt="">
                    <h1 class="text-white text-2xl mt-3">
                        Maker Space
                    </h1>
                    <p class="text-gray-300 text-sm mt-6">
                        Where else would you want to unleash your creativity and build out your ideas.
                        We'll be providing you with all the tools you could need.
                    </p>
                </div>
            </div>

        </div>

        {{--partners--}}

        <div id="partners" class="scrollspy partners flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
                    Our Partners
                </h1>
            </div>
            <div class="flex justify-center">
                <div class="bg-gray-200 p-8 mb-6 rounded opacity-85 md:w-6/12 w-10/12">
                    <div class="self-center">
                        <img src="giz copy.png" alt="">
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full bg-black">
                {{--partner--}}

                <div class="flex self-center justify-center md:py-8 md:px-12 py-3 px-4 text-white md:w-10/12 w-full">
                    <div class="md:w-1/12 w-4/12 md:mx-10 mx-2">
                        <img src="erbil.png" alt="">
                    </div>
                    <div class="md:w-2/12 w-7/12 md:mx-10 mx-2">
                        <img src="fieldready.png" alt="">
                    </div>

                    <div class="md:w-32 w-5/12 md:mx-10 mx-2">
                        <img src="mosulspace.png" alt="">
                    </div>

                </div>
            </div>
        </div>

        {{--activities--}}

        <div id="activities" class="scrollspy activities flex flex-wrap justify-center w-full mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
                    What we've organized
                </h1>
            </div>

            <div class="flex flex-col md:w-10/12 w-full m-4">

                <img class="md:w-9/12 w-full self-center md:-ml-52 -ml-0" src="makercamp.png" alt="">

                <div class="md:w-10/12 w-full p-4 bg-black md:-mt-20 -mt-10 md:ml-72 ml-0 opacity-90 rounded self-center">
                    <h1 class="text-white md:text-4xl text-xl">
                        Maker Camp
                    </h1>
                    <h1 class="text-white text-gray-300 md:text-xl text-lg mt-2">
                        2019
                    </h1>
                    <p class="text-gray-300 mt-4 text-sm md:text-base">
                        Our Maker Camp event was a great chance to include more people in our passion for using
                        technology to solve the problems we face.
                    </p>
                </div>

            </div>

            <div class="flex flex-col md:w-11/12 w-full m-4">

                <img class="md:w-8/12 w-11/12 self-center md:-mr-80 -ml-0" src="innovationdat.png" alt="">

                <div class="md:w-8/12 w-full p-4 bg-black md:-mt-20 -mt-10 md:ml-24 ml-0 opacity-90 rounded">
                    <h1 class="text-white md:text-4xl text-xl">
                        Innovation Day
                    </h1>
                    <h1 class="text-white text-gray-300 md:text-xl text-lg mt-2">
                        2019
                    </h1>
                    <p class="text-gray-300 mt-4 text-sm md:text-base">
                        Our students got the opportunity to present their projects and get the feedback they needed as
                        well as meet other people with te same interests.
                    </p>
                </div>

            </div>

            <div class="flex flex-col md:w-10/12 w-full m-4">

                <img class="md:w-9/12 w-full self-center md:-ml-52 -ml-0" src="3d.png" alt="">

                <div class="md:w-10/12 w-full p-4 bg-black md:-mt-20 -mt-10 md:ml-72 ml-0 opacity-90 rounded self-center">
                    <h1 class="text-white md:text-4xl text-xl">
                        3D Modeling Competition
                    </h1>
                    <h1 class="text-white text-gray-300 md:text-xl text-lg mt-2">
                        2020
                    </h1>
                    <p class="text-gray-300 mt-4 text-sm md:text-base">
                        We successfully held an online 3d modeling competition where the winner got a chance to win a 3d
                        printer.
                    </p>
                </div>

            </div>
        </div>

        {{--team--}}

        <div id="team" class="scrollspy team flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
                    Our Team
                </h1>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-6 justify-items-center w-full bg-black p-4 align-middle">

                <div class="flex flex-col w-7/12">
                    <img src="mustafa.png" alt="">
                    <h1 class="md:text-3xl text-xl text-white mt-3 text-center">
                        Mustafa Alrawi
                    </h1>
                    <h1 class="text-base text-gray-200 mt-1 text-center">
                        Finance and Admin
                    </h1>
                </div>
                <div class="flex flex-col w-10/12">
                    <img src="ali.png" alt="">
                    <h1 class="md:text-3xl text-xl text-white mt-3 text-center">
                        Ali Taher
                    </h1>
                    <h1 class="text-base text-gray-200 mt-1 text-center">
                        Communication Manager
                    </h1>
                </div>
                <div class="flex flex-col w-7/12">
                    <img src="thu.png" alt="">
                    <h1 class="md:text-3xl text-xl text-white mt-3 text-center">
                        Thulfekar Hameed
                    </h1>
                    <h1 class="text-base text-gray-200 mt-1 text-center">
                        IoT Maker Manager
                    </h1>
                </div>
            </div>
        </div>

        {{--startups--}}

        <div id="startups" class="scrollspy startups flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
                    Our Startup Community
                </h1>
            </div>
            <div class="flex justify-center w-full bg-black">
                <div class="flex py-4 px-12 text-white">
                    <carousel class="mt-12" autoplay :pagination-color="'#a6a7aa'"
                              :pagination-active-color="'white'" :pagination-size="6"
                              :per-page-custom="[[480, 2], [768, 3], [1024, 4]]">
                        <slide>
                            <div class="md:w-5/12 w-8/12 opacity-70 self-center">
                                <img src="startups/Buyut%20Service@3x.png" alt="">
                            </div>
                        </slide>
                        <slide>
                            <div class="md:w-5/12 w-8/12 opacity-70 self-center">
                                <img src="startups/رحلات.png" alt="">
                            </div>
                        </slide>
                        <slide>
                            <div class="md:w-2/12 w-3/12 opacity-70 self-center">
                                <img src="startups/RE-FOCUS%20LOGO.png" alt="">
                            </div>
                        </slide>
                        <slide>
                            <div class="md:w-5/12 w-8/12 opacity-70 self-center">
                                <img src="startups/painterchy%20logo.png" alt="">
                            </div>
                        </slide>
                        <slide>
                            <div class="md:w-5/12 w-8/12 opacity-70 self-center">
                                <img src="startups/logo1%20work%20wp%20(2)%20copy.png" alt="">
                            </div>
                        </slide>
                        <slide>
                            <div class="md:w-5/12 w-8/12 opacity-70 self-center">
                                <img src="startups/logo%20Kursi.png" alt="">
                            </div>
                        </slide>
                        <slide>
                            <div class="md:w-5/12 w-8/12 opacity-70 self-center">
                                <img src="startups/Farha.png" alt="">
                            </div>
                        </slide>
                        <slide>
                            <div class="md:w-5/12 w-8/12 opacity-70 self-center">
                                <img src="iotkids.png" alt="">
                            </div>
                        </slide>
                    </carousel>
                </div>
            </div>
        </div>

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

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="/js/app.js"></script>
<script>

    let vue = new Vue({
        el: '#app',
        data: {
            isOpen: false,
            projects: false
        },
        methods: {
            openContact() {
                this.isOpen = !this.isOpen
            },
            openProjects() {
                this.projects = true
            }
        },
        mounted() {

        },
    })

</script>


</body>
</html>