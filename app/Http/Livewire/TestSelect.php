<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestSelect extends Component
{
    // Features - Dynamic Options, Dynamic Model, Dynamic Ref, Multiple Options
    // if multiple true send value as array if not send value as normal
    // options must be as value and label
    
    public $test,$value=[2];
    public $options=[
        [
            'value'=>1,
            'label'=>'Foor'
        ],
        [
            'value'=>2,
            'label'=>'Bar'
        ],
        [
            'value'=>3,
            'label'=>'Baz'
        ]
    ];

    public function render()
    {
        return view('livewire.test-select');
    }

    public function save(){
        $this->value=[];
    }
}
