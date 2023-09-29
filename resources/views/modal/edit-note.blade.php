<!-- Main modal -->
<div id="#editnote-modal{{ $item['timestamp'] }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-8 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">

            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="#editnote-modal{{ $item['timestamp'] }}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-700 uppercase text-center">Edit Catatan</h3>
                <form action="{{route('notes.edit', $item['timestamp'])}}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="mb-4">
                    <label id="deskripsi" class="block text-sm text-gray-700 mb-2">Timestamp</label>
                    <input id="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-2.5" value="{{ $item['timestamp'] }}" disabled>
                  </div>

                  <div class="mb-4">
                    <label id="deskripsi" class="block text-sm text-gray-700 mb-2">Sensor Name</label>
                    <input id="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-2.5" placeholder="Silver" disabled>
                  </div>

                  <div class="mb-6">
                    <label id="deskripsi" class="block text-sm text-gray-700 mb-2">Catatan</label>
                    <textarea name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder=" "></textarea>
                  </div>
                
                  <button type="submit" class="mt-4 w-full text-blue-600 bg-white border border-blue-600 hover:text-white hover:bg-blue-600 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>