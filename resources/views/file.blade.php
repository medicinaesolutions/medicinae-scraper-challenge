@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1></h1>
                    <div class="card-header"><h1>FILE LIST</h1></div>
                    <a class="btn btn-success" target="_blank" href="files/lotes.xlsx" download>Download Excel</a>
                    <a class="btn btn-danger" target="_blank" href="files/lotes.pdf" download>Download PDF</a>
                    <a class="btn btn-warning" target="_blank" href="files/lotes.xml" download>Download XML</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
