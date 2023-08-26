<x-navbar/>
<style> @screen sm { .grid { grid-template-columns: 1fr; } } @screen md { .grid { grid-template-columns: repeat(2, 1fr); } } @screen lg { .grid { grid-template-columns: repeat(3, 1fr); } } .container { max-width: 2024px; } @screen sm { .container { max-width: 90%; } } </style>
  <header class="bg-cyan-700 mt-20 py-4">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold text-center text-white">CV Blogs</h1>
    </div>
  </header>

  <main class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Blog post card 1 -->
      <div class="bg-white shadow-md rounded-lg cursor-pointer" onclick="toggleCardEffect(this)">
        <img src="https://static.vecteezy.com/system/resources/previews/005/482/337/non_2x/illustration-graphic-cartoon-character-of-recruitment-vector.jpg" alt="Blog Post Image" class="w-full h-fit  object-cover rounded-t-lg">

        <div class="p-6 mr-1">
          <h5 class="mb-2  text-2xl font-bold tracking-tight">How to create a professional resume</h5>
          
          <p class="text-gray-700 h-96 text-justify ">A well-crafted professional resume is an essential tool in today's competitive job market. It serves as your introduction to potential employers and plays a crucial role in securing job interviews.</p>
    
        </div>

        <div class="bg-gray-100 px-6 py-4 flex justify-between">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-lg hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        </div>
      </div>


      
      <!-- Blog post card 2 -->
      <div class="bg-white shadow-md rounded-lg cursor-pointer" onclick="toggleCardEffect(this)">
        <img src="https://static.vecteezy.com/system/resources/previews/005/482/334/non_2x/illustration-graphic-cartoon-character-of-list-of-rules-vector.jpg" alt="Blog Post Image" class="w-full h-fit  object-cover rounded-t-lg">

        <div class="p-6 mr-1">
          <h5 class="mb-2 text-2xl font-bold tracking-tight">How to optimize your resume for an ATS</h5>
          
          <p class="text-gray-700  h-96 text-justify ">With everyone applying for jobs online these days, companies receive more applications than they can read. If you are applying for a job, your application will likely land in an applicant tracking system (ATS). This software is used to keep track of applications and ensure none are overlooked.</p>
    
        </div>

        <div class="bg-gray-100 px-6 py-4 flex justify-between">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-lg hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        </div>
      </div>

      <!-- Blog post card 3 -->
      <div class="bg-white shadow-md rounded-lg cursor-pointer" onclick="toggleCardEffect(this)">
        <img src="https://static.vecteezy.com/system/resources/previews/005/374/328/non_2x/illustration-graphic-cartoon-character-of-online-survey-vector.jpg" alt="Blog Post Image" class="w-full h-fit  object-cover rounded-t-lg">

        <div class="p-6 mr-1">
          <h5 class="mb-2 text-2xl font-bold tracking-tight">CV Examples for Students</h5>
          
          <p class="text-gray-700 h-96 text-justify ">Knowing how to write a high-quality student CV that showcases your academic and professional credentials can position you as the best candidate for work and educational positions.In this article, we explain the importance of a well-written curriculum vitae and how to write one step by step with multiple examples and a template to help you write your own.</p>
    
        </div>

        <div class="bg-gray-100 px-6 py-4 flex justify-between">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-lg hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-lg cursor-pointer" onclick="toggleCardEffect(this)">
        <img src="https://static.vecteezy.com/system/resources/previews/005/260/261/non_2x/illustration-graphic-cartoon-character-of-checklist-vector.jpg" alt="Blog Post Image" class="w-full h-fit  object-cover rounded-t-lg">

        <div class="p-6 mr-1">
          <h5 class="mb-2 text-2xl font-bold tracking-tight">The five most common CV problems – and how to fix them</h5>
          
          <p class="text-gray-700 h-80  ">Anyone who has written a CV has probably had to overcome a number of challenges – whether they be lack of work experience, gaps in employment or explaining a short stint that didn’t work out.Facing these issues when writing your CV does not mean you’re not a worthy employee, it just means that you must find ways to explain areas that may appear negative to recruiters. If you’re struggling to explain discrepancies on your CV, the following examples will show how you can reflect your experience more positively.</p>
    
        </div>

        <div class="bg-gray-100 px-6 py-4 flex justify-between">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-lg hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        </div>
      </div>



      <div class="bg-white shadow-md rounded-lg cursor-pointer" onclick="toggleCardEffect(this)">
        <img src="https://static.vecteezy.com/system/resources/previews/005/907/700/non_2x/illustration-graphic-cartoon-character-of-checklist-vector.jpg" alt="Blog Post Image" class="w-full h-fit  object-cover rounded-t-lg">

        <div class="p-6 mr-1">
          <h5 class="mb-2 text-2xl font-bold tracking-tight">Leveraging LinkedIn to Enhance Your Resume</h5>
          
          <p class="text-gray-700 h-80 ">LinkedIn has become an invaluable tool for professionals in today's digital age. With over 774 million users worldwide, this professional networking platform offers an array of opportunities to improve your resume and enhance your career prospects. By strategically utilizing LinkedIn's features, you can go beyond the limitations of a traditional resume and showcase your skills, experience, and professional brand to a wider audience. In this article, we will explore how you can leverage LinkedIn to optimize and bolster your resume.</p>
    
        </div>

        <div class="bg-gray-100 px-6 py-4 flex justify-between">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-lg hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-lg cursor-pointer" onclick="toggleCardEffect(this)">
        <img src="https://img.freepik.com/premium-vector/illustration-vector-graphic-cartoon-character-checklist_516790-279.jpg" alt="Blog Post Image" class="w-full h-fit  object-cover rounded-t-lg">

        <div class="p-6 mr-1">
          <h5 class="mb-2 text-2xl font-bold tracking-tight">Leverage The power of Soft Skills on Your Resume </h5>
          
          <p class="text-gray-700 h-80 ">Take advantage  the power of soft skills in a resume. Soft skills, also known as interpersonal or non-technical skills, are increasingly recognized as essential attributes in the workplace. This article explores the importance of incorporating soft skills into a resume, as they complement technical expertise and contribute to overall professional success. This article also highlights strategies for identifying and showcasing soft skills effectively, emphasizing their relevance to employers and hiring managers. By presenting a comprehensive overview of the benefits and methods of incorporating soft skills in a resume, this article aims to equip job seekers with the knowledge and tools necessary to enhance their employability and stand out in a competitive job market.</p>
    
        </div>

        <div class="bg-gray-100 px-6 py-4 flex justify-between">
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-cyan-700 rounded-lg hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        </div>
      </div>

      <!-- Add more blog post cards as needed -->

      

</div>

    </div>
  </main>

  <x-footer/>
