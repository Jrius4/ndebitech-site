<?php

namespace App;

use App\Service;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = ['title','slug','description'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
