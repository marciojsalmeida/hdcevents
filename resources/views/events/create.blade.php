@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="image" class="form-label">Imagem do evento:</label>
            <input type="file" id="image" name="image" class="form-control-file" />
        </div>
        
        <div class="form-group">
            <label for="title" class="form-label">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" />
        </div>

        <div class="form-group">
            <label for="date" class="form-label">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date"  />
        </div>

        <div class="form-group">
            <label for="city" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" />
        </div>
        <div class="form-group">
            <label for="private" class="form-label">O evento é privado?</label>
            <select name="private" id="private" class="form-control">

                <option value="0">Não</option>
                <option value="1">Sim</option>

            </select>
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
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
        
        <input type="submit" value="Criar Evento" class="btn btn-primary" />
    </form>
</div>


@endsection