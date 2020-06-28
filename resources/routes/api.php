<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Empleado;

//Lista de empleados

Route::get('empleados',function()
{
  $empleados = Empleado::get();
  return $empleados;
});


//Guardad fase 1
Route::post('empleados',function(Request $request )
{

  //Validar Data de empeados
  /* $request->validate([
    'nombre' => 'required|max:50',
    'apellido' =>'required|max:50',
    'cedula' => 'required|max:20',
    'email' => 'required|max:50|email|unique:empleados',
    'lugar_nacimiento' => 'required|max:50',
    'sexo' => 'required|max:20',
    'telefono' => 'required|numeric',
  ]); */


$empleado = new Empleado;
$empleado->nombre = $request->input('nombre');
$empleado->apellido = $request->input('apellido');
$empleado->cedula = $request->input('cedula');
$empleado->email = $request->input('email');
$empleado->lugar_nacimiento = $request->input('lugar_nacimiento');
$empleado->sexo = $request->input('sexo');
//$empleado->estado_civil = $request->input('estado_civil');
$empleado->telefono = $request->input('telefono');
//metodo para guardar los datos
$empleado->save();



  return $request->all();
});


//Actializar
Route::put('empleados/{id}',function(Request $request, $id){
  $empleado = Empleado::findOrFail($id);
  $empleado->nombre = $request->input('nombre');
  $empleado->apellido = $request->input('apellido');
  $empleado->cedula = $request->input('cedula');
  $empleado->email = $request->input('email');
  $empleado->lugar_nacimiento = $request->input('lugar_nacimiento');
  $empleado->sexo = $request->input('sexo');
  //$empleado->estado_civil = $request->input('estado_civil');
  $empleado->telefono = $request->input('telefono');
  $empleado->save();

  return "Empleado actualizado";

});

//eliminar
Route::delete('empleados/{id}',function(Request $request, $id){
  $empleado = Empleado::findOrFail($id);
  $empleado->delete();

  return "Empleado Eliminado";
});

Route::save('Registrar')(){

}
