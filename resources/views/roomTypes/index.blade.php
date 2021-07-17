@extends('layouts.app')

@section('content')
<table class="shadow-lg bg-navy">
    <thead>
        <tr>
            <th class="bg-yellow-100 border text-left px-8 py-4">ID</th>
            <th class="bg-yellow-100 border text-left px-8 py-4">Name</th>
            <th class="bg-yellow-100 border text-left px-8 py-4">Description</th>
            <th class="bg-yellow-100 border text-left px-8 py-4">Picture</th>
            <th class="bg-yellow-100 border text-left px-8 py-4">Created</th>
            <th class="bg-yellow-100 border text-left px-8 py-4">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($roomTypes as $roomType)
            <tr>
                <td class="border px-8 py-4">{{ $roomType->id }}</td>
                <td class="border px-8 py-4">{{ $roomType->name }}</td>
                <td class="border px-8 py-4">{{ $roomType->description }}</td>
                <td class="border px-8 py-4">
                    <img width="200px" src="@php echo \Illuminate\Support\Facades\Storage::url($roomType->picture) @endphp" alt="">
                </td>
                <td class="border px-8 py-4">{{ date('F d, Y', strtotime($roomType->created_at)) }}</td>
                <td class="border px-8 py-4">
                <a href="{{route('room_types.edit',['room_type'=> $roomType->id])}}" alt = "Edit" title="Edit">Edit</a>   

                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
{{ $roomTypes->links() }}
@endsection
