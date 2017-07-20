@extends('layouts.layout')

@section('content')
    <section class="content-header">
        <h1>
            Ajouter une livraison de <strong>{{ $item->name }}</strong>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @include('messages.formerrors')
                <form method="POST" action="/deliveries/{{ $item->id }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Date de livraison</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input class="form-control pull-right" type="text" id="date"  name="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Fournisseur</label>
                        <input class="form-control" type="text" name="deliver" id="deliver">
                    </div>
                    <div class="form-group">
                        <label>Quantité</label>
                        <input class="form-control" type="number" name="size" id="size">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="register" id="register" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection('content')

@section('script')
    <script>
        setActive('manage-item-link');
        $(document).ready(function() {
            $('#date').datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
@endsection