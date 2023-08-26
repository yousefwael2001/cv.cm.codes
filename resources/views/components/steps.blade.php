@props(['title'  => null , 'description' => null,'num' => null])

<div class=" border border-none  w-80   ">
  <div class="flex justify-center">
   
<div class=" mt-6  border bg-dark-blue border-dark-blue h-20 w-20 rounded-md ">
  <p class=" flex justify-center text-white mt-4 text-4xl"> {{ __($num) }}</p>
</div>
</div>
<p class="flex justify-center mt-3 text-2xl text-gray-600 font-medium" > {{ __($title) }}</p>
<p class=" text-lg text-center text-gray-600  font-light"> {{ __($description) }} </p>
</div>