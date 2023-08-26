@props(['name' => null, 'text' => null, 'wire' => null])
<div class="w-full mt-3">
    <label for="{{$name}}" class="text-xl text-dark-blue" >{{$text}}</label>
    <input wire:model={{$wire}} type="text" name="{{$name}}" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-full shadow-sm">
    @error($wire)
        <span class="text-red-700">حقل مطلوب</span>
    @enderror
</div>