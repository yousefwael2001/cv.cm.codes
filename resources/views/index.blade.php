


<x-navbar/>


<div >


<div class=" ">
<div class="sm:flex-row lg:grid lg:grid-cols-2 grid grid-cols-1   justify-around items-center  md:px-0 px-1  ">




<div class="">
<div class="  mx-12  mt-6  xl:mt-40">
<h1 class=" xl:text-7xl text-3xl md:text-4xl text-dark-blue font-semibold "> <span class=" text-yellow-300"> CV CREATOR </span> {{__('to Create a')}}  <span> <br> {{__('Perfect CV')}}</span> </h1>
<P class=" border mt-4  text-gray-600  font-light border-none text-3xl ">{{__('Create your CV online with our CV maker in just a few minutes. Learn the best way to make a CV specific to your industry and that get you your dream job.')}}
</P>
<P class=" border  mt-4 text-gray-600  font-light border-none text-3xl ">{{__('Visit  CV creator now and choose your CV for free, you can see CV templates and customise them in minutes. Its your CV - but better!')}}
</P>

<a href="createCV">
<button class=" xl:mt-16  text-lg px-16  py-3 mb-3 m-auto mt-4  bg-dark-blue   rounded-lg shadow-md  text-white">
  {{__('Create your CV')}}
</button>
</a>



<div class="flex-shrink-0 flex-grow-0">
                            <div class="flex  justify-center     ">
                            <div  class="relative    justify-center  xl:hidden border   border-cyan-600  bg-dark-blue w-96   h-96 md:h-[550px]     mt-24  ">
                              <img  src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" class="        absolute   border    mx-9       mt-14  "   alt="">
                      </div>
                      </div>
                            </div>
</div>
</div>


<div class="flex-shrink-0 flex-grow-0">
                            <div class="flex  justify-center  lg:justify-end   ">
                            <div  class="relative   justify-items-end  hidden xl:block border   border-cyan-600  bg-dark-blue w-96 h-[540px]  mx-36   mt-24  ">
                              <img  src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" class="        absolute   border    mx-9        mt-14  "   alt="">
                      </div>
                      </div>
                            </div>

</div>


<div class="  mt-24   ">

  <p class="    xl:mt-14   font-semibold text-4xl  md:text-7xl text-center text-white ">{{__('Distinguish with us')}}</p>
  <div class=" flex justify-center">
  <div class="   sm:mx-10 inline-block lg:grid lg:grid-cols-2 " >
    <div  class="  ">
      <ul class="lg:space-y-16 space-y-8     text-fourth/70  font-bold     lg:mt-28   mt-9  ">
      <x-DisUS  title="Speed of getting a job." description="Using our templates to create your CV helps you increase your job placement rate by 80%."  image="https://www.cvmaker.com/assets/images/icons/recruitment.svg"/>
      <x-DisUS  title="Fast and practical" description="Your CV is ready to be published within minutes, do not miss any job opportunity after today"  image="https://seirah.com/assets/images/icons/003-shapes.svg"/> 
      </ul>
    </div>
    <div  class="  ">
      <ul class="lg:space-y-16 space-y-8     text-fourth/70  font-bold     lg:mt-28   mt-9 ">
      <x-DisUS  title="Multiple languages" description="You can write your CV in more than one language"  image="https://seirah.com/assets/images/icons/043-font-file.svg"/>
        <x-DisUS  title="Multiple templates and various designs" description="Various and varied templates are waiting for you. Do not waste time and use them"  image="https://seirah.com/assets/images/icons/045-layers.svg"/>
      </ul>
    </div>


    

   
  </div>
</div>

<p  class=" flex items-center mb-14 mt-44 md:text-7xl text-4xl  font-bold text-white  justify-center "> {{__('Steps to create a CV ')}} </p>
<div class="flex items-center justify-center">
<div class=" grid xl:grid-cols-4  md:grid-cols-2  mx-10    ">

<x-steps num="1" title="click create your cv" />


<x-steps num="2" title="Enter you infornation" description="follow a guided , step by step process"/>

<x-steps num="3" title="Choose a template" description="Pick from one of our professional designed template"/>

<x-steps num="4" title="Download your CV" description="Download in PDF"/>



</div>
</div>

</section>

<section>

<div  >
  <p class="flex items-center mb-14 mt-44 md:text-7xl text-4xl text-white font-bold   justify-center" >{{__('Some of our templates')}}</p>
<div #swiperRef="" class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"> <img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" class="  h-full  w-full " alt=""></div>
      <div class="swiper-slide"><img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" class="   h-full  w-full " alt=""></div>
      <div class="swiper-slide"><img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg"  class="   h-full  w-full " alt=""></div>
      <div class="swiper-slide"><img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg"  class="   h-full  w-full " alt=""></div>
      <div class="swiper-slide"><img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" class="   h-full  w-full " alt=""></div>
      <div class="swiper-slide"><img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" class="   h-full  w-full " alt=""></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">
      <svg >

      </svg>
      <span></span>
    </div>
  </div>

  

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      centeredSlides: true,
      spaceBetween: 30,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 3,
        slideShadows: true,
      },
      slidesPerView: 1,
                spaceBetween: 0,
                autoplay: {
                    delay: 3000,
                },
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      breakpoints: {
                    640: {
                        loop: true,
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    768: {
                        loop: true,
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    1024: {
                        loop: true,
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    
      
  </script>



</div>

  <!-- Initialize Swiper -->
  </section>
     

</section>

<x-footer/>