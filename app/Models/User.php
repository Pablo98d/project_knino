<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "usuarios";
    protected $primaryKey = "id_Usuario";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NombreUsuario',
        'ApellidosUsuario',
        'email',
        'password',
        'id_Humano',
        'id_EstatusUsuario',
        'id_TipoUsuario',
        'FechaRegistro',
        'UltimaConexion',
        // 'remember_token',
        // 'email_verified_at',
        // 'email',
        // 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return $this->id_TipoUsuario==1;
    }

    public function humano()
    {
        return $this->belongsTo(RegistroHumanos::class, 'id_Humano');
    }
}



// CREATE TABLE IF NOT EXISTS `usuarios` (
//     `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
//     `NombreUsuario` varchar(100) NOT NULL,
//     `ApellidosUsuario` varchar(100) NOT NULL,
//     `email` varchar(50) NOT NULL,
//     `password` varchar(255) NOT NULL,
//     `id_Humano` int(11) NOT NULL,
//     `id_EstatusUsuario` int(11) NOT NULL,
//     `id_TipoUsuario` int(11) NOT NULL,
//     `FechaRegistro` datetime NOT NULL,
//     `UltimaConexion` datetime NOT NULL,
//     PRIMARY KEY (`id_Usuario`),
//     KEY `id_Humano` (`id_Humano`),
//     KEY `id_EstatusUsuario` (`id_EstatusUsuario`),
//     KEY `id_TipoUsuario` (`id_TipoUsuario`),
//     CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_Humano`) REFERENCES `registrohumanos` (`id_Humano`),
//     CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_EstatusUsuario`) REFERENCES `estatususuario` (`id_EstatusUsuario`),
//     CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_TipoUsuario`) REFERENCES `tipousuario` (`id_TipoUsuario`)
//   ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
  
//   INSERT INTO `usuarios` (`id_Usuario`, `NombreUsuario`, `ApellidosUsuario`, `email`, `password`, `id_EstatusUsuario`, `id_TipoUsuario`, `FechaRegistro`, `UltimaConexion`) VALUES
//       (1, 'Miguel', 'Espinosa Trujllo', 'correo1@gmail.com', '$2y$10$6YLYiMsJsLiffXyt8UFhcOfOpG2ieBBAhMw4yLiOz3KEvgfvSYPMe', 1, 1, 1, '2022-11-04 01:05:26', '2022-11-04 01:05:26');
