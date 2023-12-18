<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>  Laravel Framework 10.37.3 </p>
                    <p>{{ __("You're logged in!") }}</p>
                    <p>  <i class="	fa fa-drivers-license-o" style="font-size:36px"></i> </p> <p>Your Info</p>
                    <p> Name: {{ Auth::user()->name}} </p>
                    <p>Email: {{ Auth::user()->email}} </p>

                    <p> 
                         <a href="{{  url('/showProfile')  }}"> <span class="block mt-4 underline hover:text-purple-600">ShowProfile (show time())</a></a> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
