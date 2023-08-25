<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleUpdate extends Component
{
    public $title,$content,$succesMessage,$errorMassage,$color,$article_id;

    public function mount(){
        
        $article=Article::find($this->article_id);


        $article->title=$this->title;
        $article->content=$this->content;
    }


    public function render()
    {
        return view('livewire.article-update');
    }


    public function update()
    {
        $article=Article::find($this->article_id);
        $article->title=$this->title;
        $article->content=$this->content;

        $article->save();
        $this->title='';
        $this->content='';
        $this->succesMessage= 'Articolo aggiornato con successo';
        $this->color='green';
    }


    public function destroy()
    {
        $article=Article::find($this->article_id);
        $article->delete();

        return redirect()->route('home.index');
    }
}
