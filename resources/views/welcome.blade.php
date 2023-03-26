<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pengaduan Masyarakat Cijeruk</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">

  <nav class="flex items-center justify-between flex-wrap bg-green-600 p-7 px-20">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <span class="font-bold tracking-wider text-xl">
        &nbsp Pengaduan Masyarakat</span>
    </div>
    <div class="block lg:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
      <div>
        <button
          class="text-white font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Masuk</a>
        </button>
        <button
          class="text-white font-medium">
          <a href="{{ url('register')}}">Daftar</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div class="pt-24 px-16 bg-green-200">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-gray-800">
        <h1 class="my-4 text-4xl font-bold leading-tight">
          Layanan Pengaduan Masyarakat Online Desa Cijeruk
        </h1>
        <p class="leading-normal text-1xl mb-8">
          Sampaikan laporan masalah Anda di sini, kami akan memprosesnya
          dengan cepat. Login dulu ya!
        </p>
        <button
          class="mx-auto lg:mx-0 bg-green-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Login!</a>
        </button>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-2/5 text-center">
        <img class="object-fill mx-36 transform transition hover:scale-110 duration-300 ease-in-out"
          src="{{ asset('img/logocijeruk.png')}}" />
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center font-medium bg-green-200 py-5">

  </footer>
  @include('sweetalert::alert')
</body>

</html>
