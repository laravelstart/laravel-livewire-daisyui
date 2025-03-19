<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class BrowseKitsButton extends Component
{
    public function render(): View
    {
        return view('livewire.browse-kits-button', [
            'url' => 'https://laravelstart.app/browse',
        ]);
    }
}
