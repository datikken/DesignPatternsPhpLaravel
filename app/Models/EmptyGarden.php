<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmptyGarden extends Model
{
    use HasFactory;

    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function items()
    {
        $numberOfSpots = ceil($this->width * $this->height);
        return array_fill(0, $numberOfSpots, 'handful of dirt');
    }
}
