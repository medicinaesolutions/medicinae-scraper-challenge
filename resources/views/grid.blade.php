@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h1>Lotes</h1>
                        <table class="table table-hover table-bordered" id="demo">
                            <thead>
                            <tr>

                                <th>Protocolo</th>
                                <th>Data</th>
                                <th>Valor</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($lotes as $lote)
                                <tr>
                                    <td>{{ $lote->protocolo }}</td>
                                    <td>{{ $lote->data }}</td>
                                    <td>{{ $lote->valor }}</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>




                    </div>
                </div>
                {{ $lotes->links()}}
            </div>
        </div>

    </div>

@endsection

