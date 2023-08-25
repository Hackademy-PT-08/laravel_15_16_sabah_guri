<div>
    <div>

    
 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
    
            <div class="row justify-content-center ">
                <div class="col-12 col-md-8">
    
                    <p style="color: {{$color}}">{{$succesMessage}}</p>
                
                    <input type="text" class="form-control m-2" wire:model="title" placeholder="Titolo" value="">
    
                    <textarea class="form-control m-2" cols="10" rows="5" wire:model="content" placeholder="Contenuto">  </textarea>
                
                    <button wire:click="update" class="btn btn-secondary m-2">Aggiorna</button>
                    <button wire:click="destroy" class="btn btn-secondary m-2">Elimina</button>
    
                  
                </div>
            </div>
        </div>
    </div>
    
</div>
