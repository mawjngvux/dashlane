<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Password extends Model
{
    use HasFactory;

    protected $table = 'passwords'; // Tên bảng trong database

    protected $fillable = [
        'user_id',
        'website',
        'username',
        'password',
    ];

    protected $hidden = [
        'password', // Ẩn mật khẩu khi trả về JSON
    ];

    /**
     * Mã hóa mật khẩu trước khi lưu vào database.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Quan hệ với User (Mỗi Password thuộc về một User)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
