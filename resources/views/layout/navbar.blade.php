<div
    class="flex z-10 lg:flex-row flex-col justify-between my-4 lg:mx-4 mx-2 py-6 px-4 rounded bg-white bg-opacity-10 text-gray-300">
    <div class="flex items-center justify-between text-white">
        <a href="/" class=" text-white font-bold text-xl">
            IoT Maker
        </a>
        <div @click="toggleNavbar()" class="lg:hidden flex">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="fill-current text-white h-7 w-7">
                <path
                    d="M21 7.75H3C2.59 7.75 2.25 7.41 2.25 7C2.25 6.59 2.59 6.25 3 6.25H21C21.41 6.25 21.75 6.59 21.75 7C21.75 7.41 21.41 7.75 21 7.75Z"></path>
                <path
                    d="M21 12.75H3C2.59 12.75 2.25 12.41 2.25 12C2.25 11.59 2.59 11.25 3 11.25H21C21.41 11.25 21.75 11.59 21.75 12C21.75 12.41 21.41 12.75 21 12.75Z"></path>
                <path
                    d="M21 17.75H3C2.59 17.75 2.25 17.41 2.25 17C2.25 16.59 2.59 16.25 3 16.25H21C21.41 16.25 21.75 16.59 21.75 17C21.75 17.41 21.41 17.75 21 17.75Z"></path>
            </svg>
        </div>
    </div>
    <div :class="showNavbar ? '' :'lg:flex hidden'" class="flex flex-wrap items-center lg:mt-0 mt-6">
        <scrollactive class="flex flex-wrap items-center lg:space-y-0 space-y-6 lg:space-x-6 space-x-0"
                      active-class="active" :offset="200"
                      :duration="800"
                      bezier-easing-value=".5,0,.35,1">
            {{--            <a href="#offers"--}}
            {{--               class="scrollactive-item text-lg w-full lg:w-auto hover:text-white hover:shadow-2xl">Our--}}
            {{--                Projects</a>--}}
            <a href="#offers"
               class="scrollactive-item text-lg w-full lg:w-auto hover:text-white hover:shadow-2xl">What We
                Offer</a>
            <a href="#space"
               class="scrollactive-item text-lg w-full lg:w-auto hover:text-white hover:shadow-2xl">
                Space</a>
            <a href="#partners"
               class="scrollactive-item text-lg w-full lg:w-auto hover:text-white hover:shadow-2xl">
                Partners</a>
            <a href="#activities"
               class="scrollactive-item text-lg w-full lg:w-auto hover:text-white hover:shadow-2xl">
                Activities</a>
            <a href="https://iotmaker.org/#team"
               class="scrollactive-item text-lg w-full lg:w-auto hover:text-white hover:shadow-2xl">Team</a>

        </scrollactive>

        <a href="/community"
           class="scrollactive-item text-lg w-full lg:w-auto hover:text-white hover:shadow-2xl lg:ml-6 ml-0 lg:mt-0 mt-6">
            Community</a>
    </div>

</div>
