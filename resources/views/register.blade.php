@extends('layout')
@section('title','Register')
@section('content')
<div>
    <div class="mt-5">
    @if($errors->any())
        <div class="col-12">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>    
        @endforeach
        </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>    
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>    
    @endif
    </div>
<body class="font-onest">
  <bo class="top-6 relative py-4 bg-gradient-to-b flex items-center w-full justify-center h-screen" style="background-image: url(./images/.png)">
    <div class="w-1/2 font-onest mb-56 rounded-lg mr-8 bg-gray-300 text-black px-16 py-12">
        <h1 class="text-5xl font-bold mb-4">Almost there...</h1>
        <h1 class="text-xl font-semibold mb-4">Just type in your login credentials:</h1>
        <form action="{{route('register.post')}}" method="POST" class="">
            @csrf
            <div class="mb-4">
                <label for="firstName" class="block font-thin text-gray-950">First Name:</label>
                <input type="text" name="name" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="lastName" class="block font-thin text-gray-950">Last Name:</label>
                <input type="text" name="lastName" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="password" id="passwordId" class="block font-thin text-gray-950">Password:</label>
                <input type="password" name="password" class="border rounded w-full py-2 px-3" required>
                <input type="checkbox" class="mr-8 mb-4" onclick="hidePassword()">Show Password
            </div>
            <div class="mb-4">
                <label for="referral_code" id="referral_code" class="block font-thin text-gray-950">Password:</label>
                <input type="referral_code" name="referral_code" class="border rounded w-full py-2 px-3" required>
                <input type="checkbox" class="mr-8 mb-4" onclick="hidePassword()">Show Password
            </div>
            <divId class="mb-4">
                <label for="email" class="block font-thin text-gray-950">Email Address:</label>
                <input type="email" name="email" class="border rounded w-full py-2 px-3" required>
            </divId>
            <div class="mb-4">
                <label for="confirmEmail" class="block font-thin text-gray-950">Confirm Email:</label>
                <input type="email" name="confirmEmail" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <input type="checkbox" name="newsletter" value="1" class="mr-2">
                <label class= font-thin"text-gray-950">Subscribe to newsletter</label>
            </div>
            <div class="mb-4">
                <input type="checkbox" name="terms" value="1" class="mr-2" required>
                <label class= font-thin"text-gray-950">I agree to the terms and conditions</label>
            </div>
            <input type="submit" value="Register" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
        </form>
    </div>
    <div class="w-1/2 bg-transparent text-white  p-8">
        <!-- <img src="./images/.png" class="mx-auto h-96"> -->
        <div class="text-2xl font-semibold mb-4">Welcome to Our Platform</div>
        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac nunc et nisi vestibulum aliquet in eget libero.</p>
    </div>
    </bo>
  </div>
  <script>
    function hidePassword() {
  var x = document.getElementById("passwordId");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>  
@endsection