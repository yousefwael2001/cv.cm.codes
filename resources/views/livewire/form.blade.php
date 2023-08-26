<div>
    {{-- personal details --}}
    <div x-data = "{tab: 1, activeTap:'bg-desaturated-blue text-grayish', inactiveTap:'bg-grayish text-desaturated-blue'}" class=" w-10/12 md:w-9/1 lg:w-8/12  mx-auto my-20 rounded-3xl p-6 bg-white shadow-2xl">
        <h1 x-show="tab === 1" class=" text-center text-3xl lg:text-5xl text-dark-blue font-bold ">{{__('Personal details')}}</h1>
        <h1 x-show="tab === 2" class=" text-center text-3xl lg:text-5xl text-dark-blue font-bold ">{{__('Professional details')}}</h1>
        <h1 x-show="tab === 3" class=" text-center text-3xl lg:text-5xl text-dark-blue font-bold ">{{__('Final template')}}</h1>
        <div class="flex w-full md:w-6/12 mx-auto px-4 mt-8" >
            <div class="z-10">
                <div :class="tab === 1 || tab === 2 || tab === 3? activeTap : inactiveTap" class="rounded-full w-12 h-12 pt-2 text-3xl">
                    @include('svg.person')                     
                </div>
                <h1  class="">{{__('Personal')}}</h1>
            </div>
            <div :class="tab === 2 || tab === 3? activeTap : inactiveTap" class=" h-[4px] mt-6 -mx-8  w-full"> </div>
            <div class="z-10">
                <div :class="tab === 2 || tab === 3? activeTap : inactiveTap" class="text-center mx-auto rounded-full  w-12 h-12 pt-2 text-3xl">
                    @include('svg.doc')                      
                </div>
                <h1  class="">{{__('Professional')}}</h1>
            </div>
            <div :class="tab === 3 ? activeTap : inactiveTap" class="h-[4px] mt-6 -mx-8  w-full"> </div>
            <div class="z-10">
                <div :class="tab === 3 ? activeTap : inactiveTap" class="text-center mx-auto rounded-full  w-12 h-12 pt-2 text-3xl">
                    @include('svg.pencil')                      
                </div>
                <h1  class="">{{__('Template')}}</h1>
            </div>
        </div>
    <div x-show="tab === 1" class=" mt-6 w-full md:w-9/12 mx-auto">
        <form action="">
            <div class="md:grid md:grid-cols-2 md:gap-2">
                <x-input wire="fname" name="fname" text="{{__('First Name*')}}" r="required"/>
                <x-input wire="lname" name="lname" text="{{__('Last Name*')}}" r="required"/>
                <x-input wire="email" name="email" text="{{__('Email address*')}}" r="required"/>
                <x-input wire="phone" name="phone" text="{{__('Phone number*')}}" r="required"/>
                <x-input wire="address" name="address" text="{{__('Address')}}"/>
                <x-input wire="nationality" name="Nationality" text="{{__('Nationality')}}"/>
            </div>
        </form>
        <button wire:click="sumbit" @click="tab = 2" class=" block m-auto mt-4 bg-desaturated-blue p-2 w-20 rounded-lg shadow-md text-grayish">{{__('Next')}}</button>            
    </div>
    {{-- end personal details --}}




    <div  x-show="tab === 2" class="mt-6 w-full md:w-9/12 mx-auto">
        
        {{-- person --}}
        <div x-data="{person: false}" class="border-2 border-desaturated-blue p-2 rounded-xl my-3">
            <div @click="person = !person" class=" cursor-pointer flex gap-4 text-xl text-dark-blue">@include('svg.person1'){{__('Brief description')}}</div> 
            <div x-show="person">
                <div class="w-full flex gap-4 my-4">
                    <textarea wire:model="brief" rows="6" class=" block bg-dark-blue/10 border-dark-blue/10 rounded-xl w-full shadow-sm"></textarea>
                </div>
            </div> 
        </div>  
        {{-- end person --}} 


        {{-- skills --}}
        <div x-data="{skils: false}" class="border-2 border-desaturated-blue p-2 rounded-xl my-3">
            <div @click="skils = !skils" class=" cursor-pointer flex gap-4 text-xl text-dark-blue">@include('svg.skils'){{__('Skills')}}</div> 
            <div x-show="skils">
                <div class="w-full flex gap-4 my-4">
                    <div class="w-6/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">المهارة</div>
                    <div class="w-4/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">المستوى</div>
                </div>
                @foreach ($skills as $index =>$skill)
                    <div class="w-full flex gap-4 mt-4">
                        <input required wire:model="skills.{{$index}}.skill" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-6/12 shadow-sm">
                        <select required wire:model="skills.{{$index}}.level" name=“country” class="w-4/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">
                            <option>اختار</option> <option value="1"> 1</option><option value="2"> 2</option><option value="3"> 3</option><option value="4"> 4</option><option value="5"> 5</option>
                        </select>
                        <button wire:click="removeS({{$index}})" class = "w-1/12 h-fit my-auto bg-desaturated-blue rounded-xl text-grayish  font-bold inline">@include('svg.remove')</button>
                    </div>
                    <div class="flex gap-4">
                        @error('skills.'.$index.'.skill')
                            <span class="w-6/12 text-red-700">حقل مطلوب</span>
                        @enderror

                        @error('skills.'.$index.'.level')
                            <span class="text-red-700">حقل مطلوب</span>
                        @enderror
                    </div>
                @endforeach
                <div class="mx-auto w-fit" >
                    <button wire:click="addS()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.add')</button>
                    <button wire:click="saveS()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.done')</button>
                </div>
            </div> 
        </div> 
        {{-- end skills --}}
        

        {{-- education --}}
        <div x-data="{education: false}" class="border-2 border-desaturated-blue p-2 rounded-xl my-3">
            <div @click="education = !education" class=" cursor-pointer flex gap-4 text-xl text-dark-blue">@include('svg.education'){{__('Education')}}</div> 
            <div x-show="education ">
                <div class="w-full flex gap-1 my-4">
                    <div class="w-4/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">اسم الجهة</div>
                    <div class="w-4/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">الدرجة العلمية</div>
                    <div class="w-3/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">سنة التخرج</div>
                </div>
                @foreach ($education as $index =>$education)
                    <div class="w-full flex gap-1 mt-4">
                        <input wire:model="education.{{$index}}.schoolName" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-4/12 shadow-sm">
                        <input wire:model="education.{{$index}}.degree" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-4/12 shadow-sm">
                        <input wire:model="education.{{$index}}.year" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-3/12 shadow-sm">
                        <button wire:click="removeEd({{$index}})" class = " h-fit my-auto bg-desaturated-blue rounded-xl text-grayish  font-bold inline">@include('svg.remove')</button>
                    </div>
                    <div class="flex gap-4">
                        @error('education.'.$index.'.schoolName')
                            <span class="w-4/12 text-red-700">حقل مطلوب</span>
                        @enderror

                        @error('education.'.$index.'.degree')
                            <span class="w-4/12 text-red-700">حقل مطلوب</span>
                        @enderror

                        @error('education.'.$index.'.year')
                            <span class="text-red-700">حقل مطلوب</span>
                        @enderror
                    </div>
                @endforeach
                <div class="mx-auto w-fit" >
                    <button wire:click="addEd()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.add')</button>
                    <button wire:click="saveEd()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.done')</button>
                </div>
                </div> 
        </div>  
        {{-- end education --}}


        {{-- experiences --}}
        <div x-data="{experiences: false}" class="border-2 border-desaturated-blue p-2 rounded-xl my-3">
            <div @click="experiences = !experiences" class=" cursor-pointer flex gap-4 text-xl text-dark-blue">@include('svg.experiences'){{__('Experiences')}}</div> 
            <div x-show="experiences">
                <div class="w-full flex gap-4 my-4">
                    <div class="w-6/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">الخبرة</div>
                    <div class="w-4/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">المدة</div>
                </div>
                @foreach ($experiences as $index =>$experience)
                    <div class="w-full flex gap-4 mt-4">
                        <input required wire:model="experiences.{{$index}}.experience" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-6/12 shadow-sm">
                        <input required wire:model="experiences.{{$index}}.time" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-4/12 shadow-sm">
                        <button wire:click="removeEx({{$index}})" class = "w-1/12 h-fit my-auto bg-desaturated-blue rounded-xl text-grayish  font-bold inline">@include('svg.remove')</button>
                    </div>
                    <div class="flex gap-4">
                        @error('experiences.'.$index.'.experience')
                            <span class="w-6/12 text-red-700">حقل مطلوب</span>
                        @enderror

                        @error('experiences.'.$index.'.time')
                            <span class="w-4/12 text-red-700">حقل مطلوب</span>
                        @enderror
                    </div>
                @endforeach
                <div class="mx-auto w-fit" >
                    <button wire:click="addEx()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.add')</button>
                    <button wire:click="saveEx()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.done')</button>
                </div>
            </div> 
        </div> 
        {{-- end experiences --}}


        {{-- Languages --}}
        <div x-data="{Languages: false}" class="border-2 border-desaturated-blue p-2 rounded-xl my-3">
            <div @click="Languages = !Languages" class=" cursor-pointer flex gap-4 text-xl text-dark-blue">@include('svg.Languages'){{__('Languages')}}</div> 
            <div x-show="Languages">
                <div class="w-full flex gap-4 my-4">
                    <div class="w-6/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">اللغة</div>
                    <div class="w-4/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">المستوى</div>
                </div>
                @foreach ($Languages as $index =>$Language)
                    <div class="w-full flex gap-4 mt-4">
                        <input required wire:model="Languages.{{$index}}.Language" type="text" name="name" class=" block bg-dark-blue/10 border-dark-blue/20 rounded-xl w-6/12 shadow-sm">
                        <select required wire:model="Languages.{{$index}}.level" name=“country” class="w-4/12 text-center bg-dark-blue/10 border-dark-blue/20 border rounded-lg">
                            <option>اختار</option> <option value="1"> 1</option><option value="2"> 2</option><option value="3"> 3</option><option value="4"> 4</option><option value="5"> 5</option>
                        </select>
                        <button wire:click="removeL({{$index}})" class = "w-1/12 h-fit my-auto bg-desaturated-blue rounded-xl text-grayish  font-bold inline">@include('svg.remove')</button>
                    </div>
                    <div class="flex gap-4">
                        @error('Languages.'.$index.'.Language')
                            <span class="w-6/12 text-red-700">حقل مطلوب</span>
                        @enderror

                        @error('Languages.'.$index.'.level')
                            <span class="text-red-700">حقل مطلوب</span>
                        @enderror
                    </div>
                @endforeach
                <div class="mx-auto w-fit" >
                    <button wire:click="addL()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.add')</button>
                    <button wire:click="saveL()" class = " px-2 py-1 mt-5 bg-desaturated-blue rounded-lg text-grayish shadow-md font-bold">@include('svg.done')</button>
                </div>
            </div> 
        </div> 
        {{-- end Languages --}}

        <button @click="tab = 3" wire:click="updateB" class=" block m-auto mt-4 bg-desaturated-blue p-2 w-20 rounded-lg shadow-md text-grayish">{{__('Next')}}</button>    
        <button @click="tab = 1" class=" block m-auto w-20 text-desaturated-blue">{{__('Previous')}}</button>    
    </div>

    {{-- final template --}}
    <div x-show="tab === 3" class=" mt-6 w-full md:w-9/12 text-center mx-auto">
        <div class="md:grid md:grid-cols-3">
            
            <x-cv wire="t" v="down" herf="https://www.livecareer.com/wp-content/uploads/2023/02/free-template-cool-CV-page-1.svg"/>
            <x-cv wire="t" v="2" herf="https://www.livecareer.com/wp-content/uploads/2023/02/free-template-cool-CV-page-1.svg"/>
            <x-cv wire="t" v="3" herf="https://www.livecareer.com/wp-content/uploads/2023/02/free-template-cool-CV-page-1.svg"/>
            <x-cv wire="t" v="4" herf="https://www.livecareer.com/wp-content/uploads/2023/02/free-template-cool-CV-page-1.svg"/>

        </div>
        <a href="{{$t}}" target="__blank"><button wire:click="updatet" class=" m-auto mt-4 bg-desaturated-blue p-2  rounded-lg shadow-md text-grayish flex gap-2">@include('svg.download') {{__('Download')}}</button></a>   
        <button @click="tab = 2" class=" block m-auto w-20 text-desaturated-blue">{{__('Previous')}}</button>    
   
    </div>
</div>

</div>
@livewireScripts
