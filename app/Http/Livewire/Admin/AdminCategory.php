<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class AdminCategory extends Component
{
    use WithPagination;
    public $name,
    $slug,
    $modal = false,
    $category_id,
    $deleteConfirmation = false,
    $deleteId;
    public function render()
    {
        $categories = Category::latest()->simplePaginate(10);
        return view('pages.admin.categories', [
            'categories' => $categories
        ]);
    }

    public function openModal() {
        $this->modal = true;
    }

    public function closeModal() {
        $this->modal = false;
        $this->resetField();
    }

    public function resetField() {
        $this->name = '';
        $this->slug = '';
    }

    public function store() {
        $this->validate([
            'name' => 'required|string'
        ]);

        $slug = Str::slug($this->name);

        Category::updateOrCreate([
            'id' => $this->category_id
        ],
        [
            'name' => $this->name,
            'slug' => $slug
        ]);
    }

    public function edit($id) {
        
    }

    public function openDeleteModal($id) {
        
    }

    public function closeDeleteModal() {
        
    }

    public function destroy($id) {
        
    }
}