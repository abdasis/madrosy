<?php

namespace App\Models\Commons;

use App\Models\Kepegawaian\Guru;
use App\Models\Kesiswaan\Santri;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    public static function boot()
    {
        parent::boot();
        static::created(function ($user){
            $user->preferensi()->create([
                'mode_aplikasi' => 'light'
            ]);
        });
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];


    public function guru()
    {
        return $this->hasOne(Guru::class)->withDefault();
    }

    public function santri()
    {
        return $this->hasOne(Santri::class)->withDefault();
    }

    public function preferensi()
    {
        return $this->hasOne(Preferensi::class, 'user_id', 'id')->withDefault();
    }

    public function log()
    {
        return $this->morphOne(Activity::class, 'causer');
    }


}
