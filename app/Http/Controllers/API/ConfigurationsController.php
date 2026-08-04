<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\ModalMaster;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use App\Models\DefectMaster;
use App\Models\DefectData;
use App\Models\CfgCategory;


class ConfigurationsController extends BaseController
{
    public function listModals(Request $request): JsonResponse
    {
        $modals = ModalMaster::where('active','Y')->get();
        if(count($modals)!=0)
        {
            return $this->sendResponse($modals, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Modals Not available']);
        }
        

    }

    public function listDefects(Request $request): JsonResponse
    {
        $defects = DefectMaster::where('active','Y')->get();
        if(count($defects)!=0)
        {
            return $this->sendResponse($defects, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Modals Not available']);
        }
        

    }

    public function listCategories(Request $request): JsonResponse
    {
        $defects = CfgCategory::get();
        if(count($defects)!=0)
        {
            return $this->sendResponse($defects, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Modals Not available']);
        }
        

    }
}
