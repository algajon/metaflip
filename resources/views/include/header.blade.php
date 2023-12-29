<script src="https://cdn.tailwindcss.com"></script>
<script src="{{mix('./public/scripts/scripts.js') }}" type="module"></script>
<style>

  .font-onest {
    font-family: 'Onest', sans-serif;
  }

  .arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }

  .prev {
    left: 10px;
  }

  .next {
    right: 10px;
  }

  .card {
    transition: transform 0.4s ease;
  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }
  header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9); /* Initial background color with opacity */
            z-index: 5; /* Ensure the header is on top */
            transition: background-color 0.3s none; /* Transition effect */
        }

        /* Elements within the header */
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        #shopModal .modal-content {
  opacity: 95;
  transition: opacity 0.3s ease-in-out;
}

#shopModal:hover .modal-content {
  opacity: 95;
}

</style>
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
</head>
    @vite(['resources/js/app.js'])
    
<header class="content">
<div class="tradingview-widget-container">
<div class="tradingview-widget-container__widget"></div>
<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
{
"symbols": [
{
"proName": "BITSTAMP:BTCUSD",
"title": "Bitcoin"
},
{
"proName": "BITSTAMP:ETHUSD",
"title": "Ethereum"
},
{
"description": "BITSTAMP:XRPUSD",
"proName": "XRP"
},
{
"description": "BYBIT:SOLUSDT",
"proName": "SOL"
},
{
"description": "GBP/USD",
"proName": "FX:GBPUSD"
},
{
"description": "AUD/USD",
"proName": "FX:AUDUSD"
},
{
"description": "USD/CAD",
"proName": "FX:USDCAD"
},
{
"description": "GBP/JPY",
"proName": "FX:GBPJPY"
},
{
"description": "US30",
"proName": "CURRENCYCOM:US30"
},
{
"description": "NAS100",
"proName": "OANDA:NAS100USD"
}
],
"showSymbolLogo": true,
"colorTheme": "dark",
"isTransparent": false,
"displayMode": "adaptive",
"locale": "en"
}
</script>
</div>
                         </div>
                      </div>
                 </div>
           </div>
       </div>
  </section>
<body class="font-mono h-full w-full">    
<div class="absolute sm:ml-48 text-xl pt-4 font-onest sm:flex sm:space-x-8">
  <!-- Current: "border-yellow-500  -900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
  <a href="#" id="scrollToSection3" class="inline-flex items-center border-b-4 border-yellow-400 px-1 pt-1 font-medium text-gray-900">About Us</a>
  <a id="shopModalTrigger" href="./ourproducts" class="inline-flex items-center border-b-4 border-transparent px-1 pt-1 font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Our Store </a>
  <a id="scrollToSection2" class="inline-flex items-center border-b-4 border-transparent px-1 pt-1 font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 cursor-pointer">Wallet Connection</a>
</div>
<a href="./home" class="text-white block w-full">
    <img src="./images/logoYellow.png" class="w-20 h-12 mt-4 ml-12" alt="MetaFlip">
  </a>
        

<div class="container mx-auto flex justify-between items-center">
  
  <div class="flex justify-center items-center font-onest font-mono absolute right-96 top-16 px-10">
        <div class="w-full max-w-lg lg:max-w-xs">
          <label for="search" class="sr-only">Search</label>
          <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
              </svg>
            </div>
            <input id="search" name="search" class="block w-full rounded-md border-0 bg-gray-50 py-1.5 pl-10 pr-24 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-700 font-semibold focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6" placeholder="Search" type="search">
          </div>
        </div>
      </div>
      </div>
    </div>

  <!-- <div class="absolute top-2 left-52 mr-4 mt-0 bg-transparent rounded-lg " id="cart">
    <img class="w-10 h-10 mx-6" src="./images/cart.png">
    <button class="bg-yellow-300 card text-white font-bold px-3 py-1 shadow-xl rounded-lg inline-block mt-2"
      onclick="checkout()">
      Checkout
    </button>
    <ul id="cart-items">
    </ul>
  </div> -->
  @guest
    @if (Route::has('login'))
        <div class="absolute flex items-center gap-2 top-10 right-3 font-onest py-3 px-1 pb-1 pl-1 text-lg">
            <a href="./login"
                id="signUp"
                class="bg-white ring-black ring-2 text-black font-bold px-2 py-0 border shadow-md rounded-lg inline-block">Login</a>

            @endif
            @if (Route::has('register'))
                <a href="./register"
                    class="bg-black text-white font-bold px-3 py-1 border shadow-md rounded-lg inline-block">Sign Up</a>
            @endif
            <button type="button"
                class="relative ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
            </button>
            <div class="relative ml-auto">
                <div class="absolute right-0 mt-2 hidden bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg"
                     style="min-width: 12rem;">
                    <a 
                    id="dropdown-toggle"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Profile</a>
                    <!-- Add other menu options here -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button type="submit"
                            class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
@else
<!-- <div class="ml-4 flow-root lg:ml-6">
  <a onclick="checkout()" class="group mt-2 mr-2 -m-2 flex items-center p-2">
    <svg class="h-12 w-12 flex-shrink-0 text-yellow-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
    </svg>
    <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800"></span>
  </a>
</div> -->
<!-- @canany(['create-role', 'edit-role', 'delete-role'])
    <li><a class="bg-white ring-black ring-2 text-white font-bold px-2 py-0 border my-1 shadow-md absolute right-0 rounded-lg inline-block" href="{{ route('roles.index') }}">Manage Roles</a></li>
@endcanany
@canany(['create-user', 'edit-user', 'delete-user'])
    <li><a class="bg-white ring-black ring-2 text-white font-bold px-2 py-0 border my-3 shadow-md absolute right-0 rounded-lg inline-block" href="{{ route('users.index') }}">Manage Users</a></li>
@endcanany -->


<div class="absolute flex items-center gap-4 right-0 font-onest py-2 px-2 top-10 text-lg">
@canany(['create-product', 'edit-product', 'delete-product'])
    <a href="{{ route('products.index')}}" class="rounded-md bg-yellow-400 ring-1 ring-black cursor-pointer px-3.5 py-2.5 text-lg font-bold text-gray-900 shadow-lg hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600" href="{{ route('products.index') }}">Seller Dashboard</a></li>
@endcanany
<button class="-mr-1">
    <svg class="h-6 w-6 ring-gray-700 ring-2 rounded-lg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
    aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round"
    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
  </svg>
</button>
<a href="/userprofile" class="text-xl font-onest" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
aria-expanded="false" v-pre>
<strong>{{ Auth::user()->name }}</strong>
</a>
<div class="relative ml-auto">
  <button 
                id="dropdown-toggle"
              class="relative flex rounded-full bg-white text-sm"
                 aria-expanded="false" aria-haspopup="true">
                @if(auth()->user()->profile_picture)
                    <img src="{{ asset('profile_pictures/' . auth()->user()->profile_picture) }}" alt="Profile Picture">
                @else
                    <img src="./images/joni.jpg" class="h-12 w-12 ring-2 ring-black mt-1 mr-2 rounded-full">
                @endif
            </button>
        </div>
      </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>

    <div class="absolute text-center font-onest right-3 hidden bg-white pt-2 -mt-3 px-4 py-2 border border-gray-200 rounded-lg shadow-lg"
    id="dropdown-menu" style="min-width: 12rem;">
    <ul role="list" class="-mx-2 space-y-1">
    <li>
      <!-- Current: "bg-gray-50 text-yellow-600", Default: "text-gray-700 hover:text-yellow-600 hover:bg-gray-50" -->
      <a href="./home" class="text-yellow-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
        <svg class="h-6 w-6 shrink-0 text-yellow-600 group-hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        Home
      </a>
    </li>
    <li>
      <a href="./userprofile" class="text-gray-700 hover:text-yellow-600 hover:bg-gray-50 group flex gap-x-3 rounded-full p-2 text-sm leading-6 font-semibold">
      <img src="./images/joni.jpg" class="rounded-full ring-1 ring-black h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        Your Profile
      </a>
    </li>
    <li>
      <a href="/products/create" class="text-gray-700 hover:text-yellow-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
        </svg>
        Add New Product
      </a>
    </li>
    <li>
      <a href="#" class="text-gray-700 hover:text-yellow-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
      <img src="./images/heart.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        Favorites
      </a>
    </li>
    <li>
      <a href="#" class="text-gray-700 hover:text-yellow-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
        </svg>
        Settings
      </a>
    </li>
    <li>
      <a href="{{ route('logout') }}" id="logout-form" action="{{ route('logout') }}" method="POST"  class="text-gray-700 hover:text-yellow-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
        
        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
        </svg>
        Log Out
      </a>
    </li>
  </ul>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="shopModal" class="hidden">
    <div class="modal-content font-onest font-mono opacity-95">
      <div class="relative isolate shadow">
      <div class="absolute inset-x-0 top-0 -z-10 bg-white pt-16 shadow-lg ring-1 ring-gray-900/5">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-6 pb-10 -mt-10 lg:grid-cols-2 lg:px-8">
      <div class="grid grid-cols-2 gap-x-6 sm:gap-x-8">
        <div>
          <h3 class="text-lg font-medium leading-6 text-gray-500">Digital</h3>
          <div class="mt-6 flow-root">
            <div class="-my-2">
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
                <img src="./images/nft-art.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                NFTs
              </a>
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/ethLogo.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                Cryptocurrency
              </a>
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/nft-music.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                ERC-20
              </a>
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/headphones.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                ERC-721
              </a>
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/nft-art.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                ERC-1155
              </a>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-medium leading-6 text-gray-500">Physical</h3>
          <div class="mt-6 flow-root">
            <div class="-my-2">
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/cars.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                Cars
              </a>
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/headphones.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                Headphones & Accessories
              </a>
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/trophy.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                Electronics
              </a>
              <a href="#" class="flex gap-x-4 py-3 text-sm font-semibold leading-6 text-gray-900">
              <img src="./images/more.png" class="h-6 w-6 flex-none text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                Services
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 mr-3 gap-10 sm:gap-8 lg:grid-cols-2">
        <h3 class="sr-only font-bold">Latest Products</h3>
        <article class="relative isolate flex max-w-2xl flex-col gap-x-8 gap-y-6 sm:flex-row sm:items-start lg:flex-col lg:items-stretch">
          <div class="relative flex-none">
            <img class="aspect-[2/1] w-90 rounded-lg bg-gray-100 object-cover sm:aspect-[16/9] sm:h-32 lg:h-auto" src="./images/ferrari.png" alt="">
            <div class="absolute inset-0 rounded-lg ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div>
            <div class="flex items-center gap-x-4">
            <time datetime="2023-03-16" class="text-sm leading-6 text-gray-600">🕒Time Remaining: 0d 16h 23m</time>
            </div>
            <h4 class="mt-2 text-sm font-semibold leading-6 text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                A Ferrari, literally
              </a>
            </h4>
            <p class="mt-2 text-sm leading-6 text-gray-600">Et et dolore officia quis nostrud esse aute cillum irure do esse. Eiusmod ad deserunt cupidatat est magna Lorem.</p>
          </div>
        </article>
        <article class="relative isolate flex max-w-2xl flex-col gap-x-8 gap-y-6 sm:flex-row sm:items-start lg:flex-col lg:items-stretch">
          <div class="relative flex-none">
          <img class="aspect-[2/1] w-90 rounded-lg bg-gray-100 object-cover sm:aspect-[16/9] sm:h-32 lg:h-auto" src="./images/boredApe.png" alt="">
            <div class="absolute inset-0 rounded-lg ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div>
            <div class="flex items-center gap-x-4">
            <time datetime="2023-03-10" class="text-sm leading-6 text-gray-600">🕒Time Remaining: 0d 16h 23m</time>
            </div>
            <h4 class="mt-2 text-sm font-semibold leading-6 text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                An extremely Bored Ape
              </a>
            </h4>
            <p class="mt-2 text-sm leading-6 text-gray-600">Optio cum necessitatibus dolor voluptatum provident commodi et.</p>
          </div>
        </article>
      </div>
    </div>    
   </div>
<script>
        // JavaScript for fading header background on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            const content = document.querySelector('.content');
            const scrollY = window.scrollY;

            // Change the header background opacity based on scroll position
            header.style = `rgba(255, 255, 255, ${Math.min(scrollY / 200, 0.9)})`;

            // Make content slightly transparent as the user scrolls
            content.style.opacity = 1 - Math.min(scrollY / 200, 1);
        });

          const toggleButton = document.getElementById("dropdown-toggle");
          const dropdownMenu = document.getElementById("dropdown-menu");
          if (toggleButton) {
            toggleButton.addEventListener("click", () => {
              dropdownMenu.classList.toggle("hidden");
            });
          }
document.addEventListener("DOMContentLoaded", function () {
      const shopModal = document.getElementById("shopModal");
      const triggerLink = document.getElementById("shopModalTrigger");

      triggerLink.addEventListener("mouseenter", function () {
        shopModal.style.display = "block";
      });
      
      shopModal.addEventListener("mouseenter", function() {
        shopModal.style.display = "block";
      })

      shopModal.addEventListener("mouseleave", function () {
        shopModal.style.display = "none";
      });
    });
    </script>
@endguest
</header>

