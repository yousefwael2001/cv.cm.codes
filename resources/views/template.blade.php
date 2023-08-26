
<x-navbar/>
        <!-- Styles -->
        
    <style>
        

html {
    scroll-behavior: smooth;
}
    </style>



    <div class=" grid grid-cols-1 lg:grid-cols-2">
    <div>
    
<p  class=" flex items-center text-4xl md:text-6xl lg:mx-20 mx-10  text-dark-blue mt-16  lg:mt-96 font-bold    "> {{__('CV templates')}}</p>
<p  class="  mb-14 mt-14 text-4xl lg:mx-20 mx-10  text-gray-600  font-light "> {{__('Increase your chances of finding a job and build your resume with one of our professionally designed resume templates. Would you like to know how these templates can work for you? Scroll down and check out the different resume examples we have provided for your inspiration')}} </p>
</div>
    <div class="  lg:mt-28 lg:mx-10">
    @include('svg.imgTemplateFile')
    </div>
    
</div>

<div class="container mx-auto mb-8 " id="potret">
   
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10  xl:mx-64 md:mx-7 mx-4   ">
            <div class="bg-white rounded-lg shadow-lg ">
                <img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" alt="image1" class="  w-full object-cover zoomable">
                
            </div>
            <div class="bg-white rounded-lg shadow-lg">
                <img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" alt="image2" class="  w-full object-cover zoomable">
                
            </div>
            <div class="bg-white rounded-lg shadow-lg">
                <img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" alt="image3" class="  w-full object-cover zoomable">
               
            </div>
            <div class="bg-white rounded-lg shadow-lg">
                <img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" alt="image4" class="  w-full object-cover zoomable">
                
            </div>
            <div class="bg-white rounded-lg shadow-lg">
                <img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" alt="image5" class="  w-full object-cover zoomable">
                
            </div>
            <div class="bg-white rounded-lg shadow-lg">
                <img src="https://i.pinimg.com/564x/0f/2e/f9/0f2ef9e21cf65cbe6214783a1471cbc3.jpg" alt="image6" class="  w-full object-cover zoomable">
                
            </div>
        </div>
</div>
</div>
        
    <script>
        const zoomableImages = document.querySelectorAll('.zoomable');

zoomableImages.forEach(image => {
    image.addEventListener('click', () => {
        const zoomableContainer  = document.createElement('div');
        zoomableContainer.classList.add('zoomed');

        const zoomableImage = document.createElement('img');
        zoomableImage.src = image.src;

        zoomableContainer.appendChild(zoomableImage);
        document.body.appendChild(zoomableContainer);

        zoomableContainer.addEventListener('click', () => {
            zoomableContainer.remove();
        })
    })
})
    </script>
<x-footer/>