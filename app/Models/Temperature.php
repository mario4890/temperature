<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    use HasFactory;

    public function getByID(int $temperatureID): Temperature {
        $sql = $this->find($temperatureID);

        return $sql;
    }

    private function setCity(string $city): Temperature {
        $this->city = $city;

        return $this;
    }

    public function getByCity(string $city): Array {
        $sql = $this->where('city', $city)->get();

        return $sql;
    }

    private function setCountryCode(string $countryCode): Temperature {
        $this->country_code = $countryCode;

        return $this;
    }

    public function getByCountryCode(string $countryCode): Array {
        $sql = $this->where('country_code', $countryCode)->get();

        return $sql;
    }

    private function setAverageTemperature(float $averageTemperature): Temperature {
        $this->average_temperature = $averageTemperature;

        return $this;
    }

    public function getByAverageTemperature(float $averageTemperature): Array {
        $sql = $this->where('average_temperature', $averageTemperature)->get();

        return $sql;
    }

    public function setCreatedDate(): Temperature
    {
        $this->created_at = Carbon::now('Europe/Warsaw');

        return $this;
    }

    public function newEntity(string $city, string $countryCode, float $averageTemperature): Temperature {
        $this->setCity($city);
        $this->setCountryCode($countryCode);
        $this->setAverageTemperature($averageTemperature);
        $this->setCreatedDate();
        $this->save();

        return $this;
    }
}
