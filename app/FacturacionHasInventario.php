<?php
/**
 * Created by PhpStorm.
 * User: noescobar
 * Date: 22/05/15
 * Time: 02:47 PM
 */



use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class FacturacionHasInventario extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'facturacion_has_inventario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facturacion_idfacturacion',
        'facturacion_producto_idproducto',
        'inventario_idinventario',
        'inventario_producto_idproducto'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
