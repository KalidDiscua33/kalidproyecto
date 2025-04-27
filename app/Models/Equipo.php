<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Equipo extends Model
{

    use HasFactory;


         protected $fillable = [
             'nombre',
             'user_id',
             'categoria',
             'cantidadjugadores',
         ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

  public function jugadores(): HasMany
  {
      return $this->hasMany(Jugador::class);
}
}
