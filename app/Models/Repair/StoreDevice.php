<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'address',
        'zip_code',
    ];

    public function scheduleStores()
    {
        return $this->hasMany(SheduleStore::class);
    }

    public static function timeSlots($day, $store) {

        $shedule = $store->scheduleStores()->get()
            ->where('day', $day)
            ->first();

        $creneaux = [];

        $hour_open = strtotime($shedule->hour_open);
        $hour_close = strtotime($shedule->hour_close);

        while ($hour_open < $hour_close - 3600) {
            $creneaux[] = date('H:i', $hour_open);
            $hour_open += 3600; // Ajouter 30 minutes (30 minutes = 1800 secondes)
        }

        return $creneaux;

    }
}
