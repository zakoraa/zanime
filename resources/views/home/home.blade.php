@extends('layouts.app')

@section('content')

@include('components.navbar')

<div class="bg-[#101820]">
    <section id="header">
        <div class="min-h-screen w-full relative text-white">
            <img class="w-full min-h-screen object-cover" src="{{ asset('storage/jujutsu.gif') }}" alt="jujutsu" />
            <div class="absolute top-0 left-0 w-full h-full bg-[#0000006c] font-extrabold  flex-col flex justify-center items-center lg:items-start px-10 lg:px-20">
                <div class="text-4xl text-center lg:text-7xl mb-10 lg:mb-10" data-aos="fade-up" data-aos-duration="3000">
                    Explore Your World
                </div>
                <div class="text-4xl text-center lg:text-7xl mb-10 lg:mb-10" data-aos="fade-up" data-aos-duration="3000">
                    Find Your Favorite Anime
                </div>
                <div class="text-4xl text-center lg:text-7xl" data-aos="fade-up" data-aos-duration="3000">
                    Enjoy Your Life
                </div>
            </div>
        </div>
    </section>


    <section id="trending">
        <div class="bg-[#101820] w-full text-white text-center ">
            <div class="p-20 text-5xl font-extrabold" data-aos="fade-up" data-aos-duration="1000">
                <div class="mb-5">Top 3 </div>
                <div class="mb-5">Most Popular</div>
                <div class=" mb-16">Anime Openings</div>
            </div>

            <div class="bg-white mt-16 overflow-visible" style="border-top-left-radius: 100px; border-top-right-radius: 100px;" data-aos="fade-up" data-aos-duration="1000">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 p-4 ">

                    @for ($i = 0; $i < count($videos) && $i < 3; $i++) <div class="max-w-sm bg-white border rounded-3xl shadow dark:bg-gray-800 relative mx-auto" style="top: -130px; height: 510px;">
                        <div class="object-cover" style="height: 250px;">
                            <img class="rounded-t-3xl h-full w-full object-cover" src="{{$videos[$i]['thumbnail']}}" />
                        </div>
                        <div class="p-5">
                            <h5 class="mb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$videos[$i]['anime']}} - {{$videos[$i]['title']}}</h5>
                            <a href="{{ url('watch', $videos[$i]['id']) }}" class="inline-flex items-center justify-center absolute bottom-0 left-1/2 transform -translate-x-1/2 px-4 py-3 mb-10 text-sm font-medium text-white bg-[#0869D4] rounded-3xl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-800 hover:translate-y-[-5px] transition duration-300 ease-in-out hover:bg-blue-800">
                                Watch Opening
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                </div>
                @endfor

            </div>
        </div>
</div>
</section>

<section id="swiper">
    <div class="w-full flex justify-start items-center flex-col">
        <div class="relative flex justify-start items-start">
            <img class="w-screen h-auto -translate-y-24" src="{{ asset('storage/anime.jpg') }}" alt="foryou" style="border-bottom-left-radius: 100px; border-bottom-right-radius: 100px;">
            <div class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t to-[#101820] from-transparent flex justify-center items-center -top-24" style="border-bottom-left-radius: 100px; border-bottom-right-radius: 100px;">
                <p class="text-white text-7xl font-extrabold mb-16 " data-aos="fade-up" data-aos-duration="1000">For You</p>
            </div>
        </div>
    </div>
    <div class="swiper w-full absolute -top-72" data-aos="fade-up" data-aos-duration="1000">
        <div class="swiper-wrapper h-screen">
            @foreach($videos->shuffle() as $item)
            <div class="swiper-slide relative">
                <a href="{{ url('watch', $item['id']) }}" class="relative block hover:scale-105 transition-transform duration-300 transform">
                    <img class="rounded-3xl h-72 object-cover w-full" src="{{$item['thumbnail']}}" />
                    <div class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-[#101820b7] to-transparent">
                    </div>
                    <h1 class="absolute inset-x-0 bottom-0 h-full flex items-end text-center justify-center text-white text-xl font-bold pb-8 px-5">{{$item['anime']}} - {{$item['title']}}</h1>
                </a>

            </div>
            @endforeach
        </div>
        <div class="swiper-button-prev bg-white p-6 rounded-full"></div>
        <div class="swiper-button-next bg-white p-6 rounded-full"></div>
    </div>
    </div>
</section>
</div>


@endsection