<script src="{{mix('./public/scripts/scripts.js') }}" type="module"></script>
@extends('layout')
@section('title', 'Store')
@section('content')


<h1 id="section2" class="text-4xl font-bold tracking-tight text-gray-900 font-onest ml-32 pt-36 pb-4 sm:text-6xl"><strong> Store </strong></h1>
<div id="productsGrid" class="container bg-gradient-to-t my-8 font-onest rounded-lg bg-gray-200 mx-auto p-4">
  <section class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-6">
  <article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openProductModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/earphones.png" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article><article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openProductModal('Product 2', 'Description of Product 2', './images/ethLogo.png')" >
      <img src="./images/ethlogo.png" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article><article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openProductModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/coolApe.png" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article><article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openProductModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/coolApe.png" alt="Product 1" class="w-full h-60 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article><article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openProductModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/ferrari.png" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article><article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openProductModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/macintosh.jpg" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article>
   <!-- <article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openProductModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/boredApe.png" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article><article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/ferrari.png" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
    </article><article class="bg-white p-4 rounded-lg shadow-md cursor-pointer relative flex flex-col" onclick="openModal('Bored Ape', 'Lorem Ipsum dolor sit amet', './images/boredApe.png')">
      <img src="./images/earphones.png" alt="Product 1" class="w-full h-50 object-cover rounded-md mb-2 flex-grow" />
      <h2 class="text-lg font-semibold">Bored Ape</h2>
      <p class="text-gray-600">Lorem Ipsum dolor sit amet.</p>
      <p class="text-sm italic text-gray-500">Owned by: 0xacB69452d804c4aCAE2Ee19e18b8cBCf5E6204Ae</p>
      <a class="text-gray-900 font-bold mt-2 self-end">🔹0.1 ETH</a>
      <a class="text-gray-800 font-bold ">🕒Time Remaining: 0d 16h 23m</a> 
      <button class="bg-yellow-300 card text-black font-bold px-3 py-1 shadow-xl rounded-2xl mt-2" onclick="addToCart('Bored Ape', 0.1)">Add to Cart</button>
  </article> -->
    </section>
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
          <div class="mt-8 size-96 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
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

<script>
   function openProductModal(productName, description, image) {
  document.getElementById('productTitle').textContent = productName;
  document.getElementById('productDescription').textContent = description;
  document.getElementById('productImage').src = image;

  // Display the modal
  document.getElementById('productModal').style.display = 'block';
}

function closeProductModal() {
  // Close the modal
  document.getElementById('productModal').style.display = 'none';
}

  </script>