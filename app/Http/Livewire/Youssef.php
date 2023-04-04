<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\CheckboxList;
use Livewire\Component;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class Youssef extends Component implements HasForms
{
    use InteractsWithForms;

    public $user;

    public function mount(){
        
        $this->user = Auth::user();

        $this->form->fill([
            'cv' => $this->user->cv
        ]);
    }

    public function getFormSchema(){
        return [
            FileUpload::make('cv')->required()
        ];
    }

    public function render()
    {
        return view('livewire.youssef');
    }
}
