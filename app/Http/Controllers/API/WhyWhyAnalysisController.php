<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use App\Models\CauseActionData;
use App\Models\WhyWhyAnalysis;

class WhyWhyAnalysisController extends BaseController
{
    public function bulkWhyAnalysisData(Request $request)
    {

        $causeLength = count($request->whyData);
        for($i=0;$i<$causeLength;$i++)
        {
            $new = WhyWhyAnalysis::find($request->whyData[$i]['whyAnalysisId']);
            $new->why1 = $request->whyData[$i]['why1'];
            $new->why2 = $request->whyData[$i]['why2'];
            $new->why3 = $request->whyData[$i]['why3'];
            $new->why4 = $request->whyData[$i]['why4'];
            $new->why5 = $request->whyData[$i]['why5'];
            $new->why6 = $request->whyData[$i]['why6'];
            $new->why7 = $request->whyData[$i]['why7'];
            $new->save();
        }

         return $this->sendResponse($causeLength, 'User login successfully.');
       
        
    }
}
