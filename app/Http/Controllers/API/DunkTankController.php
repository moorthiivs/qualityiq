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

class DunkTankController extends BaseController
{
    

    public function listDefectData(Request $request): JsonResponse
    {
        $defectdata = DefectData::with('model')->with('defect');
        if($request->startDate!=null and $request->endDate!=null)
        {
            $defectdata = $defectdata->whereDate('date','>=',$request->startDate)->whereDate('date','<=',$request->endDate);
        }
        $defectdata = $defectdata->get();
        if(count($defectdata)!=0)
        {
            return $this->sendResponse($defectdata, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Modals Not available']);
        }
        

    }

    public function saveDunkTank(Request $request)
    {
        $model_id = ModalMaster::where('model_description',$request->model_id)->value('id');
        $defect_id = DefectMaster::where('defect_description',$request->defect_id)->value('id');
        $date = date('Y-m-d', strtotime($request->date_time) );
        $new = new DefectData();
        $new->date_time = $request->date_time;
        $new->defect_id = $defect_id;
        $new->defect_status = $request->defect_status;
        $new->model_id = $model_id;
        $new->date = $date;
        $new->quantity = $request->quantity;
        
        if($new->save())
        {
            $defectdata = DefectData::with('model')->with('defect')->get();
            return $this->sendResponse($defectdata, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Unable to save dunk tank']);
        }
    }

    public function editDefectData(Request $request,$id): JsonResponse
    {
        $defectdata = DefectData::with('model')->with('defect')->where('id',$id)->first();
        if($defectdata !=null)
        {
            return $this->sendResponse($defectdata, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Modals Not available']);
        }
        

    }

    public function updateDunkTank(Request $request,$id)
    {
        $model_id = ModalMaster::where('model_description',$request->model_id)->value('id');
        $defect_id = DefectMaster::where('defect_description',$request->defect_id)->value('id');
        $date = date('Y-m-d', strtotime($request->date_time) );
        $new =  DefectData::where('id',$id)->first();
        $new->date_time = $request->date_time;
        $new->defect_id = $defect_id;
        $new->defect_status = $request->defect_status;
        $new->model_id = $model_id;
        $new->date = $date;
        $new->quantity = $request->quantity;
        if($new->save())
        {
            $defectdata = DefectData::with('model')->with('defect')->get();
            return $this->sendResponse($defectdata, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Unable to save dunk tank']);
        }
    }

    public function deleteDefectData(Request $request,$id): JsonResponse
    {
        $defectdata = DefectData::with('model')->with('defect')->where('id',$id)->first();
        if($defectdata !=null)
        {
            DefectData::where('id',$id)->delete();
            return $this->sendResponse($defectdata, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Modals Not available']);
        }
        

    }
}
