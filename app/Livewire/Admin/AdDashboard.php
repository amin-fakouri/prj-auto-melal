<?php

namespace App\Livewire\Admin;


use App\Livewire\Actions\Logout;
use App\Models\Specifications;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AdDashboard extends Component
{
    public $n_car_number;
    public $specifications;

    public $identification_number;

    public $plat_number;
    public $model;
    public $color;
    public $car_name;
    public $profit;
    public $loss;
    public $gearbox_type;
    public $car_fuel_type;
    public $promise_number;
    public $gear_type;
    public $cylinder_type;

    public $price_car;
    public $seller;
    public $mobile_seller;
    public $buyer;
    public $mobile_buyer;
    public $description;

    public $alert_mode = 0;

    #[Layout('layouts.admin.admin-dashboard')]
    public function render()
    {
        $this->specifications = Specifications::all();
        return view('livewire.admin.ad-dashboard');
    }

    public function search()
    {
        return redirect()->route('find_car', ['n_car_id' => $this->n_car_number]);
    }

    public function create()
    {
        DB::table('specifications')->insert([
            'identification_number' => $this->identification_number,
            'plat_number' => $this->plat_number,
            'color' => $this->color,
            'model' => $this->model,
            'profit' => $this->profit,
            'seller' => $this->seller,
            'mobile_seller' => $this->mobile_seller,
            'buyer' => $this->buyer,
            'mobile_buyer'=> $this->mobile_buyer,
            'loss' => $this->loss,
            'promise_number' => $this->promise_number,
            'car_fuel_type' => $this->car_fuel_type,
            'car_name' => $this->car_name,
            'cylinder_type' => $this->cylinder_type,
            'description' => $this->description,
            'price_car' => $this->price_car,
            'gearbox_type' => $this->gearbox_type,
            'gear_type' => $this->gear_type,
            'created_post' => jdate('Y/m/d')
        ]);

        $this->reset(['identification_number',
            'plat_number',
            'color',
            'model',
            'loss',
            'profit',
            'seller',
            'mobile_seller',
            'buyer',
            'mobile_buyer',
            'car_name',
            'car_fuel_type',
            'description',
            'cylinder_type',
            'price_car',
            'gear_type',
            'gearbox_type',
        ]);

        $this->alert_mode = 1;
    }

    public function close_alert()
    {
        $this->alert_mode = 0;
    }




    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }


}
