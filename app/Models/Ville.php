<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    // protected $primaryKey = 'id';
    protected $table = 'villes';
    protected $fillable = ['name'];


    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }

    public function selectVille($order = 'ASC') {
        return $this::select()
            ->orderBy('name', $order)
            ->get();
    }
}
