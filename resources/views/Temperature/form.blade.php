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
                                <input type="text" class="input" value="" name="city" pattern="[a-zA-Z]">
                            </div>
                        </label>
                        <label class="table__row">
                            <div class="table__col--left">
                                <span>Country code:</span>
                            </div>
                            <div class="table__col--right">
                                <input type="text" class="input" value="" name="countryCode" pattern="[a-zA-Z]">
                            </div>
                        </label>
                    </div>
                    <div class="table__footer">
                        <div class="table__buttons--left">
                        </div>
                        <div class="table__buttons--right">
                            <button class="button">Wyślij</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
