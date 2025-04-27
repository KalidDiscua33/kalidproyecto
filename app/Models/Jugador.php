<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Jugador extends Model
{

    use HasFactory;
    protected $table = 'jugadores';

    protected $fillable = ['nombre', 'equipo_id', 'edad', 'posicion'];

    public function equipo(): BelongsTo
    {
        return $this->belongsTo(Equipo::class);
    }
}
