@extends('base')


@section('body')
    <div class="container">
        <div class="card">
            <div class="card-header">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="">Lista de Países (Country List)</a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opções
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=" {{ url('/paises/gerar_csv') }}">Gerar CSV Completo</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

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