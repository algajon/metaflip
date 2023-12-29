@extends('layouts.app')
@section('title', 'Register')

@section('content')
<div class="flex justify-center items-center mx-auto mt-20 bg-gray-150 font-onest min-h-full">
  <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
    <div class="mx-auto w-full max-w-sm lg:w-96">
      <div>
      <h2 class="mt-8 text-5xl font-bold text-center leading-9 tracking-tight text-gray-900">Create Account<span class="text-yellow-500 mt-2 text-4xl"><br></h2>

        <div class="mt-8">
          <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div>
              <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
              <div class="mt-2">
                <input id="name" type="text" class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
              @error('name')
              <p class="text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
              <div class="mt-2">
                <input id="email" type="email" class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6" name="email" value="{{ old('email') }}" required autocomplete="email">
              </div>
              @error('email')
              <p class="text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              <div class="mt-2">
                <input id="password" type="password" class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6" name="password" required autocomplete="new-password">
              </div>
              @error('password')
              <p class="text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="password-confirm" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
              <div class="mt-2">
                <input id="password-confirm" type="password" class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>

            <div class="form-group">
              <label for="profile_picture">Profile Picture</label>
              <input type="file" name="profile_picture" id="profile_picture" class="form-control">
            </div>

            <div class="flex items-center">
              <input id="subscribe" name="subscribe" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-yellow-600 focus:ring-yellow-600">
              <label for="subscribe" class="ml-3 block text-sm leading-6 text-gray-700">Subscribe to Newsletter</label>
            </div>

            <div class="flex items-center">
              <input id="agree-terms" name="agree-terms" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-yellow-600 focus:ring-yellow-600">
              <label for="agree-terms" require class="ml-3 block text-sm leading-6 text-gray-700">Agree to Terms and Conditions</label>
            </div>

            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-yellow-500 hover:bg-yellow-600 transition duration-200 ease-in-out px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus:ring focus:ring-yellow-600 focus:ring-opacity-50 focus:ring-offset-2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">{{ __('Register') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
