<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{

    public $perPage = 10;

    public $sortDirection = "ASC";

    public $sortColumn = "name";

    public function doSort($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = ($this->sortDirection == "ASC" ? "DESC" : "ASC");
            return;
        }
        $this->sortColumn = $column;
        $sortDirection="ASC";

    }

    public $search = "";

    public function render()
    {
        return view('livewire.user-list', [
            'users' => User::search($this->search)->orderBy($this->sortColumn, $this->sortDirection)->paginate($this->perPage)
        ]);
    }


}
