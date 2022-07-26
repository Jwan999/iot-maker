@extends('index')
@section('content')

    <div class="flex justify-center w-full flex-col bg-startups object-cover bg-center bg-no-repeat lg:p-0">
        {{--navbar--}}
        @include('layout.navbar')

        <div id="startup">
            <div class="flex justify-center">
                <div class="text-center text-white my-14 lg:w-6/12 w-10/12">
                    <h1 class="text-3xl mb-6 text-orange"> IoT Maker Start-ups Community</h1>
                    <p class="text-gray-300 text-lg text-center">Since we've opened our space, we've
                        welcomed twenty-two startups
                        Those startups are making a positive impact on the Iraqi community. Likewise, we are looking for
                        ways to help them.
                        <br>
                        Take your time getting to know them
                    </p>
                </div>
            </div>

            <div class="container">
                <div id="timeline">

                    <div v-for="(startup,index) in startups" class="timeline-item">
                        <div class="timeline-icon p-2 object-center object-cover">
                            {{--<h2 class="font-bold">@{{startup.name}}</h2>--}}
                        </div>
                        <div class="timeline-content" :class="index % 2 == 0 ? 'right' : ''">
                            <div class="w-full flex justify-center">
                                <img class="h-28 object-scale-down my-4"
                                     :class="startup.id == 13 || startup.id == 19 || startup.id == 6 || startup.id == 5 ? 'py-6' : 'py-0'"
                                     :src="'http://iotmaker.makershive.org/storage/'+startup.logo" alt="">
                            </div>


                            <p class="mt-4 text-justify">
                                @{{startup.idea}}
                            </p>
                            {{--social media--}}
                            <div class="flex space-x-3 mt-4">
                                <a :href="startup.insta" target=”_blank”>
                                    <svg class="w-6 h-6" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                        <g fill-rule="evenodd">
                                            <path
                                                d="m48 64h-32a16.0007 16.0007 0 0 1 -16-16v-32a16.0007 16.0007 0 0 1 16-16h32a16 16 0 0 1 16 16v32a16 16 0 0 1 -16 16"
                                                fill="#ff3a55"/>
                                            <path
                                                d="m30 18h18a9.0006 9.0006 0 0 0 .92-17.954c-.306-.017-.609-.046-.92-.046h-32a16.0007 16.0007 0 0 0 -16 16v32a30.0007 30.0007 0 0 1 30-30"
                                                fill="#ff796c"/>
                                            <path d="m48 32a16 16 0 1 0 16 16v-32a16 16 0 0 1 -16 16" fill="#e00047"/>
                                        </g>
                                        <circle cx="44.5" cy="19.5" fill="#fff" r="2.5"/>
                                        <path
                                            d="m32 24a8 8 0 1 1 -8 8 8.0042 8.0042 0 0 1 8-8zm0-4a12 12 0 1 1 -12 12 12.0057 12.0057 0 0 1 12-12z"
                                            fill="#fff" fill-rule="evenodd"/>
                                        <path
                                            d="m52 22a10 10 0 0 0 -10-10h-20a10 10 0 0 0 -10 10v20a10 10 0 0 0 10 10h20a10 10 0 0 0 10-10zm4 0a14 14 0 0 0 -14-14h-20a14 14 0 0 0 -14 14v20a14 14 0 0 0 14 14h20a14 14 0 0 0 14-14z"
                                            fill="#fff" fill-rule="evenodd"/>
                                    </svg>
                                </a>

                                <a :href="startup.facebook" target=”_blank”>
                                    <svg class="h-6 w-6" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                        <g fill-rule="evenodd">
                                            <path
                                                d="m32 64h-16a16.0007 16.0007 0 0 1 -16-16v-32a16.0007 16.0007 0 0 1 16-16h32a16 16 0 0 1 16 16v32a16 16 0 0 1 -16 16h-6a5 5 0 0 0 -10 0z"
                                                fill="#3764b9"/>
                                            <path
                                                d="m30 18h18a9.0006 9.0006 0 0 0 .92-17.954c-.306-.017-.609-.046-.92-.046h-32a16.0007 16.0007 0 0 0 -16 16v32a30.0007 30.0007 0 0 1 30-30"
                                                fill="#507dd2"/>
                                            <path d="m48 32a16 16 0 1 0 16 16v-32a16 16 0 0 1 -16 16" fill="#1e4ba0"/>
                                            <path
                                                d="m52 18a2 2 0 0 1 -2 2h-6a2 2 0 0 0 -2 2v8h7.56a2 2 0 0 1 1.9612 2.392c-.3713 1.857-.8757 4.379-1.2 6a2 2 0 0 1 -1.9612 1.608h-6.36v24h-10v-24h-6a2 2 0 0 1 -2-2v-6a2 2 0 0 1 2-2h6v-8a12 12 0 0 1 12-12h6a2 2 0 0 1 2 2z"
                                                fill="#fff"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            {{--    <div class="w-full text-center">--}}
            {{--        <h1 class="text-white text-4xl tracking-wide lg:mb-32 mb-24">--}}
            {{--            Our Startup Community--}}
            {{--        </h1>--}}
            {{--    </div>--}}

            {{--    <div class="bg-white my-10 w-full overflow-x-hidden px-20 py-10">--}}
            {{--        <div class="w-full scroll-bar flex space-x-24 items-center">--}}

            {{--            <img class="first w-32 self-center" src="startups/artna.png?image=1" alt="">--}}
            {{--            <img class="w-48 self-center" src="startups/asdikaee.png?image=2" alt="">--}}
            {{--            <img class="w-48 self-center" src="startups/dash&dot.png?image=3" alt="">--}}
            {{--            <img class="w-16 self-center" src="startups/dhalma.png?image=4" alt="">--}}
            {{--            <img class="w-24 self-center" src="startups/faya.png?image=5" alt="">--}}
            {{--            <img class="w-24 self-center" src="startups/influencers.png?image=6" alt="">--}}
            {{--            <img class="w-32 self-center" src="startups/iotlab.png?image=7" alt="">--}}
            {{--            <img class="w-48 self-center" src="startups/iraq3d.png?image=8" alt="">--}}
            {{--            <img class="w-32 self-center" src="startups/LAMMA.png?image=9" alt="">--}}
            {{--            <img class="w-24 self-center" src="startups/isin.png?image=10" alt="">--}}
            {{--            <img class="w-48 self-center" src="startups/makerchi.png?image=11" alt="">--}}
            {{--            <img class="w-32 self-center" src="startups/online.png?image=12" alt="">--}}
            {{--            <img class="w-48 self-center" src="startups/project1.png?image=13" alt="">--}}
            {{--            <img class="w-48 self-center" src="startups/simple.png?image=14" alt="">--}}
            {{--            <img class="w-44 self-center" src="startups/vada.png?image=15" alt="">--}}

            {{--        </div>--}}
            {{--    </div>--}}

        </div>

        <div class="flex flex-wrap justify-center bgbyellow opacity-90">
            <div class="w-full p-4">
                <h1 class="text-white tracking-wide">
                    IoT Maker 2020
                </h1>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{--    <script>--}}
    {{--        var vue = new Vue({--}}
    {{--            el: '#startups',--}}
    {{--            data: {--}}
    {{--                startups: [],--}}
    {{--            },--}}
    {{--            methods: {--}}
    {{--                getStartups() {--}}
    {{--                    axios.get('http://iotmaker.makershive.org/api/startups').then(response => {--}}
    {{--                        this.startups = response.data--}}
    {{--                        console.log(this.startups)--}}
    {{--                    })--}}
    {{--                }--}}
    {{--            },--}}
    {{--            mounted() {--}}
    {{--                this.getStartups()--}}
    {{--            }--}}
    {{--        })--}}
    {{--    </script>--}}

@endpush


