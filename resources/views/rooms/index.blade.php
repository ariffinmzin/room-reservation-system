<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Room List') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="table">
                      <!-- head -->
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Photo</th>
                          <th>Capacity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- row 1 -->
                        {{-- @foreach ($rooms as $room) --}}
                        @foreach ($rooms as $index => $room)
                            <tr class="hover">
                                {{-- <th>{{ $loop->iteration }}</th> --}}
                                <th>{{ $rooms->firstItem() + $index }}</th>
                                <td>{{ $room->name }}</td>
                                <td>
                                  @if($room->photo)
                                    <img src="{{ asset('uploads/rooms/'.$room->photo) }}" style="width:100px;">
                                  @else
                                    No Photo
                                  @endif
                                </td>
                                <td>{{ $room->capacity }}</td>
                            </tr> 
                        @endforeach
                      </tbody>
                    </table>
                    {{ $rooms->links() }}
                  </div>
            </div>
        </div>
    </div>


</x-app-layout>
