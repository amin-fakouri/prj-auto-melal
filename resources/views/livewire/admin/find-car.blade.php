<div>




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
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    {{ $find_n_car->promise_number }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->identification_number }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->cylinder_type }}
                </td>
                <td class="px-6 py-4">
                    {{ number_format($find_n_car->price_car, 0) }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->plat_number }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->car_name }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->model }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->color }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->car_fuel_type }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->gearbox_type }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->gear_type }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->seller }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->mobile_seller }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->buyer }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->mobile_buyer }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->profit }}
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->loss }}
                </td>
                <td class="px-6 py-4">
                    <button type="button" wire:click="open_modal"
                            class="text-center justify-center mx-auto flex">{{__('نمایش')}}</button>
                </td>
                <td class="px-6 py-4">
                    {{ $find_n_car->created_post }}
                </td>

            </tbody>
        </table>
    </div>
    <br>
    <hr>
    <br>
    <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('ad_dash') }}"
       class="text-white mr-2 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm p-3  text-center inline-flex items-center me-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 focus:transition-all hover:transition-all transition-all"
    >
        برگشت
    </a>

    @if($modal == 0)

    @elseif($modal == 1)
        <div class="bg-gray-50 justify-center light:text-center light:mx-auto p-2 rounded-lg shadow-md w-80 text-center dark:mx-auto mr-2 ml2 dark:dark:bg-gray-800 dark:text-white"
             style="margin: auto; top: 0">
            <p class="text-right">
                {{ $find_n_car->description }}
            </p>
            <br>
            <hr>
            <br>
            <button type="button" wire:click="close_modal"
                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 focus:transition-all hover:transition-all transition-all">
                {{__('بستن')}}</button>
        </div>
    @endif
</div>
