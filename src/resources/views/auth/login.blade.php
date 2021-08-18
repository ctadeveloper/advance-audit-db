@extends('layouts.app')

@section('content')
<example-component></example-component>


<!-- <section class="container"> -->
    <section class="w-1/4  bg-white mx-auto my-10 border-2 border-opacity-5 rounded-lg py-20 px-16 shadow-md">
        <div class="text-center border-b-2 border-pink-200 border-opacity-30 pb-2">
            <p class="text-xl font-title text-gray-500 tracking-widest font-light">AUDITOR STAFF</p>
        </div>
        <form method="POST" class="p-5" action="{{ route('login') }}">
        @csrf
                <div class="py-3">
                    <!-- <label for="email" class="text-gray-700">{{ __('E-Mail Address') }}</label> -->
                    <input id="email" 
                    type="email" 
                    class="p-2 rounded-md bg-transparent border-2 border-pink-200 mt-1 block w-full border-transparent  focus:bg-white focus:outline-none focus:ring-1 focus:border-pink-400 @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email') }}" 
                    required autocomplete="email" 
                    placeholder="Username"
                    autofocus>

                    @error('email')
                        <span class="text-sm text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="py-3">
                    <input id="password" type="password" 
                    class="p-2 bg-transparent border-2 border-pink-200 rounded-md mt-1 block w-full  border-transparent focus:bg-white focus:outline-none focus:ring-1 focus:border-pink-400 
                    @error('password') is-invalid @enderror"
                    name="password" 
                    placeholder="Password"
                    required autocomplete="current-password">

                    @error('password')
                        <span class="text-sm text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="py-3">
                    <button type="submit" class="rounded-sm bg-pink-600 py-2 text-white hover:bg-pink-500 transition duration-150 ease-out w-full font-light tracking-widest">
                        {{ __('LOGIN') }}
                    </button>
                </div>
                <div class="py-2 flex justify-end">
                <div>
                    <div class="form-check">
                        <input class="rounded-md border-2 border-green-400 bg-green-400" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="text-gray-400 text-sm" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div>
                    @if (Route::has('password.request'))
                        <a class="text-gray-400 text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
</section>
@endsection
