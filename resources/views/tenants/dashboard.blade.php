@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard for X</div>

                    <div class="card-body">
                        <div class="list-group">
                            @foreach($projects as $project)
                                <a href="/{{$project->id}}" class="list-group-item">
                                    {{$project->name}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">Dashboard for X</div>

                    <div class="card-body">
                        @include('tenants.partials._create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
