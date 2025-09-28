@extends('auth.auth')

@section('section')
<div class="w-full flex items-center bg-slate-700 justify-center text-white min-h-screen">
    <div class="flex-col mb-4">
        <div class="text-white mt-4 flex flex-col bg-black p-6 w-96 rounded-md">
            <h2 class="text-2xl font-serif font-bold mb-12 text-center">Login</h2>
            <form action="{{ route('login') }}" method="post">
              <div class="mb-4 relative">
                 <label for="email" class="capitalize text-white text-xl font-bold cursor-pointer">username :</label>
                 <div class="relative group">
                    <span class="absolute inset-y-0 flex items-center pl-2 text-white group-focus-within:text-sky-500 translate-y-[2px]">
                        <i data-feather="mail" class="cursor-pointer"></i>
                    </span>
                     <input type="email" id="email" name="email" class="w-full pl-14 p-2 mt-2 border-2 border-white rounded-lg focus:border-sky-500 focus:outline-none" autocomplete="off" required />
                 </div>
              </div>
              <div class="mb-4 relative">
                  <label for="password" class="text-white font-bold text-xl cursor-pointer">Password :</label>
                  <div class="relative group">
                    <span class="absolute inset-y-0 flex items-center pl-2 text-white group-focus-within:text-sky-500 translate-y-[2px]">
                        <i data-feather="eye-off" class="cursor-pointer"></i>
                    </span>
                      <input type="password" name="password" id="password" class="w-full pl-14 p-2 mt-2 border-2 border-white rounded-lg focus:border-sky-500 focus:outline-none" autocomplete="off" required />
                  </div>
              </div>
            </form>
            <div class="flex w-full justify-between mt-2 ">
                <div class="flex gap-2 items-center">
                    <input type="checkbox" name="remember" id="remember">
                    <label class="text-base">Remember me</label>
                </div>
                <a href="" class="text-base">Forgot password ?</a>
            </div>
        </div>
    </div>
</div>
@endsection