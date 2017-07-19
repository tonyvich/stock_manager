@extends('layouts.layout')

@section('content')
    <section class="content-header">
        <h1>
            Ajouter un produit
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @include('messages.formerrors')
                <form method="POST" action="/items">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nom du produit</label>
                        <input class="form-control" type="text" id="name"  name="name">
                    </div>
                    <div class="form-group">
                        <label>Prix</label>
                        <input class="form-control" type="number" name="price" id="price">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-info" type="submit" name="register" id="register" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection('content')

@section('script')
    <script>
        setActive('add-item-link');
    </script>
@endsection