@props(['title'  => null , 'description' => null,'image' => null])
<div class=" px-14">
<div  class=" text-dark-blue text-lg md:text-3xl   ">
        <img src="{{ $image }}" class=" inline-block w-16   " alt="">
        {{ __($title) }}
         <p class="lg:space-y-0 space-y-0   text-gray-600/80 text-lg xl:w-96 md:mx-20 ">{{ __($description) }}</p>

</div>

</div>