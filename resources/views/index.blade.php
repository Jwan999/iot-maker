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

    </style>
</head>
<body class="bg-shade-black relative overflow-x-hidden max-w-full">

<div id="app" class="flex bg-tools fill-current md:bg-contain bg-no-repeat">
    {{--gear animation--}}
    <div class="absolute top-0 right-0 md:-mr-36 md:-mt-24 md:w-4/12 w-8/12 -mt-10 -mr-20">
        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fm8bpvnl.json" background="transparent"
                       speed="1"
                       loop autoplay></lottie-player>
    </div>
    {{--mobile navbar--}}
    <div class="flex flex-row text-white content-mobile fixed m-2 p-4 bg-black opacity-90 rounded">
        <div class="flex w-full items-center">
            <div class="w-12 mr-4">
                <img src="smalllogo.png" alt="">
            </div>
            <scrollactive class="mobile-nav">
                <a href="#offers" class="text-white mx-3">
                    01
                </a>
                <a href="#space" class="text-white mx-3">
                    02
                </a>
                <a href="#partners" class="text-white mx-3">
                    03
                </a>
                <a href="#activities" class="text-white mx-3">
                    04
                </a>
                <a href="#team" class="text-white mx-3">
                    05
                </a>
                <a href="#startups" class="text-white mx-3">
                    06
                </a>
            </scrollactive>
        </div>

    </div>
    {{--sidebar--}}
    {{-- todo using divide from tailwind--}}
    <div class="flex content-desktop sticky top-0 left-0 justify-center bg-shade-black border-white border-r h-screen w-2/12 p-8">
        <div class="w-full flex justify-center">
            <img class="w-32" src="/IoTLogo.png" alt="">
        </div>
        <div class="flex flex-col justify-center text-center text-gray-500 mt-20">
            {{--todo--}}
            {{--make active states for each section also add the name of the section when clicked--}}
            <scrollactive class="side-menu flex flex-col">
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
            <div class="w-2/12 md:w-3/12 z-10 top-0 left-0 m-4">
                <img src="sidepattern.png" alt="">
            </div>
            <div class="flex flex-col w-full p-4">
                <h1 class="text-white text-xl mb-3">
                    Hello there
                </h1>
                <div>
                    <input class="outline-none placeholder-gray-200 text-lg rounded w-full py-2 px-3 border-blue-200 border mt-3"
                           placeholder="Email Address" type="text">
                    <input class="outline-none placeholder-gray-200 text-lg rounded w-full py-2 px-3 border-blue-200 border mt-3"
                           placeholder="Subject" type="text">
                    <input class="outline-none placeholder-gray-200 text-lg rounded w-full py-2 px-3 border-blue-200 border mt-3 h-32"
                           placeholder="Body" type="text">
                </div>
                <div class="mt-3">

                </div>
            </div>
        </div>
    </transition>
    <div @click="openContact()"
         class="fixed bottom-0 right-0 md:mr-12 mr-4 md:mb-12 mb-6 text-white md:w-2/12 w-4/12 z-10">
        <img src="circle.png" alt="">
    </div>

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
                    <p class="text-gray-300 md:text-lg text-">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        At
                        eveniet
                        illog
                        illum inventore maiores nisi
                        obcaecati officia similique vitae! Corporis distinctio, excepturi facilis fugiat officia
                        officiis
                        quaerat
                        quam quo repellat!
                    </p>
                </div>
                <div class="mt-8 mb-80 md:ml-14 ml-0">
                    <a @click="openProjects" class="text-yellow-500 md:text-2xl text-xl hover:text-yellow-400">
                        CHECK OUT WHAT WE DO ->
                    </a>
                </div>
            </div>
            <div v-show="projects">
                <div class="flex justify-center w-10/12 mt-12 md:ml-14 ml-2 mt-24 mb-32">
                    <carousel autoplay :pagination-color="'#a6a7aa'"
                              :pagination-active-color="'white'" :pagination-size="6"
                              :per-page-custom="[[480, 1], [768, 1], [1024, 3]]" :navigation-enabled="true">
                        <slide>
                            <div class="rounded p-4 bg-black opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 bg-black opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 bg-black opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 bg-black opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl">
                                    title
                                </h1>
                            </div>
                        </slide>
                        <slide>
                            <div class="rounded p-4 bg-black opacity-70 mx-2">
                                <img src="bicycle_PNG5374.png" alt="">
                                <h1 class="text-xl">
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
                    All about IoT Maker
                </h1>
            </div>
            {{--todo center them up and flip the middle image--}}
            <div class="flex flex-col justify-center w-full md:m-4 m-0">
                <div class="flex md:flex-row flex-col-reverse justify-around md:mx-4 mx-0">

                    <div class="flex flex-col md:w-7/12 w-full md:mt-0 mt-6">
                        <h1 class="text-white text-4xl">
                            Vision
                        </h1>
                        <p class="text-xl text-gray-300 mt-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque dicta fugiat harum
                            neque
                            nesciunt nobis quasi quod reprehenderit sit. Consectetur distinctio ducimus eligendi
                            placeat
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
                            It is not just a place to gather but its an opportunity to explore, learnand how to use
                            materials as well as develop creative projects.
                            Imagine DIY meets education! Makerspace is a place where you can launch your creativity
                            and satisfy your eagerness to learn and be aware of useing Machines to create
                            prototypes.
                        </p>
                    </div>

                    <div class="md:w-3/12 w:10/12 flex justify-center">
                        <img src="learn.png" alt="">
                    </div>

                </div>
                <div class="flex md:flex-row flex-col-reverse justify-around md:mx-4 mx-0 mt-10">

                    <div class="flex flex-col md:w-7/12 w-full md:mt-0 mt-6">
                        <h1 class="text-white text-4xl">
                            Vision
                        </h1>
                        <p class="text-xl text-gray-300 mt-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque dicta fugiat harum
                            neque
                            nesciunt nobis quasi quod reprehenderit sit. Consectetur distinctio ducimus eligendi
                            placeat
                            quae qui saepe velit voluptatum!
                            Consectetur distinctio ducimus eligendi placeat
                            quae qui saepe velit voluptatum!gg
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
                        Maker Space
                    </h1>
                    <p class="text-gray-300 text-sm">
                        Lorem ipsum dolorgr sit amet, consectetur adipisicing elit. Aliquid asperiores blanditiis
                        dignissimos, dolore doloremque earum eius fugit nam officia quas quis quisquam repellat
                        repudiandae unde ut vel veritatis vero voluptates.
                    </p>
                </div>
                <div class="bg-black rounded p-6 flex flex-col justify-items-center md:w-10/12 w-full">
                    <img class="m-2 md:w-6/12 w-full self-center" src="makerspace.png" alt="">
                    <h1 class="text-white text-2xl mt-3">
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

        <div id="partners" class="scrollspy partners flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
                    Our Partners
                </h1>
            </div>
            <div class="flex justify-center w-full bg-black">
                {{--partner--}}
                <div class="flex justify-between md:py-8 md:px-12 py-3 px-4 text-white md:w-6/12 w-full">
                    <div class="md:w-2/12 w-5/12 mx-4">
                        <img src="mosulspace.png" alt="">
                    </div>
                    <div class="md:w-3/12 w-6/12">
                        <img src="fieldready.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{--activities--}}

        <div id="activities" class="scrollspy activities flex flex-wrap justify-center w-full mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
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

                <img class="md:w-9/12 w-full self-center md:-ml-52 -ml-0" src="3dcompetition.png" alt="">

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

        <div id="team" class="scrollspy team flex flex-wrap justify-center mt-32">
            <div class="w-full text-center">
                <h1 class="text-white text-4xl tracking-wide md:mb-32 mb-24">
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

        <div id="team" class="scrollspy startups flex flex-wrap justify-center mt-32">
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

        {{--footer--}}

        <div id="team" class="flex flex-wrap justify-center bgbyellow opacity-90 mt-32">
            <div class="w-full p-4">
                <h1 class="text-white tracking-wide">
                    hello
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
            activeSection: null,
            isOpen: false,
            projects: false
        },
        methods: {
            activeOptions() {
                if (this.activeSection) {
                    console.log(this.activeSection)
                    this.$refs[this.activeSection].classList.toggle('text-white')
                }
                console.log(this.$refs[this.activeSection])
            },
            openContact() {
                this.isOpen = !this.isOpen
            },
            openProjects() {
                this.projects = true
            }
        },
        mounted() {
            this.activeOptions()
            // if (window.scrollY > 5000) this.$refs["06"].classList.add('text-white')

        },
    })
    // element.classList.toggle("text-gray-300")

</script>


</body>
</html>