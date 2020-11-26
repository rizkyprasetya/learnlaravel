<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class slcal extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $items = $request->input('data.*');
        // print_r($items);

        for ($i = 0; $i < count($items); $i++) {

            $value = $items[$i];

            if ($i == 0) {
                $largest = $value;
                $idbig = $i;
                $idsec = $i;
            } else {
                if ($value > $largest) {
                    $secondlargest = $largest;
                    $largest = $value;
                    $idsec = $idbig;
                    $idbig = $i;
                } else if ($i == 1 or $value > $secondlargest) {
                    $secondlargest = $value;
                    $idsec = $i;
                }
            }
        }
        return view('sl.result', ['secondlargest' => $secondlargest, 'idsec' => $idsec + 1]);
    }
}
