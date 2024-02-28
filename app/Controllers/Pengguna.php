<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Muser;

class Pengguna extends BaseController
{
   

    public function index()
    {
        $data=[
            'introText'=>'<p>Berikut Adalah Data Pengguna</p>',
            'judulHalaman'=>'Data Pengguna',
            'listpengguna'=>$this->pengguna->findAll()
        ];
        return view('pengguna/list-pengguna',$data);
    }

    public function tambah()
    {
        $data=[
            'introText'=>'<p>Silahkan Anda Masukan Data Pada Form Pengguna</p>',
            'judulHalaman'=>'Form Pengguna',
        ];
        return view('pengguna/tambah-pengguna',$data);
    }

    public function simpan()
    {
        $data=[
            'nama_user'=>$this->request->getVar('txtNama')
        ];
        $this->pengguna->save($data);
        return redirect()->to('list-pengguna');
    }

    public function hapus($id)
    {
        $syarat =[
            'id_user'=>$id
        ];
        $this->pengguna->where($syarat)->delete();
        return redirect()->to('/list-pengguna');
    } 

    public function edit($id){

        $syarat=[
            'id_user'=>$id
        ];

        $data=[
            'introText'=>'<p>Silahkan Anda Edit Data Pada Form</p>',
            'judulHalaman'=>'Form Edit',
            'listpengguna'=>$this->pengguna->where($syarat)->findAll()
        ];

        return view('pengguna/edit-pengguna',$data);
    }

    public function update(){

        $data=[
            'id_user'=>$this->request->getVar('id_user'),
            'nama_user'=>$this->request->getVar('txtNama')
        ];
        $this->pengguna->update($this->request->getVar('id_user'),$data);
        return redirect()->to('/list-pengguna');
    }
}
