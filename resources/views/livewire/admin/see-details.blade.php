@php use Illuminate\Support\Facades\URL; @endphp
<div>

    <style>
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>


    @if($sort_table == 0)
        <div class="bg-gray-50 w-full relative shadow-md p-2 dark:dark:bg-gray-800 dark:text-white">
            <h1 class="font-semibold" style="font-size: 30px">{{__('دیدن اطلاعات')}}</h1>
            <br>
            <hr>
            <br>
            <a href="{{ URL::signedRoute('ad_dash') }}"
               class="text-white mr-2 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm p-3  text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all"
            >
                برگشت
            </a>
            <button type="submit" wire:click="sort"
                    class="text-white mr-2 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-full text-sm p-3  text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5m-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>

        </div>

        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره قول نامه')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره شاستی')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('سیلندر')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('قیمت')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('پلاک خودرو')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نام خودرو')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('مدل')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('رنگ')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نوع سوخت')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نوع گیربوکس')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نوع دنده')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نام و نام خانوادگی فروشنده')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره تماس فروشنده')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نام و نام خانوادگی خریدار')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره تماس خریدار')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('سود')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('ضرر')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('توضیحات')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('تاریخ ثبت')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('حذف')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('ویرایش')}}
                    </th>
                </tr>
                </thead>
                <tbody>
                @php $i=0; @endphp

                <tbody>
                @foreach($specifications as $specification)
                    @php $i+=1; @endphp
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $i }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $specification->promise_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->identification_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->cylinder_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($specification->price_car, 0) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->plat_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->car_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->model }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->color }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->car_fuel_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->gearbox_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->gear_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->seller }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->mobile_seller }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->buyer }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->mobile_buyer }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->profit }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->loss }}
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" wire:click="find_id({{ $specification->id }})"
                                    class="text-center justify-center mx-auto flex">{{__('نمایش')}}</button>
                        </td>
                        <td class="px-6 py-4">
                            {{ $specification->created_post }}
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" wire:click="delete({{ $specification->id }})"
                                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 focus:transition-all hover:transition-all transition-all">
                                {{__('حذف')}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                            </button>

                        </td>
                        <td class="px-6 py-3">
                            <a type="button"
                               href="{{ URL::signedRoute('edite', ['post_id' => $specification->id]) }}"
                               class="text-white bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all">
                                {{__('ویرایش')}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-pencil-square mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd"
                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    @elseif($sort_table == 1)
        <div class="bg-gray-50 w-full relative shadow-md p-2 dark:dark:bg-gray-800 dark:text-white">
            <h1>{{__('دیدن اطلاعات')}}</h1>
            <br>
            <hr>
            <br>
            <a href="{{ URL::signedRoute('ad_dash') }}"
               class="text-white mr-2 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm p-3  text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all"
            >
                برگشت
            </a>
            <button type="submit" wire:click="default"
                    class="text-white mr-2 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-full text-sm p-3  text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5m-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>

        </div>

        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره قول نامه')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره شاستی')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('سیلندر')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('قیمت')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('پلاک خودرو')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نام خودرو')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('مدل')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('رنگ')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نوع سوخت')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نوع گیربوکس')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نوع دنده')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نام و نام خانوادگی فروشنده')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره تماس فروشنده')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('نام و نام خانوادگی خریدار')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('شماره تماس خریدار')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('سود')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('ضرر')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('توضیحات')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('تاریخ ثبت')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('حذف')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('ویرایش')}}
                    </th>
                </tr>
                </thead>
                <tbody>
                @php $i=0; @endphp

                <tbody>
                @foreach($sort_specifications as $sort_specification)
                    @php $i+=1; @endphp
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $i }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $sort_specification->promise_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->identification_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->cylinder_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($sort_specification->price_car, 0) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->plat_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->car_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->model }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->color }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->car_fuel_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->gearbox_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->gear_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->seller }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->mobile_seller }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->buyer }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->mobile_buyer }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->profit }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->loss }}
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" wire:click="find_id({{ $sort_specification->id }})"
                                    class="text-center justify-center mx-auto flex">{{__('دیدن')}}</button>
                        </td>
                        <td class="px-6 py-4">
                            {{ $sort_specification->created_post }}
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" wire:click="delete({{ $sort_specification->id }})"
                                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 focus:transition-all hover:transition-all transition-all">
                                {{__('حذف')}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                            </button>
                        </td>
                        <td class="px-6 py-3">
                            <a type="button"
                               href="{{ URL::signedRoute('edite', ['post_id' => $sort_specification->id]) }}"
                               class="text-white bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all">
                                {{__('ویرایش')}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-pencil-square mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd"
                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    @endif

    <br><br><br><br>


    @if($modal == 0)

    @elseif($modal == 1)
        <div class="w-full animate__animated animate__fadeInUp  mt-0 absolute transition-all" style="top: 0">
            <div class="bg-gray-100 w-80 dark:bg-gray-700 dark:text-white text-center rounded-lg mx-auto mt-6 p-3">
                <h1 class="font-bold">{{__('ویرایش اطلاعات')}}</h1>
                <hr>
                <br>
                <p class="text-right">
                    {{ $find_data->description }}
                </p>
                <br><br>
                <hr>
                <br>
                <button type="button" wire:click="close_modal"
                        class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 focus:transition-all hover:transition-all transition-all">
                    {{__('بستن')}}</button>
            </div>
        </div>
    @endif


</div>
