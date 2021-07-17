@extends('layouts.app')

@section('content')

<form action="{{ route('room_types.update', ['room_type' => $roomType]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="flex h-screen bg-gray-200 items-center justify-center  mt-32 mb-32">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
          <div class="flex justify-center py-4">
            <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            </div>
          </div>
      
          <div class="flex justify-center">
            <div class="flex">
              <h1 class="text-gray-600 font-bold md:text-2xl text-xl">update roomType </h1>
            </div>
          </div>
      
          <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Name</label>
            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text"  required value="{{ $roomType->name ?? '' }}"  />
            <small class="form-text text-muted">The room type name.</small>
    
        </div>
      
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Description</label>
              <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text"  required value="{{ $roomType->description ?? '' }}" />
              <small class="form-text text-muted">The room type description.</small>
    
            </div>
            
          </div>
      
          <div>
            
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="ppercase md:text-sm text-xs text-gray-500 text-light font-semibold" for="picture">Picture</label>

                <div class="custom-file">
                    <input name="picture" type="file" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Picture"/>
                </div>
            </div>
            
      
        
          <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
            <button type="submit" class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Update Room</button>

            <a href="{{ route('room_types.index') }}" class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Cancel</a>
    
          </div>
      
        </div>
      </div>

    
</form>


@endsection