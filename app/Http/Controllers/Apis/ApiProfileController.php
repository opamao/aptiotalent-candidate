<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Candidats;
use App\Models\Competences;
use App\Models\Educations;
use App\Models\Emplois;
use App\Models\InfoProfs;
use App\Models\Projects;
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

        $resu = Resumes::where('candidat_id', '=', $request->candidat)->first();

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

        $infos = InfoProfs::where('candidat_id', '=', $request->candidat)->first();

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

    public function emploiProfile(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $rules = [
            'actuelle' => "required",
            'annee' => "required",
            'mois' => "required",
            'entreprise' => "required",
            'date' => "required",
            'salaire' => "required",
            'preavis' => "required",
            'titre' => "required",
            'type' => "required",
            'candidat' => "required",
        ];

        $messages = [
            'actuelle.required' => "Veuillez cocher si c'est votre poste actuelle (oui ou non).",
            'annee.required' => "Veuillez saisir l'année de fin de contrat",
            'mois.required' => "Veuillez saisir le mois de fin de contrat",
            'entreprise.required' => "Veuillez saisir le nom de l'entreprise",
            'date.required' => "Veuillez saisir la date de prise de fonction",
            'salaire.required' => "Veuillez saisir votre salaire annuel",
            'preavis.required' => "Veuillez cocher un préavis",
            'titre.required' => "Veuillez saisir le titre du poste",
            'type.required' => "Veuillez cocher le type du poste",
            'candidat.required' => "Veuillez vous reconnecter pour mener cette action",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        //Expérience dévient date de fin de contrat,
        //si oui est coché la date de fin disparait y compris préavis
        $emplois = new Emplois();
        $emplois->idemp = str::uuid();
        $emplois->entreprise_actuelle = $request->actuelle;
        $emplois->experience_an = $request->annee ?? 0;
        $emplois->experience_mois = $request->mois ?? 0;
        $emplois->nom_entreprise = $request->entreprise;
        $emplois->date_entree = $request->date;
        $emplois->salaire_annuel = $request->salaire ?? 0;
        $emplois->preavis = $request->preavis;
        $emplois->titre_poste = $request->titre;
        $emplois->typeemploi_id = $request->type;
        $emplois->candidat_id = $request->candidat;

        if ($emplois->save()) {
            return response()->json([
                'message' => "Votre emploi a été ajouté."
            ], 200);
        } else {
            return response()->json([
                'message' => "Problème lors de l'ajout de votre emploi. Veuillez réessayer!",
            ], 401);
        }
    }

    public function educationProfile(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $rules = [
            'etudie' => "required",
            'etablissement' => "required",
            'titre' => "required",
            'debutannee' => "required",
            'debutmois' => "required",
            'finannee' => "required",
            'finmois' => "required",
            'candidat' => "required",
        ];

        $messages = [
            'etudie.required' => "Veuillez cocher si vous continuer d'aller (oui ou non).",
            'etablissement.required' => "Veuillez saisir le nom de l'établissement",
            'titre.required' => "Veuillez saisir le titre de la formation",
            'debutannee.required' => "Veuillez saisir l'année de début de la formation",
            'debutmois.required' => "Veuillez saisir le mois de début de la formation en chiffre",
            'finannee.required' => "Veuillez saisir l'année de fin de la formation",
            'finmois.required' => "Veuillez cocher le mois de fin de la formation",
            'candidat.required' => "Veuillez vous reconnecter pour mener cette action",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        //si oui est coché l'année et le mois de fin devient invisible
        $education = new Educations();
        $education->idedu = str::uuid();
        $education->etudie = $request->etudie;
        $education->nom_etablissement = $request->etablissement;
        $education->titre_formation = $request->titre;
        $education->debut_formation_an = $request->debutannee ?? 0;
        $education->debut_formation_mois = $request->debutmois ?? 0;
        $education->fin_formation_an = $request->finannee ?? 0;
        $education->fin_formation_mois = $request->finmois ?? 0;
        $education->candidat_id = $request->candidat;

        if ($education->save()) {
            return response()->json([
                'message' => "Votre école a été ajouté."
            ], 200);
        } else {
            return response()->json([
                'message' => "Problème lors de l'ajout de votre école. Veuillez réessayer!",
            ], 401);
        }
    }

    public function projectProfile(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $rules = [
            'titre' => "required",
            'role' => "required",
            'lien' => "",
            'sur' => "",
            'debut' => "required",
            'fin' => "required",
            'description' => "required",
            'candidat' => "required",
        ];

        $messages = [
            'titre.required' => "Veuillez le titre du projet",
            'role.required' => "Veuillez saisir le rôle que vous avez jouer dans le projet",
            'debut.required' => "Veuillez saisir l'année de début du projet",
            'fin.required' => "Veuillez saisir l'année de fin du projet",
            'description.required' => "Veuillez saisir une petite description du projet",
            'candidat.required' => "Veuillez vous reconnecter pour mener cette action",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $project = new Projects();
        $project->idproj = str::uuid();
        $project->titre_projet = $request->titre;
        $project->role_projet = $request->role;
        $project->lien_projet = $request->lien;
        $project->sur_projet = $request->sur;
        $project->debut_projet = $request->debut;
        $project->fin_projet = $request->fin;
        $project->description_projet = $request->description;
        $project->candidat_id = $request->candidat;

        if ($project->save()) {
            return response()->json([
                'message' => "Le projet a été ajouté."
            ], 200);
        } else {
            return response()->json([
                'message' => "Problème lors de l'ajout du projet. Veuillez réessayer!",
            ], 401);
        }
    }

    public function skillProfile(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $rules = [
            'libelle' => "required",
            'candidat' => "required",
        ];

        $messages = [
            'libelle.required' => "Veuillez saisir au moins une compétence",
            'candidat.required' => "Veuillez vous reconnecter pour mener cette action",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
            ], 422);
        }

        $competence = new Competences();
        $competence->idcomp = str::uuid();
        $competence->libelle_comp = $request->libelle;
        $competence->candidat_id = $request->candidat;

        if ($competence->save()) {
            return response()->json([
                'message' => "Vos compétences ont été ajouté."
            ], 200);
        } else {
            return response()->json([
                'message' => "Problème lors de l'ajout de votre compétence. Veuillez réessayer!",
            ], 401);
        }
    }

    public function getSkillProfile($id)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $skills = Competences::where('candidat_id', '=', $id)
            ->pluck('libelle_comp');

        $skills = explode(', ', trim($skills[0], '[]'));

        return response()->json($skills, 200);
    }

    public function getInfoProfile($id)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Veuillez vous reconnecter pour mener cette action.',
            ], 401);
        }

        $candidat = Candidats::leftJoin('competences_cles', 'candidates.idcandidat', '=', 'competences_cles.candidat_id')
            ->leftJoin('educations', 'candidates.idcandidat', '=', 'educations.candidat_id')
            ->leftJoin('projects', 'candidates.idcandidat', '=', 'projects.candidat_id')
            ->leftJoin('emplois', 'candidates.idcandidat', '=', 'emplois.candidat_id')
            ->leftJoin('resumes', 'candidates.idcandidat', '=', 'resumes.candidat_id')
            ->leftJoin('update_cv', 'candidates.idcandidat', '=', 'update_cv.candidat_id')
            ->leftJoin('info_prof', 'candidates.idcandidat', '=', 'info_prof.candidat_id')
            ->where('candidates.idcandidat', '=', $id)
            ->get();

        return response()->json($candidat, 200);
    }
}
