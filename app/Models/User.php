<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * Các trường có thể gán hàng loạt.
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'email_verified_at', 
        'verification_token',
        'reset_token',
    ];
    

    /**
     * Các trường bị ẩn khi trả về JSON.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Các kiểu dữ liệu được cast.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Quan hệ với bảng sessions.
     */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    /**
     * Quan hệ với bảng user_logs.
     */
    public function logs()
    {
        return $this->hasMany(UserLog::class);
    }
}
