<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $keyword, $perpage;

    public function render()
    {
        $query = User::where('role_as', '0');
        if($this->keyword)
        {
            $this->keyword = trim($this->keyword);
            $query->where('name','LIKE', '%' . $this->keyword . '%')
                ->orWhere('email','LIKE', '%' . $this->keyword . '%');
        }
        if($this->perpage)
        {
            $query->paginate($this->perpage);
        }
        $customers = $query->paginate(25);
        return view('livewire.admin.customer.index', compact('customers'));
    }
}
