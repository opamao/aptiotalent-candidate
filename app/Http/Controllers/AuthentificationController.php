<?php

namespace App\Http\Controllers;

use App\Models\Candidats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthentificationController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function register(Request $request)
    {
        $roles = [
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
            'experience_an.required' => 'Votre expérience en années est obligatoire. Pas d\'expérience = 0',
            'experience_an.integer' => 'Votre expérience en années doit être un nombre entier',
            'experience_mois.required' => 'Votre expérience en mois est obligatoire. Pas d\'expérience = 0',
            'experience_mois.integer' => 'Votre expérience en mois doit être un nombre entier',
            'salaire.integer' => 'Votre salaire doit être en entier',
            'password.required' => 'Votre mot de passe est obligatoire'
        ];

        $request->validate($roles, $custumMessages);

        $candidat = new Candidats();
        $candidat->idcandidat = Str::uuid();
        $candidat->sexe_cand = $request->sexe;
        $candidat->nom_cand = $request->nom;
        $candidat->prenom_cand = $request->prenom;
        $candidat->email_cand = $request->email;
        $candidat->phone_cand = "+225" . $request->phone;
        $candidat->habitation_cand = $request->habitation;
        $candidat->experience_an_cand = $request->experience_an ?? 0;
        $candidat->experience_mois_cand = $request->experience_mois ?? 0;
        $candidat->salaire_cand = $request->salaire ?? 0;
        $candidat->password_cand = Hash::make($request->password);

        if ($candidat->save()) {
            return back()->with('succes',  "Votre compte a été créé avec succès");
        } else {
            return back()->withErrors(["Impossible de créer voitre compte. Veuillez réessayer!!"]);
        }
    }

    public function login(Request $request)
    {
        $roles = [
            'email' => 'required',
            'password' => 'required',
        ];
        $customMessages = [
            'email.required' => "Veuillez saisir votre adresse email",
            'password.required' => "Veuillez saisir votre mot de passe",
        ];
        $request->validate($roles, $customMessages);

        $credentials = $request->only('email', 'password');

        $user = Candidats::where('email_cand', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password_cand)) {
            if ($user->status_cand == 2) {
                return back()->withInput()->withErrors(["Votre compte est inactif. Veuillez contacter l'admin pour l'activer."]);
            } else {
                // Utiliser le guard 'candidat'
                Auth::guard('candidat')->login($user);

                return redirect()->intended('index')->withSuccess('Bon retour');
            }
        } else {
            return back()->withInput()->withErrors(['E-mail ou mot de passe incorrect.']);
        }
    }

    public function dashboard()
    {
        if (Auth::guard('candidat')->check()) {
            return view('dashboard.dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function signOut()
    {
        Auth::guard('candidat')->logout();
        Session::invalidate();
        Session::regenerateToken();

        return Redirect('/');
    }
}
