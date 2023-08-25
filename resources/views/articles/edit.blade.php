<x-layout>
    <h3 class=" text-center m-4">Aggiorna articolo:{{$article->title}}</h3>
    @livewire('article-update',['article_id'=>$id])
</x-layout>