<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\GachaSimulatorController as GachaAPI;

class GachaResultController extends Controller
{
    private $gacha;

    public function __construct(GachaAPI $gacha)
    {
        $this->gacha = $gacha;
    }

    public function post(Request $request)
    {
        $count = $request->count;
        return view('gacha.response', $this->gacha->show($count));
    }
}
