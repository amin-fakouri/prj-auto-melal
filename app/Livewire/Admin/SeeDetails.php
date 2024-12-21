<?php

namespace App\Livewire\Admin;

use App\Models\Specifications;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SeeDetails extends Component
{
    public $specifications;
    public $sort_table = 0;
    public $modal=0;
    public $find_data;

    public $sort_specifications;
    #[Layout('layouts.admin.see-details')]
    public function render()
    {
        $this->specifications = Specifications::all();
        return view('livewire.admin.see-details');
    }

    public function sort()
    {
        $this->sort_table = 1;
        $this->sort_specifications = DB::table('specifications')->orderBy('id', 'desc')->get();
    }

    public function default()
    {
        $this->sort_table = 0;
        $this->specifications = Specifications::all();
    }

    public function delete($id)
    {
        Specifications::find($id)->delete();
    }

    public function find_id($id)
    {
        $this->find_data = Specifications::find($id);
        $this->modal=1;
    }

    public function close_modal()
    {
        $this->modal = 0;
    }
}
