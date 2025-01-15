<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiFeedbackController extends Controller
{

    public function faqs() {
        // if (!Auth::check()) {
        //     return response()->json([
        //         'status' => false,
        //         'message' => 'Vous devez être connecté pour voir les FAQ.',
        //     ], 401);
        // }

        $faqs = Faqs::all();

        return response()->json([
            $faqs,
        ], 200);
    }
}
