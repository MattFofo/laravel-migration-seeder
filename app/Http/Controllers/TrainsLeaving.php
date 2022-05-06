<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;
class TrainsLeaving extends Controller
{
    public function index() {
        $trains = Train::paginate(10);
        $data = [
            'trains' => $trains
        ];
        //dd($data);
        foreach ($data['trains'] as $train) {
            if ($train['in orario']) {
                $train->in_orario = 'in orario';
            } else {
                $train->in_orario = 'in ritardo';
            }

            if ($train['cancellato']) {
                $train->cancellato = 'cancellato';
            } else {
                $train->cancellato = 'attivo';
            }
        }
        return view('trains_leaving', $data);
    }
}
