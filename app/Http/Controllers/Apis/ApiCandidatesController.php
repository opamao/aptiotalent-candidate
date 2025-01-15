<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Candidats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiCandidatesController extends Controller
{
    public function register(Request $request)
    {
        $roles = [
            'photo' => 'nullable',
            'sexe' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:candidates,email_cand',
            'phone' => 'required|unique:candidates,phone_cand',
            'habitation' => 'nullable',
            'experience_an' => 'required|integer',
            'experience_mois' => 'required|integer',
            'salaire' => 'nullable',
            'password' => 'required'
        ];
        $custumMessages = [
            'sexe.required' => 'Veuillez choisir votre sexe',
            'nom.required' => 'Votre nom est obligatoire',
            'prenom.required' => 'Votre prénom est obligatoire',
            'email.required' => 'Votre email est obligatoire',
            'email.unique' => 'Votre email est déjà utilisé. Veuillez utiliser un autre',
            'phone.unique' => 'Votre numéro de téléphone est déjà utilisé. Veuillez utiliser un autre',
            'phone.required' => 'Votre numéro de téléphone est obligatoire',
            'experience_an.required' => 'Votre expérience en années est obligatoire',
            'experience_an.integer' => 'Votre expérience en années doit être un nombre entier',
            'experience_mois.required' => 'Votre expérience en mois est obligatoire',
            'experience_mois.integer' => 'Votre expérience en mois doit être un nombre entier',
            'salaire.integer' => 'Votre salaire doit être en entier',
            'password.required' => 'Votre mot de passe est obligatoire'
        ];

        $validator = Validator::make($request->all(), $roles, $custumMessages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        // Dois ajouter la partie photo
        $candidate = new Candidats();
        $candidate->idcandidat = Str::uuid();
        $candidate->photo_cand = $request->photo;
        $candidate->sexe_cand = $request->sexe;
        $candidate->nom_cand = $request->nom;
        $candidate->prenom_cand = $request->prenom;
        $candidate->email_cand = $request->email;
        $candidate->phone_cand = $request->phone;
        $candidate->habitation_cand = $request->habitation;
        $candidate->experience_an_cand = $request->experience_an;
        $candidate->experience_mois_cand = $request->experience_mois;
        $candidate->salaire_cand = $request->salaire;
        $candidate->password_cand = Hash::make($request->password);

        if ($candidate->save()) {
            return response()->json([
                'message' => "Votre compte a été créé avec succès"
            ], 200);
        } else {
            return response()->json([
                'message' => "Problème lors de la création de votre compte. Veuillez réessayer!",
            ], 401);
        }
    }

    public function login(Request $request)
    {
        $roles = [
            'login' => 'required',
            'password' => 'required'
        ];
        $custumMessages = [
            'login.required' => 'Votre email ou téléphone est obligatoire',
            'password.required' => 'Votre mot de passe est obligatoire'
        ];

        $validator = Validator::make($request->all(), $roles, $custumMessages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $candidat = Candidats::where('email_cand', $request->login)
            ->orWhere('phone_cand', $request->login)
            ->first();
        if (!$candidat || !Hash::check($request->password, $candidat->password_cand)) {
            return response()->json([
                'message' => 'Login ou mot de passe incorrect. veuillez vérifier vos informations.'
            ], 401);
        }
        $token = $candidat->createToken($candidat->nom_cand . '-AuthToken')->plainTextToken;
        return response()->json([
            'candidat' => $candidat,
            'access_token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        // Supprimer l'utilisateur dont le token est envoyé
        $request->user()->tokens()->delete();

        // Supprimer le token qui est envoyé
        $request->user()->currentAccessToken()->delete();


        return response()->json([
            "message" => "Vous êtes déconencter"
        ], 200);
    }
}
