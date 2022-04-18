<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;


class ProjectImplementationsThree extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'pimr_cause_of_delay'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('M d Y h:i a');
    }

    public function projects(){
        return $this->belongsTo('App\Models\Projects', 'pimr_project_id');
    }
}
