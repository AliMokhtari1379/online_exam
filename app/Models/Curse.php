<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Curse extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'start_at',
        'end_at',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function exams()
    {
        return $this->belongsToMany(Exam::class);
}
    public function teacher()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
