<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;


class Projects extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('M d Y h:i a');
    }
    
    public function projects()
    {
        return $this->hasMany('App\Models\AuditTest', 'audit_project_code');
    }
    public function projprep(){
        return $this->hasOne('App\Models\ProjectPreparationProcurement', 'ppp_project_id');
    }

    public function projimplemone(){
        return $this->hasOne('App\Models\ProjectImplementation', 'pimo_project_id');
    }

    public function projimplemtwo(){
        return $this->hasOne('App\Models\ProjectImplementationTwo', 'pimt_project_id');
    }
    public function projimthree(){
        return $this->hasOne('App\Models\ProjectImplementationsThree', 'pimr_project_id');
    }

    public function projopex(){
        return $this->hasOne('App\Models\OperationsMonitoringAdministration', 'oma_project_id');
    }
    public function audit(){
        return $this->hasOne('App\Models\AuditTest', 'audit_project_id');
    }
}
