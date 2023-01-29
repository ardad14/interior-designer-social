<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vertex extends Model
{
    use HasFactory;

    public const MIGRATION_TYPE_ID = 2;
}
