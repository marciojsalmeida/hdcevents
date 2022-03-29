@extends('layouts.main')

@section('title', 'Editando: ' .$event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image" class="form-label">Imagem do evento:</label>
            <input type="file" id="image" name="image" class="form-control-file" />
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
        </div>
        
        <div class="form-group">
            <label for="title" class="form-label">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}"/>
        </div>

        <div class="form-group">
            <label for="date" class="form-label">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}" />
        </div>

        <div class="form-group">
            <label for="city" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}" />
        </div>
        <div class="form-group">
            <label for="private" class="form-label">O evento é privado?</label>
            <select name="private" id="private" class="form-control">

                <option value="0" {{$event->private == 0 ? "selected='selected'" : ""}}>Não</option>
                <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Sim</option>

            </select>
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{$event->description}}</textarea>
        </div>

        <div class="form-group">

            <label for="items" class="form-label">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Cadeiras" /> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Palco" /> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Cerveja gratís" /> Cerveja gratís
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Open Food" /> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="Brindes" /> Brindes
            </div>
        </div>
        
        <input type="submit" value="Editar Evento" class="btn btn-primary" />
    </form>
</div>


@endsection