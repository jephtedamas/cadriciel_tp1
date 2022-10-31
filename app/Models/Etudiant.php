<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'etudiants';

    protected $hidden = [
        'created_at', 'updated_at',
        ];


    // protected $guarded = [];

    protected $fillable = ['ville_id', 'name', 'address','phone','email','date_of_birth'];

    // protected $primaryKey = 'id';

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
}
