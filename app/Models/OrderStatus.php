<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    use SoftDeletes;

    public $table = 'order_status';
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        
    ];

    protected $fillable = [
        'name',
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    //one to many
    public function order() 
    {
        return$this->belongsTo('App\models\Order', 'order_status_id','id');    
    }

    //one to many
    public function service() 
    {
        return$this->belongsTo('App\models\Service', 'service_id','id');    
    }

    //one to many
    
}
