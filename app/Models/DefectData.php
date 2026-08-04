<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\ModalMaster;
use App\Models\DefectMaster;

class DefectData extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'model_id',
        'defect_id','defect_status','quantity','date_time','date'
     ];

     public function model()
    {
        return $this->belongsTo(ModalMaster::class,'model_id','id');
    }

     public function defect()
    {
        return $this->belongsTo(DefectMaster::class,'defect_id','id');
    }
}
