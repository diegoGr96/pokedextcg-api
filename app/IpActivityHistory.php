<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IpActivityHistory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ip_activity_history';

    public function __construct()
    {
    }

    public function insert(
        String $ip,
        String $countryName,
        String $countryCode,
        String $regionName,
        String $regionCode,
        String $cityName,
        String $zipCode,
        Float $latitude,
        Float $longitude,
        String $url,
        String $endpoint,
        String $params,
        String $created_at,
        String $updated_at
    ) {
        return DB::insert(
            'insert into ' . $this->table .
            '(ip, countryName, countryCode, regionName, regionCode, cityName, zipCode, latitude, longitude, url, endpoint, params, created_at, updated_at)
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $ip,
                $countryName,
                $countryCode,
                $regionName,
                $regionCode,
                $cityName,
                $zipCode,
                $latitude,
                $longitude,
                $url,
                $endpoint,
                $params,
                $created_at, # new \Datetime()
                $updated_at,  # new \Datetime()
            ]
        );
    }
}
