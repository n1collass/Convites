<?php

namespace App\Livewire;

use App\Models\Invite;
use Livewire\Component;
use App\Models\Confirmation;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class ConfirmationsTable extends Component
{
    use WithPagination;

    protected $paginationTheme = "tailwind";

    public $invite;

    public $searchTerm;
    public $orderBy = "created_at";
    public $sortOrder = "desc";

    public function updated() {
        $this->resetPage();
    }

    public function render()
    {
        $confirmations = Confirmation::where('invite_id', $this->invite->id)
            ->orderBy($this->orderBy, $this->sortOrder);
        if(! empty($this->searchTerm)) {
            $confirmations->orWhere('name','like',"%".$this->searchTerm."%");
        }
        $confirmations = $confirmations->paginate(10);

        return view('livewire.confirmations-table', ['confirmations' => $confirmations]);
    }
}
