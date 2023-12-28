<?php

namespace App\Livewire\Backend\Admin;

use Livewire\{Component, withPagination};
use App\Models\User;

class UsersIndex extends Component
{
    use withPagination;
    public $search;
    public $is_actives;
    public $pag = 5,
        $pags = [5, 10, 20, 50];

    public function render()
    {
        $users = User::where('id', 'LIKE', "%$this->search%")
            ->orWhere('name', 'LIKE', "%$this->search%")
            ->orWhere('email', 'LIKE', "%$this->search%")
            ->orWhere('email', 'LIKE', "%$this->search%")
            ->when($this->is_actives, function ($query) {
                return $query->Active($query);
            })
            ->paginate($this->pag);
        return view('livewire.backend.admin.users-index', ['datas' => $users]);
    }

    public function updatingsearch()
    {
        $this->resetPage();
    }
}
