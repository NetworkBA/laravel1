<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;

use DB;

class empleadosController extends Controller
{
    public function index(){

      $empleados = Empleado::all();

      return view('empleados.admin_empleados',compact('empleados'));
    }


    //Metodo para crear empleadosController
    public function create(){
      return view('empleados.alta_empleado',compact('empleados'));
    }

    public function store(Request $request){
      $datosempleado = request()->except($datosempleado);

      $id = DB::table('Empleado')->insertGetId($datosempleado);

      Alert::success("Datos de empleados guardados exitosamente");

      return view('empleados.editar_empleado',compact('empleados'));
    }

    public function edit($id)
    {
      $empleados = Empleado::findOrFail($id);

      return view('empleados.editar_empleado',compact('empleados'));
    }

    public function destroy($id)
    {
      $empleados = Empleado::findOrFail($id);

      Alert:success('Datos eliminados de la base de datos');
      return redirect('empelados');
    }
}
