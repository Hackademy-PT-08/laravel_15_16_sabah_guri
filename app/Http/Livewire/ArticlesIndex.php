<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesIndex extends Component
{
    public $search='';


    public function render()
    {

        if ($this->search!=='') {

            //! con il like rendiamo la ricerca più flessibile. ---- si deve concatenare anche il segno % al valore della colonna
            $articles=Article::where('title','like' ,$this->search."%")->get();
        }else{
            $articles=Article::all();
        }

        
        return view('livewire.articles-index',['articles'=>$articles]);
    }



    
}
