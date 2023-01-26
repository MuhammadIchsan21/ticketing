<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'ticket_packages_id' , 'image'
    ];

    protected $hidden = [

    ];

    public function ticket_package()
    {
        return $this->belongsTo(TicketPackage::class, 'ticket_packages_id', 'id');
    }
}
