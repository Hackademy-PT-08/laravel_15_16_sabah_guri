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
            
                <input type="text" class="form-control m-2" wire:model="title" placeholder="Titolo" value="{{$title}}">

                <textarea class="form-control m-2" cols="10" rows="5" wire:model="content" placeholder="Contenuto"> {{$content}} </textarea>
              
                <button wire:click="store" class="btn btn-secondary m-2">Aggiungi</button>


              
            </div>
        </div>
    </div>
</div>
