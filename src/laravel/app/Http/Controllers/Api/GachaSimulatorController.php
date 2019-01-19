<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GachaSimulatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ["Please gachagacha!"];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Count数は全て初期値0
        $ssrCount = 0;
        $srCount = 0;
        $rCount = 0;

        //それぞれの確率
        $ssrProbability = 3;
        $srProbability = 13;
        $rProbability = 100;

        for ($i = 1; $i <= $id; $i++) {
            $probability = mt_rand(1, 100);
            if ($probability <= $ssrProbability) {
                $ssrCount++;
            } elseif ($probability <= $srProbability) {
                $srCount++;
            } elseif ($probability <= $rProbability) {
                $rCount++;
            }
        }
        return ['SSR' => $ssrCount, 'SR' => $srCount, 'R' => $rCount];
    }
}
