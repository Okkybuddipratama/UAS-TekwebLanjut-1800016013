<?php

namespace App\Models;

use CodeIgniter\Model;

class Mtamu extends Model
{
   protected $table = 'tamu';

   public function getTamu($id = false)
   {
      if ($id === false) {
         return $this->findAll();
      } else {
         return $this->getWhere(['id' => $id])->getRowArray();
      }
   }
   public function insertTamu($data)
   {
      $query = $this->db->table($this->table)->insert($data);
      if ($query) {
         return true;
      } else {
         return false;
      }
   }
   public function updateTamu($data, $id)
   {
      return $this->db->table($this->table)->update($data, ['id' => $id]);
   }

}