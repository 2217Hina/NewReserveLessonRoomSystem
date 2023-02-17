<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserve extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     protected $fillable = [
            'user_id',
            'room_id',
            'date',
            'startTime',
           
        ];
        
    
    public function getByLimit(int $limit_count = 10)
    {
        $me = Auth::user()->id;
        return $this->where('user_id',$me)->orderBy('date', 'DESC')->get();
    
    }

}
