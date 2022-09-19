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

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
        $this->resetField();
    }

    public function resetField()
    {
        $this->name = '';
        $this->slug = '';
        $this->category_id = null;
        $this->deleteId = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string'
        ]);

        $slug = Str::slug($this->name);

        Category::updateOrCreate(
            [
                'id' => $this->category_id
            ],
            [
                'name' => $this->name,
                'slug' => $slug
            ]
        );

        $this->closeModal();
        $this->resetField();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $this->category_id = $id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->openModal();
    }

    public function openDeleteModal($id)
    {
        $this->deleteId = $id;
        $this->deleteConfirmation = true;
    }

    public function closeDeleteModal()
    {
        $this->deleteConfirmation = false;
        $this->resetField();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        $this->closeDeleteModal();
    }
}