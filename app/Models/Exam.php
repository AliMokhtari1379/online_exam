<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Exam extends Model
{
    use HasFactory,HasApiTokens,Notifiable;
    use SoftDeletes;
    protected $table="exams";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'curse_id',
        'name',
        'start_date',
        'time',
        'end_date',
    ];
    public function curses()
    {
        return $this->belongsToMany(Curse::class);
    }
}
