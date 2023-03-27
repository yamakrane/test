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

    public function getFormSchema(){
        return [
            Radio::make('tst')->options([
                0 => 'Test',
                1 => 'Test1',
                2 => 'Test2',
                3 => 'Tes3t',
            ])->default(1),

            Select::make('test')->options([
                0 => 'Test',
                1 => 'Test1',
                2 => 'Test2',
                3 => 'Tes3t',
            ])->default(3)->searchable()->preload(),

            CheckboxList::make('tstx')->options([
                'test' => 'Test',
                'test1' => 'Test1',
                'test2' => 'Test2',
                'test3' => 'Tes3t',
            ])->default(['test1','test2'])

        ];
    }

    public function render()
    {
        return view('livewire.youssef');
    }
}
