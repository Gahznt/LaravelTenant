<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AuthRepository;

class AuthController extends Controller
{
    private $repository;
    public function __construct(AuthRepository $repository){
        $this->repository = $repository;
    }

    public function registration(Request $request){
        try{
            $registration = $this->repository->register($request->all());
            return response()->json(["error" => false, "message" => $registration]);
        } catch (\Exception $ex) {
            return $ex;
        }
    }
}
