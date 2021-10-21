<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function photoUrl()
    {
        return '/content/sections/' . $this->photo;
    }
    public function photoPath()
    {
        return 'content/sections/' . $this->photo;
    }
}
