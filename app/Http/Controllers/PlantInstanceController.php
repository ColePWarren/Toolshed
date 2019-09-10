<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantInstanceController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return response(PlantInstance::all()->jsonSerialize(), Response::HTTP_OK);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
        $user = auth()->user();
        $newPlantInstance = new PlantInstance();
        $newPlantInstance->userId = $user->id;
        $newPlantInstance->plantTypeId = null;
        $newPlantInstance->plantName = 'I need a name!';
        $newPlantInstance->daysOld = null;
        $newPlantInstance->birthday = null;
        $newPlantInstance->plantMaturity = '';

        return response($newPlantInstance->jsonSerialize(), Response::HTTP_CREATED);
  }

 
  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
      $plantInstance = PlantInstance::findOrFail($id);
      
      if (PlantInstance::validatePlantTypeOwner($id) == false) {
          return response(null, 203);
      }  
      
      foreach($plantInstance as $key => $value) {
        $plantInstance[$key] = $request->$key;
      }
      
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
      PlantInstance::destroy($id);
      return response(null, Response::HTTP_OK);
  }
  
}

?>
