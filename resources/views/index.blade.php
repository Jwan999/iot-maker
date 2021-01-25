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

        .bg-shade-black {
            background-color: #0d0e11;
        }


        .bg- {
            background-color: #050505;
        }

        .bgblue {
            background-color: #269DDD;
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

    </style>
</head>
<body class="bg-shade-black relative">
<div class="absolute top-0 right-0 md:-mr-36 md:-mt-24 md:w-4/12 w-8/12 -mt-10 -mr-20">
    <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fm8bpvnl.json" background="transparent"
                   speed="1"
                   loop autoplay></lottie-player>
</div>
{{--mobie navbar--}}
<div class="text-white content-mobile fixed">
    hello
</div>

<div id="app" class="flex bg-tools fill-current md:bg-contain bg-no-repeat">

    {{--sidebar--}}
    {{-- todo using divide from tailwind--}}
    <div class="flex content-desktop sticky top-0 left-0 justify-center bg-shade-black border-white border-r h-screen w-2/12 p-8">
        <div class="w-full flex justify-center">
            <img class="w-32" src="/IoTLogo.png" alt="">
        </div>
        <div class="flex flex-col justify-center text-center text-gray-500 mt-20">
            {{--todo--}}
            {{--make active states for each section also add the name of the section when clicked--}}
            <a :class="[{element :'offers'} ? 'text-white' : 'text-gray-300']" href="/"
               v-scroll-to="{ el: '#offers', onStart: onStart, onDone: onDone,}"
               class="text-xl m-4 hover:text-white hover:shadow-2xl">01</a>
            <a href="/" v-scroll-to="'#space'" class="text-xl m-4 hover:text-white hover:shadow-2xl">02</a>
            <a href="/" v-scroll-to="'#partners'" class="text-xl m-4 hover:text-white hover:shadow-2xl">03</a>
            <a href="/" v-scroll-to="'#activites'" class="text-xl m-4 hover:text-white hover:shadow-2xl">04</a>
            <a href="/" v-scroll-to="'#team'" class="text-xl m-4 hover:text-white hover:shadow-2xl">05</a>
            <a href="/" v-scroll-to="'#startups'" class="text-xl m-4 hover:text-white hover:shadow-2xl">06</a>

        </div>
    </div>

    {{--contact us--}}
    <div class="fixed bottom-0 right-0 md:mr-12 mr-4 md:mb-12 mb-6 text-white md:w-2/12 w-4/12">
        <img src="circle.png" alt="">
    </div>
    {{--content--}}
    <div class="flex flex-col md:p-0 md:w-10/12 p-4">
        {{--welcoming--}}
        <div class="flex flex-col text-white p-3">
            <div class="w-8/12 md:mt-72 mt-10 md:ml-14 ml-0 content-desktop">
                <img src="sloganwhite.png" alt="">
            </div>
            <div class="md:mt-72 mt-20 md:ml-14 ml-0 content-mobile w-full">
                <img class="mt-14 w-10/12" src="makeyour.png" alt="">
                <img class="mt-2 w-7/12" src="passion.png" alt="">
            </div>
            <div class="mt-14 w-7/12 md:ml-14 ml-0 w-full md:w-10/12">
                <p class="text-gray-300 md:text-lg text-">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At
                    eveniet
                    illo
                    illum inventore maiores nisi
                    obcaecati officia similique vitae! Corporis distinctio, excepturi facilis fugiat officia officiis
                    quaerat
                    quam quo repellat!
                </p>
            </div>
            <div class="mt-10 mb-80 md:ml-14 ml-0">
                <a href="" class="text-yellow-500 md:text-2xl text-xl hover:text-yellow-400">
                    PROJECTS ->
                </a>
            </div>
        </div>

        {{--we offer--}}
        <div id="offers" class="flex flex-wrap justify-center md:mt-32 mt-10">
            <div class="w-full text-start md:mx-16 mx-0">
                <h1 class="text-white text-4xl tracking-wide mb-32">
                    All about IoT Maker
                </h1>
            </div>
            {{--todo center them up and flip the middle image--}}
            <div class="flex flex-col justify-center w-full m-4">
                <div class="flex md:flex-row flex-col-reverse justify-around md:mx-4 mx-0">

                    <div class="flex flex-col md:w-7/12 w-full md:mt-0 mt-6">
                        <h1 class="text-white text-4xl">
                            Vision
                        </h1>
                        <p class="text-xl text-gray-300 mt-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque dicta fugiat harum neque
                            nesciunt nobis quasi quod reprehenderit sit. Consectetur distinctio ducimus eligendi placeat
                            quae qui saepe velit voluptatum!
                            Consectetur distinctio ducimus eligendi placeat
                            quae qui saepe velit voluptatum!f
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque dicta fugiat harum neque
                            nesciunt nobis quasi quod reprehenderit sit. Consectetur distinctio ducimus eligendi placeat
                            quae qui saepe velit voluptatum!
                            Consectetur distinctio ducimus eligendi placeat
                            quae qui saepe velit voluptatum!f
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque dicta fugiat harum neque
                            nesciunt nobis quasi quod reprehenderit sit. Consectetur distinctio ducimus eligendi placeat
                            quae qui saepe velit voluptatum!
                            Consectetur distinctio ducimus eligendi placeat
                            quae qui saepe velit voluptatum!f
                        </p>
                    </div>

                    <div class="md:w-3/12 w:10/12 flex justify-center">
                        <img src="coworking.png" alt="">
                    </div>

                </div>


            </div>
        </div>

        {{--space--}}
        <div id="space" class="flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide mb-32">
                    Our Space
                </h1>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 justify-items-center">
                <div class="bg-black rounded p-6 flex flex-col justify-center md:w-10/12 w-full">
                    <img class="m-2 w-8/12" src="bigspace%20copy.png" alt="">
                    <h1 class="text-white text-2xl">
                        Maker Space
                    </h1>
                    <p class="text-gray-300 text-sm">
                        Lorem ipsum dolorgr sit amet, consectetur adipisicing elit. Aliquid asperiores blanditiis
                        dignissimos, dolore doloremque earum eius fugit nam officia quas quis quisquam repellat
                        repudiandae unde ut vel veritatis vero voluptates.

                    </p>
                </div>
                <div class="bg-black rounded p-6 flex flex-col justify-items-center md:w-10/12 w-full">
                    <img class="m-2 w-6/12" src="makerspace.png" alt="">
                    <h1 class="text-white text-2xl">
                        Maker Space
                    </h1>
                    <p class="text-gray-300 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores blanditiis
                        dignissimos, dolore doloremque earum eius fugit nam officia quas quis quisquam repellat
                        repudiandae unde ut vel veritatis vero voluptates.

                    </p>
                </div>
            </div>

        </div>

        {{--partners--}}
        <div id="partners" class="flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide mb-32">
                    Our Partners
                </h1>
            </div>
            <div class="flex justify-center w-full bg-black">
                {{--partner--}}
                <div class="flex justify-between md:py-8 md:px-12 py-3 px-4 text-white md:w-8/12 w-12/12">
                    <div class="md:w-2/12 w-4/12 mx-4">
                        <img src="mosulspace.png" alt="">
                    </div>
                    <div class="md:w-3/12 w-6/12">
                        <img src="fieldready.png" alt="">
                    </div>
                    <div class="md:w-2/12 w-4/12 mx-4">
                        <img src="sciencecamp.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{--activities--}}
        <div id="activities" class="flex flex-wrap justify-center w-full mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide mb-32">
                    What we've been up to
                </h1>
            </div>

            <div class="flex flex-col md:w-10/12 w-full m-4">

                <img class="md:w-9/12 w-full self-center md:-ml-52 -ml-0" src="makercamp.png" alt="">

                <div class="md:w-10/12 w-full p-4 bg-black md:-mt-20 -mt-10 md:ml-72 ml-0 opacity-90 rounded self-center">
                    <h1 class="text-white md:text-4xl text-xl">
                        Maker Camp
                    </h1>
                    <h1 class="text-white text-gray-300 md:text-xl text-lg mt-2">
                        2019-2
                    </h1>
                    <p class="text-gray-300 mt-4 text-sm md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam, commodi
                        consequatur,g
                        deserunt dicta, fugit ipsam laudantium maiores nam necessitatibus nihil nostrum optio
                        pariatur
                        provident recusandae ullam ut veritatis voluptate!
                    </p>
                </div>

            </div>

            <div class="flex flex-col md:w-11/12 w-full m-4">

                <img class="md:w-8/12 w-11/12 self-center md:-mr-80 -ml-0" src="innovationday.png" alt="">

                <div class="md:w-8/12 w-full p-4 bg-black md:-mt-20 -mt-10 md:ml-24 ml-0 opacity-90 rounded">
                    <h1 class="text-white md:text-4xl text-xl">
                        Maker Camp
                    </h1>
                    <h1 class="text-white text-gray-300 md:text-xl text-lg mt-2">
                        2019-2
                    </h1>
                    <p class="text-gray-300 mt-4 text-sm md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam, commodi
                        consequatur,
                        deserunt dicta, fugit ipsam laudantium maiores nam necessitatibus nihil nostrum optio
                        pariaturg
                        provident recusandae ullam ut veritatis voluptate!
                    </p>
                </div>

            </div>

            <div class="flex flex-col md:w-10/12 w-full m-4">

                <img class="md:w-9/12 w-full self-center md:-ml-52 -ml-0" src="makercamp.png" alt="">

                <div class="md:w-10/12 w-full p-4 bg-black md:-mt-20 -mt-10 md:ml-72 ml-0 opacity-90 rounded self-center">
                    <h1 class="text-white md:text-4xl text-xl">
                        Maker Camp
                    </h1>
                    <h1 class="text-white text-gray-300 md:text-xl text-lg mt-2">
                        2019-2
                    </h1>
                    <p class="text-gray-300 mt-4 text-sm md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam, commodi
                        consequatur,g
                        deserunt dicta, fugit ipsam laudantium maiores nam necessitatibus nihil nostrum optio
                        pariatur
                        provident recusandae ullam ut veritatis voluptate!
                    </p>
                </div>

            </div>
        </div>

        {{--team--}}
        <div id="team" class="flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide mb-32">
                    Our Team
                </h1>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-6 justify-items-center w-full bg-black p-4">
                <div class="flex flex-col w-8/12">
                    <img src="test.png" alt="">
                    <h1 class="md:text-3xl text-xl text-white mt-3 text-center">
                        Sara Falah
                    </h1>
                    <h1 class="text-base text-gray-200 mt-1 text-center">
                        Lead Trainer
                    </h1>
                </div>
                <div class="flex flex-col w-8/12">
                    <img src="test.png" alt="">
                    <h1 class="md:text-3xl text-xl text-white mt-3 text-center">
                        Sara Falah
                    </h1>
                    <h1 class="text-base text-gray-200 mt-1 text-center">
                        Lead Trainer
                    </h1>
                </div>
                <div class="flex flex-col w-8/12">
                    <img src="test.png" alt="">
                    <h1 class="md:text-3xl text-xl text-white mt-3 text-center">
                        Sara Falah
                    </h1>
                    <h1 class="text-base text-gray-200 mt-1 text-center">
                        Lead Trainer
                    </h1>
                </div>
            </div>
        </div>

        {{--startups--}}
        <div id="startups" class="flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide mb-32">
                    Our Startup Community
                </h1>
            </div>
            <div class="flex justify-center w-full bg-black">
                <div id="app" class="flex py-4 px-12 text-white">
                    <carousel class="mt-12" autoplay :pagination-color="'#a6a7aa'"
                              :pagination-active-color="'white'" :pagination-size="6"
                              :per-page-custom="[[480, 2], [768, 3], [1024, 4]]">
                        {{--                        todo--}}
                        {{--                       add other startups and make dragon breath whiter--}}
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
                                <img src="startups/drako%20final%20expo.png" alt="">
                            </div>
                        </slide>
                    </carousel>
                </div>
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
            element: ""
        },
        methods: {
            onStart(element) {
                console.log(element.id)
                this.element = element.id

            },
            onDone(element) {
                this.element = ""
            },
        },
    })
    // element.classList.toggle("text-gray-300")

</script>
<script>


</script>

</body>
</html>