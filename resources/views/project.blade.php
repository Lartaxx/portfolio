<!DOCTYPE html>
<html class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<body>
    <div class="flex items-center justify-center" style="width: 600px; height: 900px;">
        <img src="{{ Vite::image($project['project']['image']) }}" class="object-contain max-w-full max-h-full">
    </div>
    
    
    
    
    

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