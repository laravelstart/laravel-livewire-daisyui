<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class DeployButton extends Component
{
    public function render(): View
    {
        return view('livewire.deploy-button', [
            'cloudUrl' => 'https://cloud.laravel.com',
        ]);
    }
}
