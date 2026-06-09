<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Contact;
use App\Models\Project;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi ke Profile (1 User = 1 Profile)
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // Relasi ke Skills (1 User = Banyak Skills)
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    // Relasi ke Experiences (1 User = Banyak Experiences)
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    // Relasi ke Contacts (1 User = Banyak Contacts)
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    // Relasi ke Projects (1 User = Banyak Projects)
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}