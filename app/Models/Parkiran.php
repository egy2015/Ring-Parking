<?php

namespace App\Models;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','plat_no','j_k','foto', 'create_at'];

    protected $table = 'parking';

}
