<div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <input type="text" wire:model="search" class=" form-control m-5" placeholder="Cerca articoli">
        </div>
    </div>

    <div class="container">
        <div class="row">
            
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <div class="card shadow">
                        <div class="card-body">
                       
                            <p class="h2">
                                {{$article->title}}
                            </p>

                            <p> {{$article->content}} </p>
                       
                        </div>
                    </div>
                </div>
            @endforeach    
            
        </div>
    </div>


</div>
