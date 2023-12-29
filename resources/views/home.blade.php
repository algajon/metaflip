<script src="{{mix('./public/scripts/scripts.js') }}" type="module"></script>

@extends('layout')
@section('title','Home')
@section('content')

<style>
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

    .carousel-open:checked+.carousel-item {
      position: static;
      opacity: 100;
    }

    .carousel-item {
      -webkit-transition: opacity 0.6s ease-out;
      transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
      display: block;
    }

    .carousel-indicators {
      list-style: none;
      margin: 0;
      padding: 0;
      position: absolute;
      bottom: 2%;
      left: 0;
      right: 0;
      text-align: center;
      z-index: 10;
    }

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
      color: #001eff;
    }
    .content {
      scroll-behavior: smooth;
    }    
    .laptop__bottom {
		position: relative;
		z-index: 1;
		margin-right: -7%;
		margin-left: -7%;
		height: .7rem;
		background: #e9eff5;
		background-image: linear-gradient(to right, #d2dde9 0%, #f9fcff 15%, #e5ebf2 40%, #e5ebf2 60%, #f9fcff 85%, #d2dde9 100%);
		
		&::before {
			display: block;
			margin: 0 auto;
			width: 20%;
			height: .7rem;
			border-radius: 0 0 .2rem .2rem;
			background: #f6f9fc;
			background-image: linear-gradient(to right, #c3cfdb 0%, #f6f9fc 10%, #f6f9fc 90%, #c3cfdb 100%);
			content: " ";
		}
	}

	.laptop__under {
		position: absolute;
		top: 100%;
		left: 25%;
		display: block;
		width: 50%;
		height: 1.5rem;
		background: #e2e8f0;
		background-image: linear-gradient(to bottom, #e2e8f0, #bec7d1);

		&::after, &::before {
			position: absolute;
			top: 0%;
			right: 100%;
			bottom: 0;
			display: block;
			width: 50%;
			border-bottom-left-radius: 100%;
			background: inherit;
			content: " ";
		}

		&::after {
			right: auto;
			left: 100%;
			border-bottom-right-radius: 100%;
			border-bottom-left-radius: 0;
		}
	}

	.laptop__shadow {
		position: absolute;
		right: -10%;
		bottom: -2.5rem;
		left: -10%;
		z-index: 0;
		height: 2rem;
		background: radial-gradient(ellipse closest-side,#000,transparent);
		opacity: 0.5;
	}

  .laptop {
	position: relative;
	margin: auto;
	max-width: 80rem;
  }
	.laptop__screen {
		position: relative;
		z-index: 1;
		padding: 3%;
		border-radius: 2rem;
		background: #ecf1f7;
		background-image: linear-gradient(to bottom, #333, #111);
		box-shadow: 0 .1rem 0 #cfcfcf;
		border: 2px solid #ccc;
  }

</style>

<body class="content">
  
  <div class="relative font-onest isolate pt-4">
    <div class="absolute inset-x-0 transform-gpu overflow-hidden" aria-hidden="true">
      </div>
    <div class="py-24 sm:py-32 lg:pb-40">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h1 class="text-xl font-extrabold tracking-tight text-gray-900 sm:text-6xl">The <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600">Everything</span> Marketplace.</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/ourproducts" id="scrollToSection4" class="rounded-md bg-yellow-400 cursor-pointer px-3.5 py-2.5 text-lg font-bold text-gray-900 shadow-lg hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Get started</a>
          </div>
          <div class="container mt-2">
            <div class="laptop">
              <div class="laptop__screen"><img src="https://picsum.photos/1600/1000" width="1600" height="1000" alt="Screen"/>
        </div>
              <div class="laptop__bottom">
                <div class="laptop__under"></div>
              </div>
              <div class="laptop__shadow"></div>
            </div>
          </div>

        </div>
        
        <div class="mt-16 flow-root sm:mt-24">
          <!-- <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4"> -->
          </div>
        </div>
      </div>
    </div>
    <div class="relative font-onest isolate pt-14">
      <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
        <defs>
          <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
            <path d="M100 200V.5M.5 .5H200" fill="none" />
          </pattern>
        </defs>
        <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
          <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
        </svg>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
      </svg>
      <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
          <div class="flex">
            <div class="relative flex items-center gap-x-4 rounded-full px-2 py-1 text-sm leading-6 text-gray-600 ring-1 ring-black hover:ring-gray-900/20">
              <span class="font-semibold text-black text-center">Information below!</span>
            </div>
          </div>
          <h1 class="mt-10 max-w-lg text-4xl font-bold tracking-tight text-gray-900 sm:text-7xl">True owners,<br> good deals.</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Esse id magna consectetur fugiat non dolor in ad laboris magna laborum ea consequat. Nisi irure aliquip nisi adipisicing veniam voluptate id. In veniam incididunt ex veniam adipisicing sit.</p>
          <div class="mt-10 flex items-center gap-x-6">
            <a href="./ourproducts" class="rounded-md bg-yellow-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Visit our Shop</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
          </div>
        </div>
        <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
          <svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
            <title>App screenshot</title>
            <defs>
              <clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
                <rect width="316" height="684" rx="36" />
              </clipPath>
            </defs>
            <path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
            <path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
            <foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
              <img src="./images/chains.png" alt="" />
            </foreignObject>
          </svg>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#EBA937] to-[#EBA937] opacity-95 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
  </div>
</div>
<!-- <div class="carousel mt-10 relative shadow-2xl bg-white">
  <div class="carousel-inner relative overflow-hidden w-full">
    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
    <div class="carousel-item absolute opacity-0" style="height:25vh;">
      <div class="block w-100 h-full bg-repeat text-white" style="background-image: url(./images/banner1.jpg)">
        <h1 class="mt-4  max-w-lg right-20 font-bold tracking-tight absolute text-white text-7xl font-onest">Welcome to Metaflip! -->
            <!-- <p class="border border-t-8 mt-2 border-yellow-400 bg-gray-800 text-4xl">...your crypto emporium for your every day needs!</p> -->
          <!-- </h1>
      </div>
    </div>
        <label for="carousel-3"
          class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-500 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2"
          class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-600 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:25vh;">
          <div class="block h-full w-full bg-yellow-500 text-white text-5xl text-center"
            style="background-image: url(./images/banner2.jpg)">
            <h1 class="mt-4  max-w-lg left-20 font-bold tracking-tight absolute text-white text-7xl font-onest">Excellent Crypto Offers -->
            <!-- <p class="border border-t-8 mt-2 border-yellow-400 bg-gray-800 text-4xl">...your crypto emporium for your every day needs!</p> -->
          <!-- </h1>
          </div>
          </div>  
        <label for="carousel-1"
          class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-600 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3"
          class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-600 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:25vh;">
          <div class="block h-full w-full bg-yellow-500 text-white text-5xl text-center"
            style="background-image: url(./images/banner3.jpg)">
            <h1 class="mt-4 max-w-lg right-40 font-bold tracking-tight absolute text-white text-7xl font-onest">Excellent C2C Services -->
            <!-- <p class="border border-t-8 mt-2 border-yellow-400 bg-gray-800 text-4xl">...your crypto emporium for your every day needs!</p> -->
          <!-- </h1>
        </div>
        </div>
        <label for="carousel-2"
          class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-600 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1"
          class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-600 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <ol class="carousel-indicators">
          <li class="inline-block mr-3">
            <label for="carousel-1"
              class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-yellow-600">•</label>
          </li>
          <li class="inline-block mr-3">
            <label for="carousel-2"
              class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-yellow-600">•</label>
          </li>
          <li class="inline-block mr-3">
            <label for="carousel-3"
              class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-yellow-600">•</label>
          </li>
        </ol>

      </div>
    </div> -->
    <!-- <div class="border-4 drop-shadow-3xl px-16 border-white shadow-4xl"></div> -->
<!--  
  <div class="relative isolate overflow-hidden bg-gray-900 pb-16 pt-14 sm:pb-20">
      <img src="{{ asset('./images/blackhole.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-7xl px-6 lg:px-8 font-onest">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div id="section3" class="relative rounded-full px-3 py-1 text-sm font-semibold leading-6 ring-1 bg-white text-gray-900 ring-2 ring-white/20 hover:ring-white/10">
              Announcing our next round of funding. <a href="#" class="font-bold text-gray-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>
          <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-7xl"><strong>The Reselling Platform for Blockchain-Based Verified Products</strong></h1>
            <p class="my-8 text-3xl leading-8 font-bold text-gray-900 text-center">Metaflip is a two-sided platform enabling the everyday person to resell blockchain-based verified products to
other private persons.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="./login" class="rounded-md bg-yellow-400 card px-6 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-400">Sign In</a>
              <a href="#" class="text-sm font-semibold leading-6 text-white">Connect to Wallet <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div> -->

<!-- 
  <div class="bg-black py-8">
    <div class="container mx-auto flex flex-col font-onest md:flex-row text-white items-center">
      <div class="md:w-1/2">
        <img src="./images/blockchain.jpg" class="w-full h-full card" alt="MetaFlip">
      </div>
      <div class="md:w-1/2 md:ml-8 text-left">
        <h2 class="text-4xl font-bold mb-4">RESELLING PLATFORM OF CERTIFIED PRODUCTS</h2>

        <p class="text-xl mb-4">
          <strong>Only the highest quality Blockchain-Based Verified Products.</strong><br>
        </p>
      </div>
    </div>
  </div> -->
  <div id="section2" class="isolate overflow-hidden bg-gradient-to-r from-yellow-950 via-gray-700 to-green-950 font-onest" >
    <div class="mx-auto max-w-7xl px-6 pb-96 pt-24 text-center sm:pt-32 lg:px-8">
      <div class="mx-auto max-w-4xl">
        <h2 class="text-base font-bold leading-7 text-green-600">Wallet Options</h2>
        <p class="mt-2 text-4xl font-bold tracking-tight text-white sm:text-5xl">Your preferred Wallet, <br class="hidden sm:inline lg:hidden" />right at your fingertips!</p>
      </div>
      <div class="relative mt-6">
        <p class="mx-auto max-w-2xl text-lg leading-8 text-white/60">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit numquam eligendi quos odit doloribus molestiae voluptatum.</p>
        
      </div>
    </div>
      <div class="flow-root bg-gradient-to-l from-green-950 via-gray-700 to-yellow-950 pb-24 sm:pb-32">
        <div class="-mt-80">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-md grid-cols-1 gap-8 lg:max-w-4xl lg:grid-cols-2">
              <div  class="flex flex-col justify-between rounded-3xl bg-gradient-to-b from-white to-gray-200 drop-shadow-xl p-8 shadow-xl ring-1 ring-gray-900/10 sm:p-10">
                <div>
                  <img src="/images/metamask.png" class="h-42 w-42 items-center"></img>
                  <div class="mt-4 flex items-baseline gap-x-2">
                    <span class="text-5xl font-bold tracking-tight text-gray-900">Metamask Connection</span>
                  </div>
                  <p class="mt-6 leading-7 text-xl text-gray-600">Secure payments with MetaMask.</p>
                  <ul role="list" class="mt-10 space-y-4 text-sm leading-6 text-gray-600">
                    <li  :key="feature" class="flex gap-x-3">
                      <CheckIcon class="h-6 w-5 flex-none text-yellow-600" aria-hidden="true" />
                      
                    </li>
                  </ul>
                </div>
                <a onclick="web3Login();" id="connectButton" class="mb-4 text-xl block rounded-md bg-orange-500 px-3.5 py-2 text-center font-semibold leading-6 text-white shadow-sm hover:bg-orange-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Connect using Metamask</a>
              </div>
              <div  class="flex flex-col justify-between rounded-3xl drop-shadow-xl bg-gray-800 p-8 shadow-xl ring-1 ring-gray-900/10 sm:p-10">
                <div>
                  <img src="/images/solana.png" class="h-82 w-92 justify-items-center mx-auto my-4 items-center"></img>
                  <div class="mt-4 flex items-baseline gap-x-2">
                    <span class="text-5xl font-bold tracking-tight mt-4 text-gray-200">Solana Connection</span>
                  </div>
                  <p class="mt-6 text-xl leading-7 text-gray-300">Safe and hardware-based payments.</p>
                  <ul role="list" class="mt-10 space-y-4 text-sm leading-6 text-gray-600">
                    <li :key="feature" class="flex gap-x-3">
                      <CheckIcon class="h-6 w-5 flex-none text-yellow-600" aria-hidden="true" />
                      
                    </li>
                  </ul>
                </div>
                <a onclick="web3Login();" id="connectButton" class="mb-4 text-xl block rounded-md bg-green-500 px-3.5 py-2 text-center font-semibold leading-6 text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">Connect using Phantom</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white py-20 sm:pt-16 mx-auto lg:overflow-hidden lg:pb-14 lg:pt-8">
        <div class="mx-auto max-w-7xl lg:px-8">
          <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <div class="mx-auto max-w-md px-6 sm:max-w-2xl sm:text-center lg:flex lg:items-center lg:px-0 lg:text-left">
              <div class="lg:py-24">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl lg:mt-6 xl:text-6xl">
                  <span class="block text-gray-900">Sign up Now...</span>
                  <span class="block text-yellow-400">It's Free!</span>
                </h1>
                <p class="mt-3 text-base text-gray-900 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
                <div class="mt-10 sm:mt-12">
                  <form action="#" class="sm:mx-auto sm:max-w-xl lg:mx-0">
                    <div class="sm:flex">
                      <div class="min-w-0 bg-gray-200 flex-1">
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" type="email" placeholder="Enter your email" class="block w-full rounded-md border-0 px-4 py-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:ring-offset-2 focus:ring-offset-gray-900">
                      </div>
                      <div class="mt-3 sm:ml-3 sm:mt-0">
                        <a href="./register" type="submit" class="block w-full rounded-md bg-yellow-400 px-4 py-3 font-bold text-gray-900 shadow hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:ring-offset-2 focus:ring-offset-gray-900">Register</a>
                      </div>
                    </div>
                    <p class="mt-3 text-sm text-gray-700 sm:mt-4">By providing your email, you agree to our <a href="#" class="font-bold text-blue-900">terms of service</a>.</p>
                  </form>
                </div>
              </div>
            </div>
            <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
              <svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
                <title>App screenshot</title>
                <defs>
                  <clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
                    <rect width="316" height="684" rx="36" />
                  </clipPath>
                </defs>
                <path fill="#4B5563" d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
                <path fill="#343E4E" d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
                <foreignObject width="316" height="684" transform="translate(24 24)" clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
                  <img src="./images/walletconnect.png" alt="" />
                </foreignObject>
              </svg>
            </div>
          </div>
      </div>
    </div>
    </div>
  <div id="productModal" class="fixed font-onest w-full h-full bg-black shadow-lg bg-opacity-0 hidden items-center justify-center z-10 top-6 left-48">
    <div class="bg-white w-4/5 h-4/5 p-4 rounded-lg shadow-lg">
      <a class="text-gray-600 text-5xl right-20 top-3 float-right" onclick="closeProductModal()">&times;</a>
      <main class="mx-auto mt-8 max-w-2xl px-4 pb-16 sm:px-6 sm:pb-24 lg:max-w-7xl lg:px-8">
        <div class="lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8">
          <div class="lg:col-span-5 lg:col-start-8">
            <div class="flex justify-between">
              <h1 class="text-xl font-medium text-gray-900" id="productTitle"></h1>
              <p class="text-xl font-medium text-gray-900">$35</p>
            </div>
            <p class="text-gray-500" id="productDescription">Product description goes here.</p>
            <div class="mt-4">
              <h2 class="sr-only">Reviews</h2>
              <div class="flex items-center">
                <p class="text-sm text-gray-700">
                  3.9
                  <span class="sr-only"> out of 5 stars</span>
                </p>
                <!-- Add more rating stars here as in your original code -->
              </div>
            </div>
          </div>

          <!-- Image -->
          <div class="mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
            <h2 class="sr-only">Images</h2>
            <img src="product_image.jpg" alt="Product Image" height="1000" weight="1000" id="productImage">
          </div>

        <div class="flex justify-items gap-20 mt-72"> 
        <button onclick="addToCart()" class="bg-yellow-300 text-black text-center font-bold px-8 py-3 my-3 shadow-md rounded-lg inline-block hover:bg-yellow-500">
          Add to Cart
        </button>
        <button type="button" id="payButton" 
          class="bg-yellow-300 text-black text-center font-bold px-8 py-3 my-3 shadow-md rounded-lg inline-block hover:bg-yellow-500">
          Pay Now
        </button>
      </div> 
        </div>
      </main>
    </div>
  </div>
</div>
</div>
  </body>
  @stop
  @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>
  <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>
  <script>
const scrollToSection2Button = document.getElementById("scrollToSection2");
const scrollToSection3Button = document.getElementById("scrollToSection3");
const section2 = document.getElementById("section2");
const section3 = document.getElementById("section3");

// Add click event listeners to the buttons
scrollToSection2Button.addEventListener("click", () => {
    section2.scrollIntoView({ behavior: "smooth" });
});

scrollToSection3Button.addEventListener("click", () => {
    section3.scrollIntoView({ behavior: "smooth" });
});


  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  }

  function checkout() {
    cart.length = 0;
    updateCartDisplay();
    alert("Checkout successful!");
  }

  // Metamask Connection

  async function web3Login() {
  if (!window.ethereum) {
      alert('Wallet not detected. Please install a wallet first.');
      return;
  }

  const provider = new ethers.providers.Web3Provider(window.ethereum);

  let response = await fetch('/web3-login-message');
  const message = await response.text();

  await provider.send("eth_requestAccounts", []);
  const address = await provider.getSigner().getAddress();
  const signature = await provider.getSigner().signMessage(message);

  response = await fetch('/web3-login-verify', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({
          'address': address,
          'signature': signature,
          '_token': '{{ csrf_token() }}'
      })
  });
  const data = await response.text();

  console.log(data);
}

  </script>
@endsection
</html>