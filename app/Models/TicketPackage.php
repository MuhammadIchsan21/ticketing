<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'language', 'date',
        'duration', 'type', 'price'
    ];

    protected $hidden = [
    //
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'ticket_packages_id', 'id');
    }
}
