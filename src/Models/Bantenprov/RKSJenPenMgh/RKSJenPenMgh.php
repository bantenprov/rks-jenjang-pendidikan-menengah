<?php

namespace Bantenprov\RKSJenPenMgh\Models\Bantenprov\RKSJenPenMgh;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RKSJenPenMgh extends Model
{

    protected $table = 'rks_jen_pen_mghs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\RKSJenPenMgh\Models\Bantenprov\RKSJenPenMgh\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\RKSJenPenMgh\Models\Bantenprov\RKSJenPenMgh\Regency','id','regency_id');
    }

}

