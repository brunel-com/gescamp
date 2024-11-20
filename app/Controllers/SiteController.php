<?php
namespace App\Controllers;

use App\Models\Chambre;
use App\Models\Site as Obj;

class SiteController extends BaseController
{
    /**
     * Liste des objets
     */
    public function index()
    {
        $model = model(Obj::class);
        $objList = $model->getAll();

        $chambreModel = model(Chambre::class);

        for ($i = 0; $i < count($objList); $i++) {
            $chambres = $chambreModel->where('site', $objList[$i]['label'])->findColumn('numero');
            if (!empty($chambres)) {
                $obj['chambres'] = implode(", ", $chambres);
                $objList[$i] = array_merge($objList[$i], $obj);
            }
        }

        $data = [
            'objList' => $objList,
            'title' => 'Liste des sites',
        ];

        return view('sites/index', $data);
        
    }

    public function show($id)
    {
        $model = model(Obj::class);
        $obj = $model->get($id);
    }

    /**
     *  Create view
     */
    public function create_view()
    {
        $data = [
            'title' => 'Ajouter une chambre',
        ];
        return view('sites/create', $data);
    }

    /**
     * Insert dans la BD
     */
    public function create()
    {
        $model = model(Obj::class);
        if ($this->validate([
            'label' => 'required|min_length[1]|max_length[50]',
        ])) {
            $model->save([
                'label' => $this->request->getPost('label'),
            ]);

            session()->setFlashData('flash_operation_success', 'success');

            return redirect()->route('sites.index');
        } else {
            // afficher la vue du formulaire si le formulaire n'est pas bien rempli
            return $this->create();
        }
    }

    
}