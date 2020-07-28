<?php

namespace App\Controllers;

use App\Models\Mtamu;

use CodeIgniter\RESTful\ResourceController;

class Tamu extends ResourceController
{
   protected $format = 'json';
   protected $modelName = 'use App\Models\Mtamu';

   public function __construct()
   {
      $this->mtamu = new Mtamu();
   }

   public function index()
   {
      $mtamu = $this->mtamu->getTamu();

      foreach ($mtamu as $row) {
         $mtamu_all[] = [
            'id' => intval($row['id']),
            'nama' => $row['nama'],
            'email' => $row['email'],
            'alamat' => $row['alamat'],
         ];
      }

      return $this->respond($mtamu_all, 200);
   }

   public function create()
   {
      $nama = $this->request->getPost('nama');
      $email = $this->request->getPost('alamat');
      $alamat = $this->request->getPost('email');

      $data = [
         'nama' => $nama,
         'email' => $email,
         'alamat' => $alamat
      ];

      $simpan = $this->mtamu->insertTamu($data);

      if ($simpan == true) {
         $output = [
            'status' => 200,
            'message' => 'Berhasil menyimpan data',
            'data' => ''
         ];
         return $this->respond($output, 200);
      } else {
         $output = [
            'status' => 400,
            'message' => 'Gagal menyimpan data',
            'data' => ''
         ];
         return $this->respond($output, 400);
      }
   }

   public function show($id = null)
   {
      $mtamu = $this->mtamu->getTamu($id);

      if (!empty($mtamu)) {
         $output = [
            'id' => intval($mtamu['id']),
            'nama' => $mtamu['nama'],
            'email' => $mtamu['email'],
            'alamat' => $mtamu['alamat'],
         ];

         return $this->respond($output, 200);
      } else {
         $output = [
            'status' => 400,
            'message' => 'Data tidak ditemukan',
            'data' => ''
         ];

         return $this->respond($output, 400);
      }
   }

   public function edit($id = null)
   {
      $mtamu = $this->mtamu->getTamu($id);

      if (!empty($mtamu)) {
         $output = [
            'id' => intval($mtamu['id']),
            'nama' => $mtamu['nama'],
            'email' => $mtamu['email'],
            'alamat' => $mtamu['alamat'],
         ];

         return $this->respond($output, 200);
      } else {
         $output = [
            'status' => 400,
            'message' => 'Data tidak ditemukan',
            'data' => ''
         ];
         return $this->respond($output, 400);
      }
   }

   public function update($id = null)
   {
      $data = $this->request->getRawInput();

      $mtamu = $this->mtamu->getTamu($id);

      if (!empty($mtamu)) {

         $updateTamu = $this->mtamu->updateTamu($data, $id);

         $output = [
            'status' => true,
            'data' => '',
            'message' => 'sukses update'
         ];

         return $this->respond($output, 200);
      } else {
         $output = [
            'status' => false,
            'data' => '',
            'message' => 'gagal update'
         ];

         return $this->respond($output, 400);
      }
   }

}