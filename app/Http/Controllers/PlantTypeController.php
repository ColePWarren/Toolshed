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
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>
