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
    <link rel="icon" href="IoTLogo.png">

    <title>IoT Maker</title>
    <style>

        header:after, #timeline .timeline-item:after, header:before, #timeline .timeline-item:before {
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }

        *, *:before, *:after {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }


        img {
            max-width: 100%;
        }

        a {
            text-decoration: none;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }


        .project-name {
            text-align: center;
            padding: 10px 0;
        }

        header {
            background: #2b2e48;
            padding: 10px;
            -webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
            -ms-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.05);
        }

        header .logo {
            color: #F39E19;
            float: left;
            /*font-size: 22px;*/
            /*font-weight: 500;*/
        }

        header .logo > span {
            color: #f7aaaa;
            /*font-weight: 300;*/
        }

        header .social {
            float: right;
        }

        header .social .btn {
            /*font-size: 14px;*/
            margin: 10px 5px;
        }

        #timeline {
            width: 100%;
            margin: 30px auto;
            position: relative;
            padding: 0 10px;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        #timeline:before {
            content: "";
            width: 3px;
            height: 100%;
            background: #F39E19;
            left: 50%;
            top: 0;
            position: absolute;
        }

        #timeline:after {
            content: "";
            clear: both;
            display: table;
            width: 100%;
        }

        #timeline .timeline-item {
            margin-bottom: 50px;
            position: relative;
        }

        #timeline .timeline-item .timeline-icon {
            background: #F9A300;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 0;
            left: 50%;
            overflow: hidden;
            margin-left: -18px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 100%;
        }

        #timeline .timeline-item .timeline-icon svg {
            position: relative;
            top: 14px;
            left: 14px;
        }

        #timeline .timeline-item .timeline-content {
            width: 45%;
            background: #fff;
            padding: 20px;
            -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #timeline .timeline-item .timeline-content h2 {
            /*padding: 15px;*/
            background: white;
            color: #000;
            /*margin: -20px -20px 0 -20px;*/
            -webkit-border-radius: 3px 3px 0 0;
            -moz-border-radius: 3px 3px 0 0;
            -ms-border-radius: 3px 3px 0 0;
            border-radius: 3px 3px 0 0;
        }

        #timeline .timeline-item .timeline-content:before {
            content: "";
            position: absolute;
            left: 45%;
            top: 20px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 7px solid white;
        }

        #timeline .timeline-item .timeline-content.right {
            float: right;
        }

        #timeline .timeline-item .timeline-content.right:before {
            content: "";
            right: 45%;
            left: inherit;
            border-left: 0;
            border-right: 7px solid white;
        }


        @media screen and (max-width: 768px) {
            #timeline {
                margin: 30px;
                padding: 0px;
                width: 90%;
            }

            #timeline:before {
                left: 0;
            }

            #timeline .timeline-item .timeline-content {
                width: 90%;
                float: right;
            }

            #timeline .timeline-item .timeline-content:before, #timeline .timeline-item .timeline-content.right:before {
                left: 10%;
                margin-left: -6px;
                border-left: 0;
                border-right: 7px solid white;
            }

            #timeline .timeline-item .timeline-icon {
                left: 0;
            }

        }

    </style>
</head>
<body class="bg-shade-black max-w-full">

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
        },
        methods: {
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
        },
        mounted() {
            this.getStartups()
        }
    })

</script>

</body>
</html>
