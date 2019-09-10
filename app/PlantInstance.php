<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PlantInstance extends Model
{
    public function validatePlantTypeOwner($plantInstanceId) {
          $user = auth()->user();
          $plantType = PlantType::findOrFail($plantInstanceId);

          if ($plantType->userId == $user->id) {
             return true;
          } else {
             return false;   
          }
      }   
}
