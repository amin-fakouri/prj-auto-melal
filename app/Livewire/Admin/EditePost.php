<?php

namespace App\Livewire\Admin;

use App\Models\Specifications;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditePost extends Component
{

    public $find_id;
    public $update_data;
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
    public $jdf;
    public $description;
    public $gear_type;
    public $promise_number;
    public $price_car;
    public $cylinder_type;

    public $alert_mode = 0;
    #[Layout('layouts.admin.edite-post')]
    public function mount($post_id)
    {
        $this->find_id = Specifications::find($post_id);
    }
    public function render()
    {
        return view('livewire.admin.edite-post');
    }

    public function update($id)
    {

       $this->update_data = Specifications::where('id', $id)->update([
           'identification_number' => $this->identification_number,
           'plat_number' => $this->plat_number,
           'color' => $this->color,
           'model' => $this->model,
           'profit' => $this->profit,
           'loss' => $this->loss,
           'promise_number' => $this->promise_number,
           'car_fuel_type' => $this->car_fuel_type,
           'car_name' => $this->car_name,
           'cylinder_type' => $this->cylinder_type,
           'description' => $this->description,
           'price_car' => $this->price_car,
           'gearbox_type' => $this->gearbox_type,
           'gear_type' => $this->gear_type,
        ]);


        $this->alert_mode = 1;
    }

    public function close_alert()
    {
        $this->alert_mode = 0;
    }
}
