<?php

namespace App\Http\Controllers\laravel_example;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Servicios;
use Illuminate\Support\Str;

class ServicesManagement extends Controller
{


    public function index(Request $request){

        $columns = [
            1 => 'id',
            2 => 'nombre',
            3 => 'descripcion',
        ];

        $search = [];

        $totalData = Servicios::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $servicios = Servicios::offset($start)
              ->limit($limit)
              ->orderBy($order, $dir)
              ->get();
        } else {
            $search = $request->input('search.value');
      
            $servicios = Servicios::where('id', 'LIKE', "%{$search}%")
              ->orWhere('nombre', 'LIKE', "%{$search}%")
              ->orWhere('descripcion', 'LIKE', "%{$search}%")
              ->offset($start)
              ->limit($limit)
              ->orderBy($order, $dir)
              ->get();
      
            $totalFiltered = Servicios::where('id', 'LIKE', "%{$search}%")
              ->orWhere('nombre', 'LIKE', "%{$search}%")
              ->orWhere('descripcion', 'LIKE', "%{$search}%")
              ->count();
        }

        $data = [];

        if (!empty($servicios)) {

        $ids = $start;

            foreach ($servicios as $servicio) {
                $nestedData['id'] = $servicio->id;
                $nestedData['fake_id'] = ++$ids;
                $nestedData['name'] = $servicio->nombre;
                $nestedData['descripcion'] = $servicio->descripcion;

                $data[] = $nestedData;
            }
        }

        if ($data) {
            return response()->json([
                'draw' => intval($request->input('draw')),
                'recordsTotal' => intval($totalData),
                'recordsFiltered' => intval($totalFiltered),
                'code' => 200,
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500,
                'data' => [],
            ]);
        }

    }
 
}
