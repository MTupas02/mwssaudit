<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;


class AuditTest extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('M d Y h:i a');
    }
    public function projects(){
        return $this->belongsTo('App\Models\Projects', 'audit_project_id');
    }
}
