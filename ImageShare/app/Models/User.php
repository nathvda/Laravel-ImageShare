<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'username',
        'email',
        'avatar',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function images(): HasMany
    {
    return $this->hasMany(Image::class, 'user_id', 'id');
    }

    public function likes(): HasMany
    {
    return $this->hasMany(Like::class, 'user_id', 'id');
    }


    public function subscriptions(): BelongsToMany
    {
        return $this->BelongsToMany(User::class, 'subscriptions', 'follower_id', 'followed_id');
    }

    public function subscribers(): BelongsToMany
    {
        return $this->BelongsToMany(User::class, 'subscriptions', 'followed_id', 'follower_id');
    }

    public function isSubscribed($id)
    {
        $subs = $this->subscriptions()->where('followed_id', $id)->where('follower_id', auth()->user()->id);
        return ($subs->count() > 0) ? true : false ;
    }

}
