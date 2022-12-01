<?php

namespace App\Repositories\Validations;

use Illuminate\Support\Facades\Validator;

class DiscordValidation{

    public function DiscordNoificationValidation($data){
        $rules = [
            "title" => "required",
            "description" => "required",
            "data.name" => 'required',
            "data.email" => 'required',
            "data.phone" => 'required'
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            return response()->json([
                "error" => true,
                'message' => $validator->messages()
            ], 200);
        }

        return ["error" => false, "message" => "Success validation"];
    }

}