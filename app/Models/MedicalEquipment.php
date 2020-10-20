<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalEquipment extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medical_equipments';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_equipment', 'harga_jual', 'harga_beli'];

    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
