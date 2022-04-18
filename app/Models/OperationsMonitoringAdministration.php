<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;


class OperationsMonitoringAdministration extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'oma_major_hazard', 'oma_minor_hazard'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('M d Y h:i a');
    }

    public function projects(){
        return $this->belongsTo('App\Models\Projects', 'oma_project_id');
    }
}
