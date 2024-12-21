@php use Illuminate\Support\Facades\URL; @endphp
<div>


    @if($alert_mode == 0)

    @elseif($alert_mode == 1)
        <div style="width: 20%; margin: 10px auto; float: left; z-index: 1; position: fixed;">
            <div id="alert-3"
                 class="flex shadow-md items-center w-full p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                 role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    با موفقیت ایجاد شد!
                </div>
                <button wire:click="close_alert" type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif





    <div class="bg-gray-50 dark:bg-gray-800 w-full relative shadow-md p-2">
        <button wire:click="logout"
                class="text-white mr-2  bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 focus:transition-all hover:transition-all transition-all">
            {{__('خروج از سیستم')}}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-door-open mr-2" viewBox="0 0 16 16">
                <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                <path
                    d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
            </svg>
        </button>

        <br><br>
        <hr>
        <br>

        <form class="w-72 flex" wire:submit="search">


            <hr>
            <input wire:model="n_car_number" list="browsers"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-teal-400 focus:border-teal-400 block w-full p-2.5 dark:bg-gray-700
                     dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500
                      dark:focus:border-teal-500 focus:rounded-lg transition-all focus:transition-all hover:transition-all"
                   placeholder="جست و جو">

            <datalist id="browsers">
                @foreach($this->specifications as $specification)
                    <option value="{{ $specification->identification_number }}">
                        {{ $specification->car_name }}
                    </option>
                @endforeach
            </datalist>


            <button title="{{__('جست و جو')}}" type="submit"
                    class="text-white mr-2 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-full text-sm p-3  text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </button>
        </form>
    </div>


    <form class="text-center p-3 mx-auto w-96 dark:bg-gray-800 dark:text-white bg-gray-50 mt-4 rounded-lg shadow-md" wire:submit="create">
        <div class="grid grid-cols-3">
            <div class="m-2 col-span-3">
                <h1 class="font-bold">
                    {{__('ایجاد پست')}}
                </h1>
                <br>
                <hr>
            </div>


            <div class="ml-4 col-span-3">
                <x-text-input style="width: 100%;" wire:model="promise_number" placeholder="{{__('شماره قول نامه')}}" />
            </div>

            <div class="ml-4 col-span-3">
                <x-text-input style="width: 100%;" wire:model="identification_number" minlength="17" maxlength="17"
                              placeholder="{{__('شماره شاستی')}}" required/>
            </div>

            <div class="m-1 col-span-3">
                <select style="width: 100%" wire:model="cylinder_type" class="bg-gray-50 text-center border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500">
                    <option selected>{{__('نوع سیلندر')}}</option>
                    <option value="{{__('۴ سیلندر')}}">{{__('۴ سیلندر')}}</option>
                    <option value="{{__('۶ سیلندر')}}">{{__('۶ سیلندر')}}</option>
                    <option value="{{__('۵ سیلند')}}">{{__('۵ سیلندر')}}</option>
                    <option value="{{__('۸ سیلند')}}">{{__('۸ سیلندر')}}</option>
                    <option value="{{__('۱۰ سیلندر')}}">{{__('۱۰ سیلندر')}}</option>
                    <option value="{{__('۱۲ سیلندر')}}">{{__('۱۲ سیلند')}}</option>
                </select>
            </div>


            <div class="col-span-3 ml-4">
                <x-text-input style="width: 100%" wire:model="price_car" class="text-center" type="tel"
                              placeholder="{{__('قیمت ماشین')}}" required/>
            </div>


            <div class="ml-4 col-span-1">
                <x-text-input  wire:model="plat_number" placeholder="{{__('شماره پلاک')}}" required/>
            </div>

            <div class="ml-4 col-span-1">
                <x-text-input  wire:model="car_name" placeholder="{{__('نام ماشین')}}" required/>
            </div>

            <div class=" ml-4 col-span-1">
                <x-text-input wire:model="model" placeholder="{{__('مدل ماشین')}}" required/>
            </div>

            <div class=" ml-4 col-span-1">
                <x-text-input wire:model="color" placeholder="{{__('رنگ')}}" required/>
            </div>

            <div class=" ml-4 col-span-1">
                <x-text-input wire:model="car_fuel_type" placeholder="{{__('نوع سوخت')}}" required/>
            </div>

            <div class="ml-4 col-span-1">
                <x-text-input  wire:model="gearbox_type" placeholder="{{__('نوع گیربوکس')}}" required/>
            </div>

            <div class="col-span-3 ml-4">
                <x-text-input style="width: 100%" wire:model="gear_type" placeholder="{{__('نوع دنده')}}" required/>
            </div>

            <div class="col-span-3 ml-4">
                <x-text-input style="width: 100%" wire:model="seller" placeholder="{{__('نام و نام خانوادگی فروشنده')}}" required/>
            </div>

            <div class="col-span-3 ml-4">
                <x-text-input style="width: 100%" wire:model="mobile_seller" placeholder="{{__('شماره تماس فروشنده')}}" required/>
            </div>

            <div class="col-span-3 ml-4">
                <x-text-input style="width: 100%" wire:model="buyer" placeholder="{{__('نام و نام خانوادگی خریدار')}}" required/>
            </div>

            <div class="col-span-3 ml-4">
                <x-text-input style="width: 100%" wire:model="mobile_buyer" placeholder="{{__('شماره تماس خریدار')}}" required/>
            </div>









            <div class="ml-4 col-span-3">
                <x-text-input style="width: 100%;" wire:model="profit" placeholder="{{__('صود')}}" />
            </div>

            <div class="ml-4 col-span-3">
                <x-text-input style="width: 100%;" wire:model="loss" placeholder="{{__('ضرر')}}" />
            </div>


            <div class="ml-4 col-span-3">
                <textarea style="width: 100%;" wire:model="description" placeholder="{{__('توضیحات')}}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-teal-400 focus:border-teal-400 block w-full p-2.5 dark:bg-gray-700
                     dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500
                      dark:focus:border-teal-500 m-2  focus:rounded-lg transition-all focus:transition-all hover:transition-all"
                ></textarea>
            </div>
        </div>

        <hr>

        <x-primary-button type="submit" class="mb-3 mt-3">
            {{__('درج اطلاعات')}}
        </x-primary-button>



        <hr>

        <a href="{{ URL::signedRoute('detail') }}"
           class="text-white mt-2 bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800 focus:transition-all hover:transition-all transition-all">
            {{__('دیدن اطلاعت')}}
        </a>
    </form>


    <br><br><br><br>


</div>
