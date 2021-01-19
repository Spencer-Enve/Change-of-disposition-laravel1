<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Choose Product Type') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="">
                    <h1 class="text-center text-xl mt-5" id="answer_me_title">TYPE OF PRODUCT</h1>
                        <div class=" w-9/12 mx-auto my-12">
                            <div class="w-3/5 mx-auto">
                                  <button onclick="location.href='{{ url('rims-change-of-disposition') }}'" class="bg-white hover:bg-black hover:text-white text-black font-bold ml-15 py-4 px-8 rounded shadow">
                                    RIMS
                                  </button>
                                  <button onclick="location.href='{{ url('small-parts-change-of-disposition') }}'" class="bg-white hover:bg-black hover:text-white text-black font-bold mx-5 py-4 px-8 rounded shadow">
                                    SMALL PARTS
                                  </button>
                                  <button onclick="location.href='{{ url('frame-change-of-disposition') }}'" class="bg-white hover:bg-black hover:text-white text-black font-bold py-4 px-8 rounded shadow">
                                    FRAME
                                  </button>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
    </div>
</x-app-layout>
