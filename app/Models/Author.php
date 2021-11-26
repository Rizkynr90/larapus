<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname'];
    public $timestapms = true;

    public function fullname()
    {
        return $this->firstname. " " . $this->lastname;
    }
}
