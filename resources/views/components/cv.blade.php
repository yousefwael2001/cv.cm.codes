@props(['herf' => null, 'wire' => null, 'v' => null])
<label class="custom-radio">
    <input wire:model={{$wire}} type="radio" name="cv" class="hidden" value="{{$v}}"/>
    <span class="border border-grayish relative radio-btn m-4 w-8/12 md:w-10/12 py-4 inline-block rounded-lg shadow-xl cursor-pointer">
        <i class="las la-check"></i>
        <img class=" w-9/12 m-auto" src="{{$herf}}">
    </span>
</label>