<?php


namespace App\Http\Services\Customer;


use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CustomerService
{
    
    public function destroy($request)
    {
        $customer = User::where('id', $request->input('id'))->first();
        if ($customer) {

            $customer->delete();
            return true;
        }

        return false;
    }

}
