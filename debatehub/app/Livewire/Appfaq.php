<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Faq;

class Appfaq extends Component
{
    use WithPagination;

    #[Url()]
    public $search = '';
    #[Url()]
    public $perPage = 10;

    // public $selectedFaq=0;

    public function mount(){
        // 
    }
    public function render()
    {
        $faqs = Faq::search($this->search)->paginate($this->perPage) ;
        return view('livewire.appfaq',[
            'faqs'=>$faqs,
        ]);
    }
}
