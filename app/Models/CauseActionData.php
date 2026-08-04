<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class CauseActionData extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'defect_id','cause_description','category_id','effect_description','action','status'
    ];

 
    public function category()
    {
        return $this->belongsTo(CfgCategory::class,'category_id','id');
    }

    public function whyAnalysis()
    {
        return $this->belongsTo(WhyWhyAnalysis::class,'id','cause_id');
    }


}
