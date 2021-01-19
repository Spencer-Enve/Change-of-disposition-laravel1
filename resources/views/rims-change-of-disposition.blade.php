<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Change of Disposition Rims
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="">
                    <h1 class="text-center text-xl mt-5" id="answer_me_title"></h1>
                        <div class=" w-9/12 mx-auto my-12">
                            <div class="w-3/5 mx-auto">

                                <form action="/rims-change-of-disposition" method="post">

                                    @csrf

                                    <label class="block mt-5">
                                        <span class="text-gray-700">Scan serial number</span>
                                        <input name="serial_number" pattern="^[0-9]{8}$" oninvalid="setCustomValidity('Use Format 12345678')" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Scan Serial Number" >
                                    </label>

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

                                  <div class="mt-4">
                                    <span class="text-gray-700">Current Disposition</span>
                                    <div class="mt-2">
                                      <label class="inline-flex items-center">
                                        <input type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" id="current_disposition_1st" name="current_disposition" value="1ST">
                                        <span class="ml-2">1st</span>
                                      </label>
                                      <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" id="current_disposition_2nd" name="current_disposition" value="2ND">
                                        <span class="ml-2">2nd</span>
                                      </label>
                                      <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" id="current_disposition_scrap" name="current_disposition" value="Scrap">
                                        <span class="ml-2">Scrap</span>
                                      </label>
                                    </div>
                                  </div>



                                    <div class="mt-4">
                                        <span class="text-gray-700">New Disposition</span>
                                        <div class="mt-2">
                                          <label class="inline-flex items-center">
                                            <input type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" id="new_disposition_1st" name="new_disposition" value="1ST">
                                            <span class="ml-2">1st</span>
                                          </label>
                                          <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" id="new_disposition_2nd" name="new_disposition" value="2ND">
                                            <span class="ml-2">2nd</span>
                                          </label>
                                          <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" id="new_disposition_scrap" name="new_disposition" value="Scrap">
                                            <span class="ml-2">Scrap</span>
                                          </label>
                                        </div>
                                      </div>

                                        <input id="new_disposition_input" type="hidden"  name="id_description" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                        <div class="mt-5">
                                        <label for="new_defect" class="text-gray-700">Search New Defect</label>
                                            <input id="new_defect_input" type="text" list="new_defect" name="new_defect" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <datalist name="new_defect" id="new_defect">
                                                <option value="1-Blown_Bladder">
                                                <option value="2-Missing_Pins">
                                                <option value="3-Sidewall_Deformation">
                                                <option value="4-Flash_on_Sidewall">
                                                <option value="5-Bubbles_on_Sidewall">
                                            </datalist>
                                        </div>

                                        <label class="block mt-5">
                                            <span class="text-gray-700">Notes</span>
                                            <textarea name="notes" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" rows="3" placeholder="Enter additional comments here."></textarea>
                                          </label>

                                          <input type="hidden" name="person_changing_disposition" value="{{ Auth::user()->name }}">

                                          <div class="mt-5">
                                          <button class="block bg-white hover:bg-black hover:text-white uppercase text-lg mx-auto p-4 border rounded" type="submit">Submit</button>
                                          </div>

                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<div>
<div class="py-2">
    <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">

<p><strong>**Note the below table displays 25 of the most recent records!</strong></p>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Disposition</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Id/Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">New Disposition</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">New Id/Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Serial Number</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">New Defect</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Person Responsible</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Additional Comments</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Changed</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @if(count($submission)>1)

                                    @foreach($submission as $submission)

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $submission->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->current_disposition }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->current_id_description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->new_disposition }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->id_description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->serial_number }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->new_defect }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->person_changing_disposition }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->notes }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $submission->date_entered}}</td>
                                </tr>

                                    @endforeach
                                @else
                                <p>No Submissions found</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
