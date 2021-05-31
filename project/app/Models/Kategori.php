<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
      use SoftDeletes;
            protected $table="kategori";
            protected $guarded=[];
            const CREATED_AT = 'daxilolunma_tarixi';
            const UPDATED_AT = 'yenilenme_tarixi';
            const DELETED_AT = 'silinme_tarixi';

            public function urunler(){
                return $this->belongsToMany('App\Models\Urun','kategori_urun');
            }


}
