<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
    protected $OrangModel;

    public function __construct()
    {
        $this->OrangModel = new OrangModel();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;
        $keywoard = $this->request->getVar('keywoard');
        if ($keywoard) {
            $this->OrangModel->search($keywoard);
        } else {
            $orang = $this->OrangModel;
        }

        $data = [
            'title' => 'Daftar Orang',
            // 'orang' => $this->OrangModel->findAll()
            'orang' => $this->OrangModel->paginate(6, 'orang'),
            'pager' => $this->OrangModel->pager,
            'currentPage' => $currentPage
        ];

        return view('orang/index', $data);
    }
}
