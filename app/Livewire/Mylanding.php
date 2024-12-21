<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Artisan;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Mylanding extends Component
{
    public LoginForm $form;
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.mylanding');
    }

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(\Illuminate\Support\Facades\URL::signedRoute('ad_dash'));
    }
}
