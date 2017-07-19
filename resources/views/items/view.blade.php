@extends('layout')


@section('content')
    <section class="content-header">
        <h1>
            @echo $item->name
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <h1>Détails du produits</h1>
                <hr/>
                <table class="table-stripped">
                    <thead>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Créé le</th>
                        <th>Modifié le</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>@echo item->name()</td>
                            <td>@echo item->price()</td>
                            <td>@echo item->created()</td>
                            <td>@echo item->updated()</td>
                        </tr>
                    </tbody>
                </table>
                <h1>Livraisons</h1>
                <hr/>
                <table class="table-stripped">
                    <thead>
                        <th>Date</th>
                        <th>Livreur</th>
                        <th>Créé le</th>
                        <th>Modifié le</th>
                    </thead>
                    <tbody>
                    @foreach ($deliveries as $delivery)
                        <tr>
                            <td>@echo delivery->date()</td>
                            <td>@echo delivery->deliver()</td>
                            <td>@echo delivery->created()</td>
                            <td>@echo delivery->updated()</td>
                        </tr>                 
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection