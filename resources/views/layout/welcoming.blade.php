<div class="flex w-10/12 flex-col text-white p-3">

    <div v-show="projects == false" class="w-8/12 xl:mt-72 mt-20 xl:mb-32 mb-0 xl:ml-14 ml-0 content-desktop">
        <img src="/images/sloganwhite.png" alt="">
    </div>
    <div :class="showNavbar ? 'mt-10' : 'mt-20' " v-show="projects == false"
         class="xl:mt-72  xl:ml-14 ml-0 content-mobile w-full">
        <img class="mt-14 w-11/12" src="/images/makeyour.png" alt="">
        <img class="mt-2 w-8/12" src="/images/passion.png" alt="">
    </div>

    <div class="xl:-mt-20 -mt-0 xl:ml-14 inline-block text-lg xl:w-6/12">
        <p class="xl:mt-6 mt-10 text-orange rounded inline-block xl:bg-white xl:bg-opacity-10 font-bold xl:px-8 xl:py-2 px-2 py-1">
            IoT Maker is a space for growth and development, you can check out our exclusive trainings right
            <a class="text-orange hover:text-white underline underline-offset-1 underline-orange-500"
               href="https://opportunities.iotmaker.org/">here</a></p>
    </div>


</div>
