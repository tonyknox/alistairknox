<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Alistair Knox') }}</title>

    <!-- Fonts  -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts  -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{ { resources/js/picturefill.min.js') } }" async></script>
    <script type="text/javascript" src="{ { resources/js/image-scale.js') } }"></script>
</head>
<body>
<div class="p-8 bg-amber-300">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">1</div>
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">2</div>
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">3</div>
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">4</div>
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">5</div>
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">6</div>
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">7</div>
    <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">8</div>
  </div>
</div>
    <div class="font-sans text-gray-900 antialiased">
        <div class="grid grid-col-4 gap-4 mx-6 mt-6">



            <!-- Page Heading  -->
            <div></div><div>
                <slot name="header">



                    {{ $header }}



                </slot>
            </div>

            <!-- sidebar -------->
 <div class="">
            <slot name="sidebar">
               

                    {{ $sidebar }}
                </div>

            </slot>

            <!-- Page Content --------->
<div></div><div>
            <main>

                

                    <span style="max-width:520px" class="text-justify">

                        {{ $main }}

                    </span>

               
            </main>
 </div>


            <!-- footer-------------->
 <div class="">
            <slot name="footer">

               

                    {{ $footer }}

                

            </slot>
</div>
        </div>
    </div>
   

</body>

</html>