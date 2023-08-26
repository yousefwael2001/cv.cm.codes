<div>
    <div x-data="{skils: false}" class="border-2 border-desaturated-blue p-2 rounded-xl my-3">
        <div @click="skils = !skils" class=" cursor-pointer flex gap-4 text-xl text-dark-blue">@include('svg.skils'){{__('Skills')}}</div> 
        <div x-show="skils">
            <div class="w-full flex gap-4 my-4">
                {{-- <input wire:model="skills.{{$index}}.skill" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/10 rounded-xl w-8/12 shadow-sm"> --}}
                    {{-- <input  type="" name="name" class=" block bg-dark-blue/10 border-dark-blue/10 rounded-xl w-8/12 shadow-sm"> --}}
                    {{-- <select name=“country”>
                        <option value="1">1</option> <option value="2"> 2</option>
                        </select> --}}
                    <button wire:click="add()" class = "w-fit bg-desaturated-blue rounded-xl text-grayish  font-bold">@include('svg.add')</button>
            </div>

            @foreach ($skills as $index =>$skill)
                <div class="w-full flex gap-4 my-4">
                    <input required wire:model="skills.{{$index}}.skill" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/10 rounded-xl w-8/12 shadow-sm">
                    {{-- <input  type="" name="name" class=" block bg-dark-blue/10 border-dark-blue/10 rounded-xl w-8/12 shadow-sm"> --}}
                    <select required wire:model="skills.{{$index}}.level" name=“country”>
                        <option value="1">1</option> <option value="2"> 2</option>
                        </select>
                    <button wire:click="remove({{$index}})" class = "w-fit bg-desaturated-blue rounded-xl text-grayish  font-bold">@include('svg.remove')</button>
                </div>
            @endforeach
            <button wire:click="save">save</button>

        </div> 
    </div> 
</div>
@livewireScripts