<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Industry;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Http\Requests\Admin\IndustryRequest;

class AdminIndustry extends Component
{
  use WithPagination;
  use WithFileUploads;
  public $name,
    $slug,
    $photo,
    $modal = false,
    $industry_id,
    $old_photo,
    $deleteConfirmation = false,
    $deleteId;

  public function render()
  {
    $industries = Industry::latest()->simplePaginate(10);
    return view('pages.admin.industries', [
      'industries' => $industries
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
    $this->photo = null;
    $this->deleteId = null;
  }

  public function store()
  {
    $imageValidation = '';
    if ($this->photo != $this->old_photo) {
      $imageValidation = 'required|image';
    }

    $this->validate([
      'name' => 'required|unique:industries',
      'photo' => $imageValidation
    ]);

    $slug = Str::slug($this->name);

    if ($this->photo != $this->old_photo) {
      $file = $this->photo->store('industry');
    } else {
      $file = $this->photo;
    }

    Industry::updateOrCreate(
      [
        'id' => $this->industry_id
      ],
      [
        'name' => $this->name,
        'slug' => $slug,
        'photo' => $file
      ]
    );

    // dd($result);

    // if ($result != "0") {
    //     session()->flash('message', 'Update succesfuly');
    // } else {
    //     session()->flash('errMessage', 'Update failed');
    // }
    $this->closeModal();
    $this->resetField();
  }

  public function edit($id)
  {
    $industry = Industry::find($id);
    $this->name = $industry->name;
    $this->slug = $industry->slug;
    $this->photo = $industry->photo;
    $this->old_photo = $industry->photo;
    $this->industry_id = $id;
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
    $industry = Industry::find($id);
    $industry->delete();

    $this->closeDeleteModal();
  }
}