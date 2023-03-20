<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PartnerLocatorService;

class PartnerLocatorController extends Controller
{
    private $partnerLocatorService;

    public function __construct(PartnerLocatorService $partnerLocatorService){
        $this->partnerLocatorService = $partnerLocatorService;
    }
    public function get(Request $request){
        $datas =  $this->partnerLocatorService->get($request->all());
        return response()->json(
            [
                'datas'=>$datas,
                'status'=>true
            ]
        );
    }

    public function getFilterValues(){
        $datas =  $this->partnerLocatorService->getFilterValues();
        return response()->json(
            [
                'datas'=>$datas,
                'status'=>true
            ]
        );
    }
}
