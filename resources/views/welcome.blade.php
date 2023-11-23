<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
  <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
  <nav class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0" x-data="{ isOpen: false }" @keydown.escape="isOpen = false" :class="{ 'shadow-lg bg-indigo-900' : isOpen , 'bg-blue-800' : !isOpen}">
    <!--Logo etc-->
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
        <span class="text-2xl pl-2"><i class="em em-grinning"></i> Medihome Rebrand</span>
      </a>
    </div>

    <!--Toggle button (hidden on large screens)-->
    <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white" :class="{ 'transition transform-180': isOpen }">
      <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
        <path x-show="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
      </svg>
    </button>

    <!--Menu-->
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto" :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false" x-show.transition="true">
      <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <a class="inline-block py-2 px-4 text-white no-underline" href="#" @click="isOpen = false">Home
          </a>
        </li>

        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#" @click="isOpen = false">About
          </a>
        </li>

        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#" @click="isOpen = false">Services
          </a>
        </li>
        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#" @click="isOpen = false">FAQ
          </a>
        </li>

        @auth
        <a href="{{ url('/dashboard') }}" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="inline-block text-white no-underline hover:text-grey-200 hover:text-underline py-2 px-4 rounded-3xl border-2 border-white">Register</a>
        @endif
        @endauth

      </ul>
    </div>
  </nav>

  <!--Container for content-->
  <div class=" mt-10 md:mt-18 ">
    <!-- Embla -->
    <div class="embla ">
      <div class="embla__viewport">
        <div class="embla__container">
          <div class="embla__slide w-full">
            <!-- <div class="embla__slide__number"><span>1</span></div> -->
            <div class="flex flex-row banner_one">
              <div class="flex-1 flex-col p-6">
                <h1 class="text-5xl mt-24 lg:mt-32 md:mt-24 mb-5 text-center text-blue-800 leading-relaxed"> Your Trusted Care Home Health Partner </h1>
                <a href="#" class="flex flex-row justify-center">
                  <button class="hover:text-white text-lg my-3 text-blue-800 py-2 text-center px-4 rounded-3xl border-2 border-blue-800 hover:bg-blue-800">
                    Book an Appointment
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="embla__slide w-full">
            <!-- <div class="embla__slide__number"><span>1</span></div> -->
            <div class="flex flex-row banner_two">
              <div class="flex-1 flex-col p-6">
                <h1 class="text-5xl mt-32 mb-5 text-center text-white leading-relaxed"> Enriching Lives, One Home at a Time</h1>
                <a href="#" class="flex flex-row justify-center">
                  <button class="hover:text-white text-1xl my-3 text-white py-2 text-center px-4 rounded-3xl border-2 border-white hover:bg-blue-800">
                    Join Us
                  </button>
                </a>
              </div>
            </div>
          </div>
          <!-- <div class="embla__slide">
            <div class="embla__slide__number"><span>3</span></div>Slide 3
          </div> -->
        </div>
      </div>
    </div>


    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm-grid-cols-1 my-12 justify-center gap-6 m-3">
      <div class="shadow-sm hover:shadow-lg border-2 p-6 rounded-3xl hover:border-2 flex flex-row">
        <div class="rounded-full  shadow-lg w-20 flex flex-col h-20 justify-center">
          <img src="{{ assets('../../../../icons/health_and_safety.svg" class="text-blue-800 rounded-full"/>
        </div>
          
        <h3 class="text-3xl m-6 text-blue-800 flex justify-center">Care Home Services</h3>
      </div>
      <div class="shadow-sm hover:shadow-lg border-2 p-6 rounded-3xl hover:border-2 flex flex-row">
        <div class="rounded-full  shadow-lg w-20 flex flex-col h-20 justify-center">
          <img src="{{ assets('../../../../icons/health_and_safety.svg" class="text-blue-800 rounded-full"/>
        </div>
          
        <h3 class="text-3xl m-6 text-blue-800 flex justify-center">100% Privacy Assured</h3>
      </div>
      <div class="shadow-sm hover:shadow-lg border-2 p-6 rounded-3xl hover:border-2 flex flex-row">
        <div class="rounded-full  shadow-lg w-20 flex flex-col h-20 justify-center">
          <img src="{{ assets('../../../../icons/health_and_safety.svg" class="text-blue-800 rounded-full"/>
        </div>
          
        <h3 class="text-3xl m-6 text-blue-800 flex justify-center">Done by Professionals</h3>
      </div>
    </div>

     <!-- FAQ STARTS HERE  -->
    <div class="bg-blue-50 h-2/5 w-full p-6">
      <h3 class="text-5xl text-blue-800 text-center my-12 mb-12">Testimonials</h3>
      <div class="grid ld:grid-cols-2  md:grid-cols-2 sm:grid-cols-1 gap-6">
          <div class="border-l-4  border-blue-500 p-3 mb-6 ">
              
            <p class="text-blue-800 text-lg">MHCS Medicare was the second team for my late father. They cooperated with me. They understood his issues, 
                they totally supported him and me right up to the end. I will forever feel grateful. 
                You helped me keep him where he wanted to be, and you know how to play along with him always. 
                Kudos!! The contract then started around February 2018, until he sadly passed away in May 2021 at age of 87yrs. 
                I can honestly say they became like family to us and still are. Their standard of care is amazing but more than that they really do put patient first. I salute the MD & His team for professionalism indeed!!</p>

            <h3 class="text-3xl text-blue-800 right"> - George Omotese </h3>
          </div>
          <div class="border-l-4  border-blue-500 p-3">
              
            <p class="text-blue-800 text-lg">Wonderful service to Mum in her home. We found all carers and management team very supportive, 
              listened to what we said, and particularly responsive and caring to Mum. I cannot recommend them highly enough.</p>

            <h3 class="text-3xl text-blue-800 right"> - Awolu Yaya </h3>
          </div>

          <div class="border-l-4  border-blue-500 border-solid p-3">
              
            <p class="text-blue-800 text-lg">MediHome care services visited my father daily (and more by request of a phone call as necessary). 
              They are all very nice, skilled and cheerful people, who really care. 
              They also take time to connect other Specialist when the need arise and have a conversation that promotes the wellbeing of their patients. 
              I sincerely recommend them.</p>

            <h3 class="text-3xl text-blue-800 right"> - Pas Solomon Adeniran </h3>
          </div>

          <div class="border-l-4  border-blue-500 border-solid p-3">
              
            <p class="text-blue-800 text-lg">Wonderful service to Mum in her home. We found all carers and management team very supportive, listened to what we said, and particularly responsive and caring to Mum. 
              I cannot recommend them highly enough; something we couldn't always do with previous caring team. Effortless triumph!!</p>

            <h3 class="text-3xl text-blue-800 right"> - Kahdijat Hussien </h3>
          </div>

          <div class="border-l-4  border-blue-500 border-solid p-3">
              
            <p class="text-blue-800 text-lg">My mother has been through some care companies - six or seven of them - and I can say without any hesitation that MediHome care Services is the best care company we could have wished for. The carers from MEDIHOME are second to none. All my siblings, we never worry about Mama's challenge since we engaged MediHome. Though she's not an easy old woman but they won her heart. Kudos to you all!!</p>

            <h3 class="text-3xl text-blue-800 right"> - Ofor Blessing </h3>
          </div>

          <div class="border-l-4  border-blue-500 border-solid p-3">
              
            <p class="text-blue-800 text-lg">I am happy to depend on their care and assistance. Interestingly, the team leader is always in contact, checking the Patient & Carers as well. They are mega home care professionals & Specialist indeed. I have already recommended this company to my friends both home and abroad. What a special team. Thank you all at MEDIHOME!!</p>

            <h3 class="text-3xl text-blue-800 right"> - Sobowale magret </h3>
          </div>
      </div>
    </div>
    <!-- FAQ ENDS HERE  -->

    <!-- php artisan queue:work & 
      while true; do 
        echo "=> Running scheduler"
        php artisan schedule:work || true;
        echo "=> sleeping for 60 seconds"
        sleep 60;
      done -->

  </div>
  <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
  <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>

</body>

</html>