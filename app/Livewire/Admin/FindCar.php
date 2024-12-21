<?php

namespace App\Livewire\Admin;

use App\Models\Specifications;
use Livewire\Attributes\Layout;
use Livewire\Component;

class FindCar extends Component
{
    public $specifications;

    public $find_n_car;
    public $modal = 0;
    #[Layout('layouts.admin.find-car')]
    public function mount($n_car_id)
    {
        $this->specifications = Specifications::all();
        foreach ($this->specifications as $specification){
            if ($specification['identification_number'] == $n_car_id){
                $this->find_n_car = $specification;
            }
        }

    }

    public function render()
    {
        return view('livewire.admin.find-car');
    }

    public function open_modal()
    {
        $this->modal = 1;
    }

    public function close_modal()
    {
        $this->modal = 0;
    }
}
