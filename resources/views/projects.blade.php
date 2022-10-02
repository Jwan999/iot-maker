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

        <div @click="showProjectOverview(project.name)" v-for="project in projects"
             class="dark:bg-trueBlack bg-white dark:text-white p-6 flex flex-wrap items-center lg:justify-between justify-start rounded shadow-lg space-x-14 w-full">
            <div>
                <img class="w-24" :src="'/storage/'+ project.icon" alt="">
            </div>
            <div>
                <h1 class="font-bold text-lg">
                    @{{ project.name }}
                </h1>
            </div>
            <p v-show="openedProjects.includes(project.name)" class="text-justify transition-[max-height] duration-500">
                @{{ project.overview }}
            </p>

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
