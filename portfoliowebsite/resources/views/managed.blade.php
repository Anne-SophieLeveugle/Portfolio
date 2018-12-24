@extends('layouts.app')

@section('content')
    <div class="row justify-content-center" style="margin-top: 240px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Voeg werk toe</h3>
                    <a href="{{ route('admin.create') }}" class="btn btn-primary">Nieuw werk</a>
                </div>
            </div>
        </div>
</div>
@endsection
