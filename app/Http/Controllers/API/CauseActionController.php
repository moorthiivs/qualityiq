<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use App\Models\CauseActionData;
use App\Models\WhyWhyAnalysis;

class CauseActionController extends BaseController
{
    public function saveCauseEffect(Request $request)
    {
        if(empty($request->defect)) {
            return $this->sendError('Validation Error', ['error' => 'Please select a defect first.']);
        }

        $new = new CauseActionData();
        $new->defect_id = $request->defect;
        $new->cause_description = $request->causeDescription;
        $new->category_id = $request->category;
        $new->effect_description = $request->effectDescription;
        $new->status = 'Y';
        $new->action = 'Y';
        if($new->save())
        {
            $whyNew = new WhyWhyAnalysis();
            $whyNew->cause_id = $new->id;
            $whyNew->save();
            
            $defectdata = CauseActionData::get();
            return $this->sendResponse($defectdata, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Unable to save dunk tank']);
        }
    }

    public function listDefectDetails(Request $request)
    {
        $modals = CauseActionData::with('category')->with('whyAnalysis')->where('defect_id',$request->defect)->get();
        return $this->sendResponse($modals, 'Data retrieved successfully.');
    }

     public function updateCauseEffect(Request $request,$id)
    {
        $new = CauseActionData::find($id);
        $new->defect_id = $request->defect;
        $new->cause_description = $request->causeDescription;
        $new->category_id = $request->category;
        $new->effect_description = $request->effectDescription;
        $new->status = 'Y';
        $new->action = 'Y';
        if($new->save())
        {
            $defectdata = CauseActionData::get();
            return $this->sendResponse($defectdata, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Unable to save dunk tank']);
        }
    }

    public function listCauseDetails(Request $request)
    {
        $causes = CauseActionData::with('category')->with('whyAnalysis');
        if($request->category!=null)
        {
            $causes = $causes->where('category_id',$request->category);
        }
        if($request->defect!=null)
        {
            $causes =  $causes->where('defect_id',$request->defect);
        }
        $causes =  $causes->get();
        if(count($causes)!=0)
        {
            return $this->sendResponse($causes, 'User login successfully.');
        }
        else
        {
            return $this->sendError('Modals Not available',   ['error'=>'Modals Not available']);
        }
    }

    public function causeActionBulkUpdate(Request $request)
    {
        $causeLength = count($request->cause_actions);
        for($i=0;$i<$causeLength;$i++)
        {
            $new = CauseActionData::find($request->cause_actions[$i]['causeActionId']);
            $new->status = $request->cause_actions[$i]['status'];
            $new->action = $request->cause_actions[$i]['action'];
            $new->save();
        }

         return $this->sendResponse($causeLength, 'User login successfully.');
       
        
    }

    
}
