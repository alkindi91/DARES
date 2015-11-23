<?php
namespace Modules\Users\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
// use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;


class User extends Model implements AuthenticatableContract,
                                    HasRoleAndPermissionContract,
                                    CanResetPasswordContract,
                                    StaplerableInterface
{
    use Authenticatable, HasRoleAndPermission, CanResetPassword ,EloquentTrait;

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('avatar', [
            'styles' => [
                'small' => '50x50',
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','avatar', 'email', 'password' ,'sex' ,'birthday'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function scopeAdmin($query)
    {
        $query->where('users.type', 'admin');
    }
}