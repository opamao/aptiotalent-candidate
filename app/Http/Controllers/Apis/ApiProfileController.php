<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\InfoProfs;
use App\Models\Resumes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiProfileController extends Controller
{
    public function resumeProfile(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $rules = [
            'candidat' => 'required',
            'contenu' => 'required',
        ];

        $messages = [
            'candidat.required' => "Votre session a expiré. Veuillez vous reconnecter.",
            'contenu.required' => "Veuillez saisir votre nouveau mot de passe",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $resu = Resumes::where('candidat_id', '=', $request->candidat);

        if ($resu) {
            $resu->libelle_resume = $request->contenu;

            if ($resu->save()) {
            return response()->json([
                'message' => 'Votre profil a été mise à jour.',
            ], 200);
            } else {
                return response()->json([
                    'message' => "Prblème lors de la mise à jour de votre profile. Veuillez réessayer!!!",
                ], 401);
            }
        } else {
            $resume = new Resumes();
            $resume->idresume = str::uuid();
            $resume->candidat_id = $request->candidat;
            $resume->libelle_resume = $request->contenu;

            if ($resume->save()) {
                return response()->json([
                    'message' => "Votre profil a été ajojté"
                ], 200);
            } else {
                return response()->json([
                    'message' => "Problème lors de l'ajout de votre profil. Veuillez réessayer!",
                ], 401);
            }
        }
    }

    public function infoProProfile(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $rules = [
            'candidat' => 'required',
            'secteur' => 'required',
            'departement' => 'required',
            'categorie' => 'required',
            'fonction' => 'required',
        ];

        $messages = [
            'candidat.required' => "Votre session a expiré. Veuillez vous reconnecter.",
            'secteur.required' => "Veuillez saisir votre secteur",
            'departement.required' => "Veuillez saisir votre departement",
            'categorie.required' => "Veuillez saisir votre catégorie",
            'fonction.required' => "Veuillez saisir votre fonction",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $infos = InfoProfs::where('candidat_id', '=', $request->candidat);

        if ($infos) {
            $infos->secteur_info = $request->secteur;
            $infos->departement_info = $request->departement;
            $infos->categorie_info = $request->categorie;
            $infos->fonction_info = $request->fonction;

            if ($infos->save()) {
            return response()->json([
                'message' => 'Votre information professionnelle a été mise à jour.',
            ], 200);
            } else {
                return response()->json([
                    'message' => "Prblème lors de la mise à jour de votre information professionnelle. Veuillez réessayer!!!",
                ], 401);
            }
        } else {
            $infoProfs = new InfoProfs();
            $infoProfs->idinfo = str::uuid();
            $infoProfs->candidat_id = $request->candidat;
            $infoProfs->secteur_info = $request->secteur;
            $infoProfs->departement_info = $request->departement;
            $infoProfs->categorie_info = $request->categorie;
            $infoProfs->fonction_info = $request->fonction;

            if ($infoProfs->save()) {
                return response()->json([
                    'message' => "Votre information professionnelle a été ajouté."
                ], 200);
            } else {
                return response()->json([
                    'message' => "Problème lors de l'ajout de votre information professionnelle. Veuillez réessayer!",
                ], 401);
            }
        }
    }
}
