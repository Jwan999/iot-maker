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
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="icon" href="../../public/newImages/IoTLogo.png">

    <title>IoT Maker</title>

</head>

<body class="max-w-full bg-white dark:bg-black">

<div id="app" v-cloak>

    @yield('content')

</div>
{{--<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>--}}
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@stack('scripts')

<script>
    var vue = new Vue({
        el: '#app',
        data: {
            startups: [],
            isOpen: false,
            projects: false,
            showNavbar: false,
            trainingsCount: 0,
            studentsCount: 0,
            internsCount: 0,
            productsCount: 0,
            startupsCount: 0,
            darkMode: false,
        },
        methods: {
            getNumbers() {
                axios.get('https://iotmaker.makershive.org/api/numbers').then(response => {
                    this.trainingsCount = Math.round(response.data.trainings / 100) * 100
                    this.studentsCount = Math.round(response.data.students / 100) * 100
                    this.internsCount = Math.round(response.data.interns / 10) * 10
                    this.productsCount = Math.round(response.data.products / 10) * 10
                    this.startupsCount = Math.round(response.data.startups / 10) * 10
                    // console.log(response.data)
                })
            },

            getStartups() {
                axios.get('https://iotmaker.makershive.org/api/startups').then(response => {
                    this.startups = response.data
                    // console.log(this.startups)
                })
            },

            toggleNavbar() {
                this.showNavbar = !this.showNavbar
            },
            openContact() {
                this.isOpen = !this.isOpen
            },
            openProjects() {
                this.projects = true
            },
            toggleStartupsBg(){
                if (this.darkMode) {
                    console.log(this.darkMode)
                    document.documentElement.style.setProperty("--bg-gray", "E5E5E5");
                } else if (!this.darkMode) {
                    document.documentElement.style.setProperty("--bg-gray", "000000");
                }
            }


        },
        mounted() {
            this.getStartups();
            this.getNumbers()
        }
    })

</script>
<script>
    const darkMode = document.querySelector(".modeToggle");
    const html = document.querySelector("html");


    function toggleDarkMode() {
        html.classList.toggle("dark")


        // document.timeline.style.setProperty("--bg-color", "#E5E5E5")
        // --bg-color: ;
        /*#000000*/
        // mode ? darkMode.classList.add("modeToggle") : darkMode.classList.remove("modeToggle");

    }

</script>

</body>
</html>
