<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function hasTheLowPrice($email){
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://paiement.krementlibre.org/isMember.php?email=' . urlencode($email));
        $response=$res->getBody();
        if ($response=='0'){
            return false;
        }else{
            return $response;
        }
    }
}
