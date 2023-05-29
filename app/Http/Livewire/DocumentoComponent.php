<?php

namespace App\Http\Livewire\Documentos;

use App\Documento;
use Livewire\Component;

class DocumentoComponent extends Component
{

    public $name, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;

    public function render()
    {
        $data = Documento::select('nombre','tipoPredio','estado')->get();
        return view('livewire.documentos.documento-component')
            ->extends('layouts.app')
            ->section('content');
    }
}
