

<label for="current_id_description" class="text-gray-700">Choose the current product id & description</label>
<input list="current_id_description" name="current_id_description" id="current_disposition_input" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <datalist name="current_id_description" id="current_id_description">
        @if(count($rimFirst)>1)

        @foreach($rimFirst as $rimFirst)
        <option value="{{ $rimFirst->id_description }}">
        @endforeach
        @else
        <p>No Submissions found</p>
        @endif

    </datalist>


