@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card__container">
            <form action="{{ route('makeTemperature') }}" method="post">
                @csrf
                <div class="table">
                    <div class="table__container">
                        <label class="table__row">
                            <div class="table__col--left">
                                <span>City:</span>
                            </div>
                            <div class="table__col--right">
                                {{ $temperature->city }}
                            </div>
                        </label>
                        <label class="table__row">
                            <div class="table__col--left">
                                <span>Country code:</span>
                            </div>
                            <div class="table__col--right">
                                {{ $temperature->country_code }}
                            </div>
                        </label>
                        <label class="table__row">
                            <div class="table__col--left">
                                <span>Average temperature:</span>
                            </div>
                            <div class="table__col--right">
                                {{ $temperature->average_temperature }}
                            </div>
                        </label>
                        <label class="table__row">
                            <div class="table__col--left">
                                <span>Date and time:</span>
                            </div>
                            <div class="table__col--right">
                                {{ $temperature->created_at }}
                            </div>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
