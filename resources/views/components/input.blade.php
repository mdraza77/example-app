<div class="mt-4">
    <label class="block">{{$label}}</label>
    <input type="{{$type}}" placeholder="Name" name ="{{$name}}"  value="{{ old($name) }}" 
        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
    <span class="text-red-500 text-sm">
        {{-- @error('name')
            {{ $message }}
        @enderror --}}
        {{$demo}}
    </span>
</div>
