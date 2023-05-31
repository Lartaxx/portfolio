<!DOCTYPE html>
<html class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script>
    let Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });
  </script>
</head>
<body class="bg-gray-900 font-poppins fade-in">
    
<nav class="bg-white border-gray-200 dark:bg-gray-900 ">
    <div class="ms-2 me-2 flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">lartaxx.dev</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-semibold text-lg flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/david-boyer-9a1120136/" target="_blank" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>
          <li>
            <a href="https://github.com/Lartaxx/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Github</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="about">

    <div class="text-center text-white mx-auto">
        <h1 class="text-4xl font-bold mb-10">Hi, I'm Lartaxx 👋!</h1>
        <p class="text-6xl mt-5 font-semibold">
            Back-end web
            <span class="linear-gradient">developer</span>
        </p>
        <p class="text-6xl font-semibold mt-2">
            From
            <span class="french-gradient">France</span>
        </p>
    </div>

  </section>

  <hr class="h-px my-2 mt-10 mb-10 linear-gradient border-0 w-5/6 mx-auto">

  <section id="projects" class="p-4">
    <div class="flex justify-center">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach($projects as $project)
          <a href="{{ route("project", ["project" => isset($project["slug"]) ? $project["slug"] : strtolower($project["name"])]) }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800 max-w-sm">
            <div class="aspect-w-3 aspect-h-2 w-full">
              <img class="object-cover object-center w-full h-full rounded-t-lg" src="{{ Vite::image($project["image"]) }}" alt="{{ $project["name"] }}">
            </div>
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-500">{{ $project["name"] }}</h5>
              <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">{{ $project["description"] }}</p>
              <hr class="h-px linear-gradient border-0 w-3/4 mb-1 mx-auto">
              <div class="flex text-xs text-gray-500 mt-3">
                @foreach($project["skills"] as $skill)
                  <div class="me-2">
                    <img data-tooltip-target="tooltip-{{ $skill }}" data-tooltip-placement="bottom" data-tooltip-style="light" src="{{ Vite::image("$skill.png") }}" class="h-8 grayscale hover:grayscale-0">
                    <div id="tooltip-{{ $skill }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                      {{ Utils::convertSkill($skill) }}
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>  
                  </div>
                @endforeach
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>


  <hr class="h-px my-2 linear-gradient border-0 w-full mx-auto mb-4">

  
<footer class="bg-white rounded-lg shadow dark:bg-gray-900">
  <div class="px-3 mb-2  flex justify-between items-start">
    <div>
      <p class="font-medium text-blue-200 text-lg">lartaxx@beggin.fr</p>
      <p class="font-extralight text-blue-200 opacity-70">Back-end web developer</p>
    </div>
    <div class="text-right">
      <p class="font-extralight text-blue-200 opacity-70">
        Developed with <span class="text-pink-500">❤️</span><br>
        by lartaxx.dev
      </p>
    </div>
  </div>
</footer>



@if($errors->any())
   @foreach ($errors->all() as $error)
    <script>
        Toast.fire({
            icon: 'error',
            title: '{{ $error }}'
        });
    </script>
    @endforeach
@endif

@if(session('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: "{{ session('success') }}"
        });
    </script>
@endif

@if(session('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: "{{ session('error') }}"
        });
    </script>
@endif
</body>
</html>