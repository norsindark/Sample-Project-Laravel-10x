<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\orders;
use App\Models\Cart;
use Illuminate\Contracts\Auth\MustVerifyEmail;

//implements MustVerifyEmail

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Tên bảng tương ứng trong cơ sở dữ liệu.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Tên trường khóa chính.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * Các thuộc tính có thể gán dữ liệu vào.
     *
     * @var array
     */
    protected $fillable = [
        'name',     // Tên người dùng
        'email',    // Email người dùng
        'password', // Mật khẩu người dùng
        'username', // Tên người dùng (nếu có)
        'role',  // Quyền hạn người dùng (nếu có)
        'created_at',   // ngày tạo
        'status',   // Trạng thái người dùng (nếu có)
        'address',
        'phone',
    ];

    /**
     * Các thuộc tính nên được ẩn khi trả về dữ liệu.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Các thuộc tính nên được định dạng.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function orders()
    {
        return $this->hasMany(orders::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
