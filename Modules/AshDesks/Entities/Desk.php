<?php

namespace Modules\AshDesks\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desk extends Model
{
    use HasFactory;

    protected $fillable = [
      'name'
    ];

    protected static function newFactory()
    {
        return \Modules\AshDesks\Database\factories\DeskFactory::new();
    }

    public function lists()
    {
      return $this->hasMany(DeskList::class);
    }
}
