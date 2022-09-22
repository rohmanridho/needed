<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Industry;
use Illuminate\Support\Facades\Auth;

class HomeLivewire extends Component
{
    public function render()
    {
        // $result = User::updateOrCreate(['id' => Auth::user()->id], [
        //     'roles_id' => 2
        // ]);
        $industries = Industry::take(4)->get();
        return view('pages.home', [
            'industries' => $industries
        ])->layout('layouts.main');
    }
}