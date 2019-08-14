<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Define una relacion Eloquen entre el usuario y los roles
     * Se retorna la relación a la que pertenece
     */
    public function roles() {
        // belongsToMany puede recibir un segundo parámetro con el nombre del pivote si este no se creo usando la convención
        return $this->belongsToMany(Role::class); // pertenece a muchos
    }

    public function hasRoles(array $roles) {
        
        return $this->roles->pluck('nombre')->intersect($roles)->count();
    }
    public function isAdmin() {
        return $this->hasRoles(['Administrador']);
    }
    public function messages() {
        return $this->hasMany(Mensaje::class);
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }

    public function nota() { // <-- un nombre cualquiera
        // se puede usar morphOne/morphMany
        return $this->morphOne(Nota::class, 'anotacion'); // param2 = llave o prefijo, ver migración: $table->integer('anotacion_id')->unsigned();
    }
    public function etiquetas() {
        return $this->morphToMany(Etiqueta::class, 'etiquetable');
    }

 
}