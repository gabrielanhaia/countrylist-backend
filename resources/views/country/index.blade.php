@extends('base')


@section('body')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Lista de Países (Country List)
            </div>
            <div class="card-block">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($countries as $country)
                        <tr>
                            <td>{{ $country->country_code }}</td>
                            <td>{{ $country->country_description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $countries->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection