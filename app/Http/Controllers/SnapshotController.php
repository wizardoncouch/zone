<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PlusTelecomEagleEye\Controllers\EagleEyeController;
use PlusTelecomEagleEye\Interfaces\EagleEyeControllerInterface;
use Validator;

class SnapshotController extends EagleEyeController implements EagleEyeControllerInterface
{
    //
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function eagleEyeCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile'   => 'required',
            'snapshot' => 'required|image'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //These are the required fields of the EagleEye implementation
        $params = [
            'file'   => $request->file('snapshot'),
            'mobile' => $request->get('mobile')
        ];

        return $params;
    }
}
