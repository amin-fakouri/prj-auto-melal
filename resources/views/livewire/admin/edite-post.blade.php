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
                    با موفقیت بروزرسانی شد!
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

    <form class="text-center p-2 mx-auto w-96 bg-gray-50 mt-4 rounded-lg shadow-md dark:bg-gray-800 dark:text-white"
          wire:submit="update({{ $find_id->id }})">
        <h1 class="font-bold text-xl">ویرایش اطلاعات</h1>
        <br>
        <hr>
        <br>
        <div class="grid grid-cols-3">
            <div class="ml-4 col-span-3">
                <label class="text-right float-right m-2.5">{{__('سود:')}}</label>
                <x-text-input style="width: 100%;" wire:model.fill="profit" value="{{ $find_id->profit }}" placeholder="{{__('سود')}}" />
            </div>

            <div class="ml-4 col-span-3">
                <label class="text-right float-right m-2.5">{{__('ضرر:')}}</label>
                <x-text-input style="width: 100%;"
                              value="{{ $find_id->loss }}"
                              wire:model.fill="loss" placeholder="{{__('ضرر')}}" />
            </div>

            <div class="ml-4 col-span-3">
                <label class="text-right float-right m-2.5">{{__('شماره قول نامه:')}}</label>
                <x-text-input style="width: 100%;" wire:model.fill="promise_number"
                              value="{{ $find_id->promise_number }}"
                              placeholder="{{__('شماره قول نامه')}}" />
            </div>

            <div class="ml-4 col-span-3">
                <label class="text-right float-right m-2.5">{{__('شماره شاستی:')}}</label>
                <x-text-input style="width: 100%;" wire:model.fill="identification_number" minlength="17" maxlength="17"
                             value="{{ $find_id->identification_number }}" placeholder="{{__('شماره شاستی')}}" required/>
            </div>

            <div class="ml-4 col-span-1">
                <label class="text-right float-right m-2.5">{{__('شماره پلاک:')}}</label>
                <x-text-input  wire:model.fill="plat_number"
                               value="{{ $find_id->plat_number }}"
                               placeholder="{{__('شماره پلاک')}}" required/>
            </div>

            <div class="ml-4 col-span-1">
                <label class="text-right float-right m-2.5">{{__('نام ماشین:')}}</label>
                <x-text-input  wire:model.fill="car_name"
                               value="{{ $find_id->car_name }}"
                               placeholder="{{__('نام ماشین')}}" required/>
            </div>

            <div class=" ml-4 col-span-1">
                <label class="text-right float-right m-2.5">{{__('مدل ماشین:')}}</label>
                <x-text-input wire:model.fill="model"
                              value="{{ $find_id->model }}"
                              placeholder="{{__('مدل ماشین')}}" required/>
            </div>

            <div class=" ml-4 col-span-1">
                <label class="text-right float-right m-2.5">{{__('رنگ:')}}</label>
                <x-text-input wire:model.fill="color"
                              value="{{ $find_id->color }}"
                              placeholder="{{__('رنگ')}}" required/>
            </div>

            <div class=" ml-4 col-span-1">
                <label class="text-right float-right m-2.5">{{__('نوع سوخت:')}}</label>
                <x-text-input wire:model.fill="car_fuel_type"
                              value="{{ $find_id->car_fuel_type }}"
                              placeholder="{{__('نوع سوخت')}}" required/>
            </div>

            <div class="ml-4 col-span-1">
                <label class="text-right float-right m-2.5">{{__(' گیربوکس:')}}</label>
                <x-text-input  wire:model.fill="gearbox_type"
                               value="{{ $find_id->gearbox_type }}"
                               placeholder="{{__('نوع گیربوکس')}}" required/>
            </div>

            <div class="m-1 col-span-3">
                <label class="text-right float-right m-2.5">{{__('نوع سیلندر:')}}</label>
                <x-text-input style="width: 100%" value="{{ $find_id->cylinder_type }}" wire:model.fill="cylinder_type" />
            </div>


            <div class="col-span-3 ml-4">
                <label class="text-right float-right m-2.5">{{__('نوع دنده:')}}</label>
                <x-text-input style="width: 100%"
                              value="{{ $find_id->gear_type }}"
                              wire:model.fill="gear_type" placeholder="{{__('نوع دنده')}}" required/>
            </div>


            <div class="col-span-3 ml-4">
                <label class="text-right float-right m-2.5">{{__('قیمت:')}}</label>
                <x-text-input style="width: 100%"
                              value="{{ $find_id->price_car }}"
                              wire:model.fill="price_car" class="text-center" type="tel" placeholder="{{__('قیمت ماشین')}}" required/>
            </div>

            <div class="ml-4 col-span-3">
                <label class="text-right float-right m-2.5">{{__('توضیحات:')}}</label>
                <textarea style="width: 100%;" wire:model.fill="description" placeholder="{{__('توضیحات')}}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-teal-400 focus:border-teal-400 block w-full p-2.5 dark:bg-gray-700
                     dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500
                      dark:focus:border-teal-500 m-2  focus:rounded-lg transition-all focus:transition-all hover:transition-all"
                >{{ $find_id->description }}</textarea>
            </div>
        </div>
        <hr>

        <x-primary-button type="submit" class="mb-3 mt-3">
            {{__('بروزرسانی')}}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-arrow-clockwise mr-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                <path
                    d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
            </svg>
        </x-primary-button>

        <hr>

        <a href="{{ URL::signedRoute('detail') }}"
           class="text-white mt-2 bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800 focus:transition-all hover:transition-all transition-all">
            {{__('برگشت')}}
        </a>
    </form>

    <br><br><br>
</div>
