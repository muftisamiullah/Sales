<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    public $timestamps = false;
    //protected $primaryKey = 'UserID';
    public function getUser($id){
        try {
           return $this->where('id',$id)->get();
       } catch (\Exception $e) {
           throw new \PDOException($e->getMessage(), 1);
       }
    }
   //  public function getAllUsers()
   // {
   //     try {
   //          return $this->all();           
   //     } catch (\Exception $e) {
   //         throw new \PDOException($e->getMessage(), 1);
   //     }
   // }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName','email', 'password', 'isAdmin','provider','provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'id' => 'integer',
    ];
        /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    
}
