<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;

    public function education()
    {
        return $this->hasMany(education::class);
    }

    public function experience()
    {
        return $this->hasMany(experience::class);
    }

    public function language()
    {
        return $this->hasMany(language::class);
    }

    public function skill()
    {
        return $this->hasMany(skill::class);
    }
}
