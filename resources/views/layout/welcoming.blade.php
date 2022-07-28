<div class="flex w-10/12 flex-col text-white p-3">

    <div v-show="projects == false" class="w-8/12 lg:mt-72 mt-20 lg:mb-32 mb-0 lg:ml-14 ml-0 content-desktop">
        <img src="/images/sloganwhite.png" alt="">
    </div>
    <div :class="showNavbar ? 'mt-10' : 'mt-20' " v-show="projects == false"
         class="lg:mt-72  lg:ml-14 ml-0 content-mobile w-full">
        <img class="mt-14 w-11/12" src="/images/makeyour.png" alt="">
        <img class="mt-2 w-8/12" src="/images/passion.png" alt="">
    </div>

    <div class="lg:-mt-20 -mt-0 lg:ml-14 inline-block w-full text-lg">
        <p class="lg:mt-6 mt-10 text-orange rounded inline-block lg:bg-white lg:bg-opacity-10 font-bold lg:px-8 lg:py-2 px-2 py-1">Check out our exclusive trainings right
            <a class="text-orange hover:text-white underline underline-offset-1 underline-orange-500" href="https://opportunities.iotmaker.org/">here</a></p>
    </div>



</div>
