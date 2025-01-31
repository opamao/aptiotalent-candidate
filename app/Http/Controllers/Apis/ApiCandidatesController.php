<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\Candidats;
use App\Models\PersonalToken;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        $profile = $request->file('photo');

        switch ($profile) {
            case null:
                $candidate = new Candidats();
                $candidate->idcandidat = Str::uuid();
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
            default:
                $fileNameWithExtension = $profile->getClientOriginalName();
                $imageCandidat = $request->nom_cand . 'photo_candidat_' . time() . '_' . '.' . $fileNameWithExtension;
                $profile->move(public_path('/candidats'), $imageCandidat);

                $candidate = new Candidats();
                $candidate->idcandidat = Str::uuid();
                $candidate->photo_cand = $imageCandidat;
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

        $candidat = Candidats::where('email_cand', '=', $request->login)
            ->orWhere('phone_cand', '=', $request->login)
            ->first();

        if (!$candidat || !Hash::check($request->password, $candidat->password_cand)) {
            return response()->json([
                'message' => 'Login ou mot de passe incorrect. veuillez vérifier vos informations.'
            ], 401);
        } else {
            $tokenVerif = PersonalToken::where('tokenable_id', $candidat->idcandidat)->first();
            if ($tokenVerif) {
                return response()->json([
                    'login' => $request->login,
                    'token' => $tokenVerif->tokenable_id,
                    'message' => 'Vous êtes déjà connecter a un autre appareil. Voulez-vous vous reconnecter ?',
                ], 303);
            } else {
                $token = $candidat->createToken($candidat->nom_cand . '-AuthToken')->plainTextToken;
                $candidat->photo_cand = asset('candidats/' . $candidat->photo_cand);
                return response()->json([
                    'candidat' => $candidat,
                    'access_token' => $token,
                ], 200);
            }
        }
    }

    public function emailVerif(Request $request)
    {
        $roles = [
            'login' => 'required',
        ];
        $custumMessages = [
            'login.required' => 'Veuillez saisir votre adresse email pour réinitialiser votre mot de passe.',
        ];

        $validator = Validator::make($request->all(), $roles, $custumMessages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $candidat = Candidats::where('email_cand', '=', $request->login)
            ->first();

        if (!$candidat) {
            return response()->json([
                'message' => 'Votre adresse email est incorrect. Veuillez vérifier votre email !'
            ], 401);
        } else {
            $otp = rand(1000, 9999);
            $candidat->otp_cand = $otp;

            if ($candidat->save()) {
                // Envoyer l'email avec le code OTP
                try {
                    Mail::to($request->login)->send(new OtpMail($otp));
                    return response()->json([
                        'status' => true,
                    ], 200);
                } catch (Exception $e) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Une erreur est survenue lors de l\'envoi de l\'email. Veuillez réessayer plus tard.',
                        'error' => $e->getMessage()
                    ], 500);
                }
            } else {
                return response()->json([
                    'message' => 'Impossible de générer l\'OTP. Veuillez revenir plus tard.'
                ], 401);
            }
        }
    }

    public function checkCode(Request $request)
    {
        $roles = [
            'login' => 'required',
            'code' => 'required',
        ];
        $custumMessages = [
            'login.required' => 'Impossible de récuperer votre adresse email pour terminer la vérification.',
            'code.required' => 'Veuillez saisir le code OTP pour vérification.',
        ];

        $validator = Validator::make($request->all(), $roles, $custumMessages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $candidat = Candidats::where('email_cand', '=', $request->login)
            ->where('otp_cand', '=', $request->code)
            ->first();

        if (!$candidat) {
            return response()->json([
                'message' => 'Impossible de vérifier votre OTP. Veuillez réessayer.'
            ], 401);
        } else {
            $candidat->otp_cand = null;
            if ($candidat->save()) {
                return response()->json([
                    'status' => true,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Impossible de valider votre OTP. Veuillez réessayer !.'
                ], 401);
            }
        }
    }
    public function newPassword(Request $request)
    {
        $rules = [
            'login' => 'required',
            'newpassword' => 'required',
        ];

        $messages = [
            'login.required' => "Impossible de récuperer votre adresse email.",
            'newpassword.required' => "Veuillez saisir votre nouveau mot de passe.",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $candidat = Candidats::where('email_cand', '=', $request->login)
            ->first();
        if (!$candidat) {
            return response()->json([
                'message' => 'Impossible de réinitialiser votre mot de passe. Veuillez réessayer.'
            ], 401);
        } else {
            $candidat->password_cand = Hash::make($request->newpassword);
            if ($candidat->save()) {
                return response()->json([
                    'message' => 'Votre mot de passe a été modifié. Vous pouvez maintenant vous connecter.',
                ], 200);
            } else {
                return response()->json([
                    'message' => "Problème lors de la réinitialisation de votre mot de passe. Veuillez réessayer!!!",
                ], 401);
            }
        }
    }

    public function retryConnexion(Request $request)
    {
        $request->user()->tokens()->delete();
        $request->user()->currentAccessToken()->delete();

        $candidat = Candidats::where('email_cand', $request->login)
            ->orWhere('phone_cand', $request->login)
            ->first();
        $candidat->photo_cand = asset('candidats/' . $candidat->photo_cand);

        $token = $candidat->createToken($candidat->nom_cand . '-AuthToken')->plainTextToken;
        return response()->json([
            'candidat' => $candidat,
            'access_token' => $token,
        ], 200);
    }

    public function updatePassword(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }
        // $roles = [
        //     'current' => 'required',
        //     'password' => 'required',
        //     'phone' => 'nullable|unique:users,telephone,' . $user->id,
        //     'email' => 'nullable|email|unique:users,email,' . $user->id,
        // ];

        // $customMessages = [
        //     'current.required' => __("messages.phoneUser"),
        //     'password.required' => __("messages.emailRequired"),
        // ];

        $candidat = Candidats::findOrFail($request->id);

        $rules = [
            'current' => 'required',
            'password' => 'required',
        ];

        $messages = [
            'current.required' => "Veuillez saisir votre mot de passe actuel",
            'password.required' => "Veuillez saisir votre nouveau mot de passe",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        if (!Hash::check($request->current, $candidat->password_cand)) {
            $candidat->password_cand = Hash::make($request->password);

            if ($candidat->save()) {
                // 200 ok, déconnecter le candidat pour qu'il se connecte de nouveau
                return response()->json([
                    'message' => 'Votre mot de passe a été modifié',
                ], 200);
            } else {
                return response()->json([
                    'message' => "Problème lors de la modification de votre mot de passe. Veuillez réessayer!!!",
                ], 401);
            }
        } else {
            return response()->json([
                'message' => "L'ancien mot de passe correspond au nouveau mot de passe. Veuillez essayer un autre!!!",
            ], 401);
        }
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

// $client = Clients::findOrFail($id);
// $imagePath = public_path('clients/' . $client->image_cli);
// if (file_exists($imagePath)) {
//     unlink($imagePath);
// }
// $client->delete();
