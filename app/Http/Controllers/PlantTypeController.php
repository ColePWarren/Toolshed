<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantTypeController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      return response(PlantType::all()->jsonSerialize(), Response::HTTP_OK);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $user = auth()->user();
    $newPlantType = new PlantType();
    $newPlantType->userId = $user->id;
    $newPlantType->plantName = 'I need a name!';
    $newPlantType->maxPH = null;
    $newPlantType->minPH> = null;
    $newPlantType->maxTemp = null;
    $newPlantType->minTemp = null;
    $newPlantType->minDailySunlightHours = null;
    $newPlantType->maxDailySunlightHours = null;
    $newPlantType->dayToGerminate = null;
    $newPlantType->daysToVegitativeFromGermination = null;
    $newPlantType->daysToBloomFromGermination = null;
    $newPlantType->daysToHarvestFromGermination = null;
    $newPlantType->desiredDaysBetweenHarvests = null;
    $newPlantType->dollarValuePerHarvest = null;
    $newPlantType->seedlingNutrientNeeds = '';
    $newPlantType->vegitativeNutrientNeeds = '';
    $newPlantType->pruningTips = '';
    $newPlantType->imageLink = '';

    return response($newPLantType->jsonSerialize(), Response::HTTP_CREATED);

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
      $plantType = PlantType::findOrFail($id);
      
      if ($this::validatePlantTypeOwner($id) == false) {
          return response(null, 203);
      }      

      foreach($plantType as $key => $value) {
        $plantType[$key] = $request->$key;
      }
      
      //Commenting out below code, will test later and see if foreach loop is a solid solution.
      /*
      $plantType->plantName = 'I need a name!';
      $plantType->maxPH = $request;
      $plantType->minPH> = $request;
      $plantType->maxTemp = $request;
      $plantType->minTemp = $request;
      $plantType->minDailySunlightHours = $request;
      $plantType->maxDailySunlightHours = $request;
      $plantType->dayToGerminate = $request;
      $plantType->daysToVegitativeFromGermination = $request;
      $plantType->daysToBloomFromGermination = $request;
      $plantType->daysToHarvestFromGermination = $request;
      $plantType->desiredDaysBetweenHarvests = $request;
      $plantType->dollarValuePerHarvest = $request;
      $plantType->seedlingNutrientNeeds = $request;
      $plantType->vegitativeNutrientNeeds = $request;
      $plantType->pruningTips = $request;
      $plantType->imageLink = $request;
      */
      
      $plantType->save();

      return response(null, Response::HTTP_OK);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      Crud::destroy($id);

      return response(null, Response::HTTP_OK);
  }
    
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

?>
