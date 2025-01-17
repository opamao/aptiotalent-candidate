<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use App\Models\FeedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiFeedbackController extends Controller
{

    public function faqs()
    {
        $faqs = Faqs::all();

        return response()->json([
            $faqs,
        ], 200);
    }

    public function feedback(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $roles = [
            'candidat' => 'required',
            'contenu' => 'required',
        ];
        $custumMessages = [
            'candidat.required' => 'Votre session a expiré. Veuillez vous reconnecter.',
            'contenu.required' => 'Veuillez saisir votre message avant d\'envoyer.',
        ];

        $validator = Validator::make($request->all(), $roles, $custumMessages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $feedback = new FeedBack();
        $feedback->idfeed = str::uuid();
        $feedback->candidat_id = $request->candidat;
        $feedback->contenu_feed = $request->contenu;

        if ($feedback->save()) {
            return response()->json([
                'message' => "Merci pour l'intérêt que vous portez a notre produit"
            ], 200);
        } else {
            return response()->json([
                'message' => "Problème lors de l'envoi de votre message. Veuillez réessayer!",
            ], 401);
        }
    }
}
