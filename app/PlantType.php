<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantType extends Model
{
    private function validatePlantTypeOwner($plantTypeId) {
      $user = auth()->user();
      $plantType = PlantType::findOrFail($plantTypeId);
  
      if ($plantType->userId == $user->id) {
         return true;
      } else {
         return false;   
      }
  }   
}
