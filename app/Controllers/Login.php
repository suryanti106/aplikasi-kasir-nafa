<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function login(){
        {
            $validasiForm=[
                'username'=>'required',
                'password'=>'required'
            ];
    
            if($this->validate($validasiForm)){
                $username=$this->request->getPost('username');
                $password=md5($this->request->getPost('password'));
    
                $whereLogin=[
                    'username'=>$username,
                    'password'=>$password
                ];
    
                $cekLogin = $this->user->where($whereLogin)->findAll(); 
               if (count($cekLogin)==1) {
                    $dataSession = [
                        'username'=>$cekLogin[0]['username'],
                        'password'=>$cekLogin[0]['password'],
                        'nama_user'=>$cekLogin[0]['nama_user'],
                        'id_user'=>$cekLogin[0]['id_user'],
                        'level'=>$cekLogin[0]['level'],
                        'sudahkahLogin'=>true
                    ];
    
                    session()->set($dataSession);
                    return redirect()->to('/dashboard');
                    
                } else {
                    return redirect()->to('/')->with('pesan', '<p class="text-danger text-center">
                    Gagal Login! <br> Periksa Username atau Password!</p>');
                }
            }
    
            return view('login/page-login');
             }
            }

            public function logout(){
                session()->destroy();
                return redirect()->to('/');
            }
}
