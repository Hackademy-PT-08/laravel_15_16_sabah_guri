<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{

    public $title,$content,$succesMessage,$color;

    public function render()
    {
        return view('livewire.article-create');
    }

    public function store(){
        $validated=$this->validate([
            'title'=>'required',
            'content'=>'required'

        ]);

    
        $article=new Article;
        $article->title=$this->title;
        $article->content=$this->content;

        $article->save();
        //!svuotiamo gli input dopo che ' dati sono stati salvati in DB
        
        
        $this->title='';
        $this->content='';
        $this->succesMessage= 'Articolo aggiunto con successo';
        $this->color='green';
    
    }

 
}
