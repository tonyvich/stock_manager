@extends('layouts.layout')

@section('content')
    <section class="content-header">
        <h1>
            {{ $item->name }}
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <h1>Détails du produits</h1>
                <hr/>
                <table class="table table-bordered">
                    <thead>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Créé le</th>
                        <th>Modifié le</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
                <h1>Livraisons</h1>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <th>Date</th>
                        <th>Livreur</th>
                        <th>Quantité</th>
                        <th>Créé le</th>
                        <th>Modifié le</th>
                    </thead>
                    <tbody>
                    @foreach ($deliveries as $delivery)
                        <tr>
                            <td>{{ $delivery->date }}</td>
                            <td>{{ $delivery->deliver }}</td>
                            <td>{{ $delivery->size }}</td>
                            <td>{{ $delivery->created_at }}</td>
                            <td>{{ $delivery->updated_at }}</td>
                        </tr>                 
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection