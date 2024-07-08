<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
<div class="container">
    <nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between items-center z-10 bg-white text-white px-8 py-6 md:px-28 md:py-8">
        <div class="flex items-center font-extrabold tracking-widest text-xl">
          <a href="/home" class="transition duration-500 hover:text-indigo-500 h-8">
            <img src="{{url('/images/laporin dark.png')}}" class="h-full" />
          </a>
        </div>
      
        <!-- Nav Items Working on Tablet & Bigger Sceen -->
        <div class="hidden md:flex flex-row justify-between items-center">
          <a href="tentanglaporin" class="text-black mr-8 text-decoration-none" style="color: black">Tentang Laporin</a>
          <a href="panduan" class="text-black mr-8 text-decoration-none" style="color: black">Panduan Pengaduan</a>

          @auth
          <a class="nav-link dropdown-toggle" style="color: black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="/profil"><i class="fa-regular fa-circle-user"></i> Profil Saya</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-folder-closed"></i> Arsip Laporan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
              </form>
            </li>
          </ul>
          @endauth

        </div>
      
        <!-- Burger Nav Button on Mobile -->
        <div id="nav-open" class="p-4 md:hidden text-black">
          <i class="ri-menu-line"></i>
        </div>
      </nav>
    </div>
    
      <!-- Opened Nav in Mobile, you can use javascript/jQuery -->
      <div id="nav-opened" class="fixed left-0 right-0 hidden bg-black mt-24 shadow z-10">
        <div class="px-6 mt-2 divide-y divide-white text-white flex flex-col">
          <a href="about" class="px-2 py-4 font-semibold hover:text-indigo-700">About</a>
          <a href="service" class="px-2 py-4 font-semibold hover:text-indigo-700">Service</a>
        </div>
      </div>