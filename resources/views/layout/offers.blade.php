{{--new look--}}
<div :class="showNavbar ? 'mt-24': 'mt-80'" id="offers" class="grid lg:grid-cols-2 grid-cols-1 gap-20 lg:px-20 px-2" :class="darkMode ? 'dark' : ' ' ">
    <div class="p-10 dark:bg-trueBlack bg-white shadow-lg rounded">
        <h1 class="text-5xl font-bold text-orange font-bold text-center">@{{studentsCount}}+</h1>
        <h1 class="dark:text-white text-trueBlack text-xl text-center">
            Students trained
        </h1>

        <p class="text-lg dark:text-gray-200 text-gray-700 mt-6 text-justify">
            We are working to target Iraqi youth, help them face the problem of lack of skills, with this
            much of interested student in different departments, we offered them different training, course and even
            internships to qualify them to the Labor market. Our main goal was to develop their skills and change
            the perceived general view/vision of labor market in Iraq.
        </p>
    </div>
    <div class="p-10 dark:bg-trueBlack bg-white shadow-lg rounded">
        <h1 class="text-5xl font-bold text-orange font-bold text-center">@{{trainingsCount}}+</h1>
        <h1 class="dark:text-white text-trueBlack text-xl text-center">
            Trainings held
        </h1>


        <p class="text-lg dark:text-gray-200 text-gray-700 mt-6 text-justify">
            With the help of a group consisted of talented and motivated trainers we provide a wide
            variety
            of technical courses and
            mentorships which made our vision of expanding the community of 3D modeling, design
            manufacturing, cinema 4D, electronics,
            robotics, Ai and web development come to live.
        </p>
    </div>
    <div class="p-10 dark:bg-trueBlack bg-white shadow-lg rounded">
        <h1 class="text-5xl font-bold text-orange font-bold text-center">@{{productsCount}}+</h1>
        <h1 class="dark:text-white text-trueBlack text-xl text-center">
            Products made
        </h1>

        <p class="text-lg dark:text-gray-200 text-gray-700 mt-6 text-justify">We are here to share the passion of creating with you, you
            can learn how to use materials as well as build cool projects. Imagine DIY meets education! Maker Space is a
            place where you can launch your creativity and satisfy your eagerness to learn and use machines to create
            prototypes.
        </p>
    </div>
    <div class="p-10 dark:bg-trueBlack bg-white shadow-lg rounded">
        <h1 class="text-5xl font-bold text-orange font-bold text-center">@{{startupsCount}}+</h1>
        <h1 class="dark:text-white text-trueBlack text-xl text-center">
            Startups supported
        </h1>

        <p class="text-lg dark:text-gray-200 text-gray-700 mt-6 text-justify">Our co-working space is a true representation of a
            collaborative environment where people can get comfortable with innovation. Our friendly space allows you to
            get things done creatively and proudly meet your goals.
        </p>
    </div>

</div>

