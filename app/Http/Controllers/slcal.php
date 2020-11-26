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
        $secondlargest = 0;
        $largest = 0;
        $idbig = 0;

        $items = $request->input('data.*');

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
                } else {
                    $secondlargest = $value;
                    $idsec = $i;
                }
            }
        }
        return view('sl.result', ['secondlargest' => $secondlargest, 'idsec' => $idsec + 1]);
    }
}
