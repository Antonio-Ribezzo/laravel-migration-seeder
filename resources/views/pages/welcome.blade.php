@extends('layouts.app')

@section('titlePage') 
    Laravel | Migration-Seeder
@endsection

@section('contentHome') 

    <main class="bg-light">
        <div class="row">
            @foreach ($trains as $el )
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $el->company }}</h4>
                            <div class="row">
                                <div class="col-6">
                                    <span>{{ $el->departure_station }}</span>
                                </div>
                                <div class="col-6">
                                    <span>{{ $el->arrival_station }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
