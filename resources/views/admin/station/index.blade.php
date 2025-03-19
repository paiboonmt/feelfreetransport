<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col"><h3 class="text-gray-800 font-semibold">List of Stations</h3></div>
                            <div class="col">
                                <button class="bg-sky-500 hover:bg-sky-700 ...">Save changes</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Name Address</th>
                                    <th class="px-4 py-2">City</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($stations as $station)
                                <tr>
                                    <td class="border px-4 py-2">{{ $station->id }}</td>
                                    <td class="border px-4 py-2">{{ $station->name }}</td>
                                    <td class="border px-4 py-2">{{ $station->address }}</td>
                                    <td class="border px-4 py-2">{{ $station->city }}</td>
                                    <td class="border px-4 py-2">{{ $station->state }}</td>
                                    <td class="border px-4 py-2">{{ $station->zip }}</td>
                                    <td class="border px-4 py-2">{{ $station->phone }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('admin.station.edit', $station->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('admin.station.destroy', $station->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </
                 </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
