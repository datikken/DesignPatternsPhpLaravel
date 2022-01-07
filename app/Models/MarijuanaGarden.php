<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\EmptyGarden;

class MarijuanaGarden extends EmptyGarden
{
    use HasFactory;

    public function items() {
        return array_fill(0, $this->width * $this->height, 'weed');
    }
}
