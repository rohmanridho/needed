<?php

namespace App\Http\Livewire\Employer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EmployerCompany extends Component
{
    public function render()
    {
        if (Auth::check()) {
            if(Auth::user()->roles_id == 3) {
                User::updateOrCreate([
                    'id' => Auth::user()->id
                ], [
                    'roles_id' => 2
                ]);
            }
        }
        
        
        return view('pages.employer.companies');
    }
}