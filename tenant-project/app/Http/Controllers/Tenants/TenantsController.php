<?php

namespace App\Http\Controllers\Tenants;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantsController extends Controller
{
    public function createTestTenant(){
        $example = Tenant::where('id', 'testTenant')->first();
        if($example){
            return response()->json(["error" => true, "message" => "Tenant already created"]);
        }else{
            $tenant = Tenant::create(['id' => 'testTenant']);
            $tenant->domains()->create(['domain' => 'test.localhost']);
            return response()->json(["error" => false, "message" => "Tenant created succefully"]);
        }
    }
}
