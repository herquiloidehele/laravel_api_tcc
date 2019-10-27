@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chaves de Acesso</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <h3 style="font-weight: bold">SECRET KEY: </h3>
                        </div>
                        <div class="col-md-8">
                            <h5>kjfkdfsdfjshfsd-fsdfjhsdf3wer</h5>
                        </div>

                        <div class="col-md-4 mt-3">
                            <h3 style="font-weight: bold">API KEY: </h3>
                        </div>
                        <div class="col-md-8 mt-3">
                            <h5>skjsdsdsjdjssjdfhsjdjsdhfjjfhs</h5>
                        </div>
                    </div>

                    <div class="mt-5 text-center w-100">
                        <a href="/documentacao" class="btn btn-success btn-large">Documentação</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
