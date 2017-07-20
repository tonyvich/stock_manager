@extends('layouts.layout')

@section('title')
    Liste des produits
@endsection('title')

@section('content')
    <section class="content-header">
        <h1>
            Liste des produits
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box">
                    <div class="box-body">
                    @if( count($items) == 0)
                        <table class="table table-bordered">
                            <thead>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Créé le</th>
                                <th>Modifié le</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5">
                                        <h3>Eh Bien c'est vide ici</h3>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Créé le</th>
                                <th>Modifié le</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <a href="/items/{{ $item->id }}" class="btn btn-info"><i class="fa fa-eye"></i>Historique</a>
                                        <a href="/deliveries/add/{{ $item->id }}" class="btn btn-success"><i class="fa fa-plus"></i>Livraison</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        setActive('manage-item-link');
    </script>
@endsection