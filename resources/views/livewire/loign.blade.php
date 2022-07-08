<div>
<div class="flex justify-center items-center h-full">
        <div class="my-14 mb-6 mt-40">
            <img class="object-cover w-full h-full rounded-full"
                        src={{ asset('/storage/image/polines1.png') }}
                        alt="" aria-hidden="true" />

        </div>
    </div>




    <div class="flex justify-center items-center h-full">
        @if (session()->has('error'))
            <div class="bg-red-400 p-5 rounded my-4">
                <b>{{ session('error') }}</b>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="bg-green-400 p-5 rounded my-4">
                <b>{{ session('success') }}</b>
            </div>
        @endif
        <div class="my-6 mt-0">
            <form action="" class="w-72" wire:submit.prevent="login">
                <input
                    class="w-72 py-3 px-2 my-4 text-sm text-gray-700 placeholder-gray-900 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-dark focus:border-red-300 focus:outline-none focus:shadow-outline-red form-input"
                    type="text" placeholder="Enter Username" wire:model='username' />
                @error('username')
                    <span class="text-red-600">{{ $message }}</span> <br>
                @enderror
                <br>
                <input
                    class="w-72 py-3 px-2 my-4 text-sm text-gray-700 placeholder-gray-900 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-dark focus:border-red-300 focus:outline-none focus:shadow-outline-red form-input"
                    type="password" placeholder="Enter the password" wire:model='password' />
                @error('password')
                    <span class="text-red-600">{{ $message }}</span> <br>
                @enderror
                <br>
                <button
                    class="px-4 py-2 my-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-bluebtn-500 border border-transparent rounded-lg active:bg-lightblue-600 hover:bg-lightblue-600 focus:outline-none focus:shadow-outline-gray"
                    type="submit">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
