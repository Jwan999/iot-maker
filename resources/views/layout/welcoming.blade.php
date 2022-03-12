<div class="flex w-10/12 flex-col text-white p-3">

    <div v-show="projects == false" class="w-8/12 lg:mt-72 mt-20 lg:mb-32 mb-0 lg:ml-14 ml-0 content-desktop">
        <img src="sloganwhite.png" alt="">
    </div>
    <div :class="showNavbar ? 'mt-10' : 'mt-20' " v-show="projects == false"
         class="lg:mt-72  lg:ml-14 ml-0 content-mobile w-full">
        <img class="mt-14 w-10/12" src="makeyour.png" alt="">
        <img class="mt-2 w-7/12" src="passion.png" alt="">
    </div>


    {{--    <div class="flex mt-8 lg:ml-14 ml-0">--}}
    {{--        --}}{{--                    @click="openProjects"--}}
    {{--        <a class="text-yellow-500 lg:text-2xl text-xl">--}}
    {{--            CHECK OUT WHAT WE DO--}}
    {{--        </a>--}}
    {{--        <svg class="fill-current text-yellow-500 hover:text-yellow-400 w-9 h-9"--}}
    {{--             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">--}}
    {{--            <path--}}
    {{--                d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>--}}
    {{--        </svg>--}}

    {{--    </div>--}}

</div>
