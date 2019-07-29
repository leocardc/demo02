<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true; // <-- OJO cualquier usuario está autorizado
    }

     /**
    * Defina aquí las reglas de validación que se aplican al request.
    * @return array
    */
   public function rules() {
    return [
        'nombre' => 'required',
        'precio' => 'required',
        'iva' => 'required',
        'cantidad_disponible' => 'required'
        
    ];
}
function messages() {
    return [
        'nombre.required' => 'El producto requiere un nombre',
        'precio.required' => 'No ha ingresado el precio',
    ];
}


}
