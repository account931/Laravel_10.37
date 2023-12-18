<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Time here 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 
                    <p>  <i class="fa fa-clock-o" style="font-size:56px"></i> </p> <p>Your Time</p>
                    <p> Time {{ $time}} </p>
                    </br></br>
                    <a href="{{  url('/')  }}"> <i class="fa fa-mail-reply-all" style="font-size:36px;color:red";></i> <span class="block mt-4 underline hover:text-purple-600"">  Go back </a></a>  
                   
                    <p> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



