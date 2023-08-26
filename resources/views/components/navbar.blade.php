<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title>Document</title>
</head>
<body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="bg-gradient-to-r from-grayish/80 via-soft-blue/80 to-desaturated-blue/80">
    <div x-data="{nav: false}">
        <div class="flex justify-between mx-auto w-10/12 mt-2">
            <img src="/img/logo.png" class="w-52 h-16 z-10">

            <ul class=" hidden text-dark-blue text-2xl lg:flex gap-10 mt-5 font-bold">
                <li class="hover:border-b-desaturated-blue hover:border-b-4 pb-0"><a href="/">{{__('Home')}}</a></li>
                <li class="hover:border-b-desaturated-blue hover:border-b-4 pb-0"><a href="template">{{__('Templates')}}</a></li>
                <li class="hover:border-b-desaturated-blue hover:border-b-4 pb-0"><a href="createCV">{{__('Create CV')}}</a></li>
                <li class="hover:border-b-desaturated-blue hover:border-b-4 pb-0"><a href="blog">{{__('Blog')}}</a></li>
               
                
            </ul>

            <div class="flex gap-4 z-10">
                <a href="{{route("setLocale")}}" class="mt-4 font-bold" title="{{ __('Change Language') }}">
                    @if (app()->getLocale() == 'ar')
                        <h5 class="text-dark-blue transition duration-300 text-2xl ease-in-out delay-150  hover:transition-all hover:-translate-x-1 hover:scale-110 ">English</h5>
                    @else
                        <h5 class="text-dark-blue transition duration-300 text-2xl  ease-in-out delay-150  hover:transition-all hover:-translate-x-1 hover:scale-110 ">العربية</h5>
                    @endif 
                </a>

             
                <div class="lg:hidden mt-3">
                    <input @click="nav = !nav" id="checkbox2" type="checkbox">
                    <label class="toggle toggle2" for="checkbox2">
                        <div id="bar4" class="bars"></div>
                        <div id="bar5" class="bars"></div>
                        <div id="bar6" class="bars"></div>
                    </label>
                </div>
            </div>
        </div>

        <ul x-show="nav" class="bg-grayish text-dark-blue text-2xl font-bold top-0 end-4 md:end-0 absolute pt-20 w-11/12 md:w-1/3 py-6 px-10 rounded-lg">
            <li class="my-2"><a href="/">{{__('Home')}}</a></li>
            <li class="my-2"><a href="template">{{__('Templates')}}</a></li>
            <li class="my-2"><a href="createCV">{{__('Create CV')}}</a></li>
            <li class="my-2"><a href="blog">{{__(' Blog')}}</a></li>
            <li class="hover:border-b-desaturated-blue hover:border-b-4 pb-0"><a href="/login">{{__('Login')}}</a></li>
            <li class="hover:border-b-desaturated-blue hover:border-b-4 pb-0"><a href="/register">{{__('Register')}}</a></li>
        </ul>
    </div>
