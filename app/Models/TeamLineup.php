<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamLineup extends Model
{
    protected $fillable = ['match_id','team_id','player_id','position_number','is_starter'];
    protected $casts = ['is_starter'=>'boolean'];

    public function match(): BelongsTo { return $this->belongsTo(MatchModel::class, 'match_id'); }
    public function team(): BelongsTo { return $this->belongsTo(Team::class); }
    public function player(): BelongsTo { return $this->belongsTo(Player::class); }
}
