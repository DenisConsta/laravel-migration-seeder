@extends('layouts.main')

@section('content')
    <div class="row">

        @foreach ($data as $train)
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-header">
                        {{ $train->company }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">departure station : {{ $train->departure_station }} </li>
                        <li class="list-group-item">arrival station : {{ $train->arrival_station }}</li>
                        <li class="list-group-item">departure time : {{ $train->departure_time }}</li>
                        <li class="list-group-item">arrival time :
                            {{ $train->arrival_time }}</li>
                        <li class="list-group-item">train code :
                            {{ $train->train_code }}</li>
                        <li class="list-group-item">number of carriages :
                            {{ $train->n_carriages }}</li>
                        <li class="list-group-item">in time :
                            {{ ($train->n_carriages) ? 'true' : 'false' }}</li>
                        <li class="list-group-item">deleted :
                            {{ ($train->deleted) ? 'true' : 'false' }}</li>
                    </ul>
                </div>
            </div>
        @endforeach

    </div>
@endsection
