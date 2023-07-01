<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name, 
            $image, 
            $search, 
            $selected_id, 
            $componentName, 
            $pageTitle;
    private $paginate = 5;

    public function render()
    {
        $data = Category::paginate($this->paginate);
        return view('livewire.category.categories', [
            'data' => $data
        ])
        ->extends('layouts.app')
        ->section('content');
    }
}
