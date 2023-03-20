<?php
namespace App\Services;

use App\Models\PartnerLocator;

class PartnerLocatorService{
    public function get($params){

        $datas = PartnerLocator::query();

        if($params && $params['q'] != ''){
            $q =  $params['q'];
            $datas = $datas->where('company','like',"%$q%")->orWhere('address','like',"%$q%");
        }

        if($params && $params['type'] != ''){
            $type =  $params['type'];
            $datas = $datas->where('status',$type);
        }

        return $datas->get();
    }

    public function getFilterValues(){

        $types = PartnerLocator::select('status')->groupBy('status')->get();
        // $countries = PartnerLocator::select('countries_covered')->groupBy('countries_covered')->get();
        // $states = PartnerLocator::select('states_covered')->groupBy('states_covered')->get();

        return [
            'types'=>$types,
            // 'countries'=>$countries,
            // 'states'=>$states
        ];
    }
}
