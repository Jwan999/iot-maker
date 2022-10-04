@extends('index')
@section('content')

    <div class="bg-startups object-cover bg-fixed bg-no-repeat mb-24 pt-4">
        @include('layout.navbar')

        <div class="flex justify-center">
            <div class="text-center text-white my-32 lg:w-6/12 w-10/12">
                <h1 class="text-3xl mb-6 text-orange font-bold">Projects Accomplished
                </h1>

            </div>
        </div>
    </div>


    <div id="projects" class="dark:bg-black grid lg:grid-cols-3 grid-cols-1 gap-10 justify-content-center lg:px-20 px-4"
         :class="darkMode ? 'dark' : ' ' ">

        <div v-for="project in projectsAccomplished">
            <div @click="showProjectOverview(project.name)"
                 class="dark:bg-trueBlack bg-white dark:text-white p-6 rounded shadow-lg w-full">
                <div class="flex flex-wrap items-center space-x-10">
                    <div>
                        <img class="w-[4rem]" :src="'http://iotmaker.makershive.org/storage/'+ project.icon" alt="">
                    </div>
                    <div>
                        <h1 class="font-bold text-lg">
                            @{{ project.name }}
                        </h1>
                    </div>
                </div>
                <div>
                    <hr class="my-6" v-show="openedProjects.includes(project.name)">
                    <p v-show="openedProjects.includes(project.name)"
                       class="text-justify transition-[max-height] duration-500">
                        @{{ project.overview }}
                    </p>
                </div>
            </div>

        </div>


    </div>


    {{--footer--}}
    <div class="flex flex-wrap justify-center bg-orange opacity-90 mt-32">
        <div class="w-full p-4">
            <h1 class="text-white tracking-wide">
                IoT Maker 2020
            </h1>
        </div>
    </div>

@endsection
