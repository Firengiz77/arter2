<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\Utility;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Repositories\ImageRepository;

use Throwable;

class CityRepository
{

    private ImageRepository $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;

    }



    public function store($request): array
    {
        DB::beginTransaction();

        try {

            $city = new City();


            $city->setTranslation('name', $request->lang??'az', $request->name);       
              
            $city->save();



            DB::commit();
            return ['status' => true, 'code' => 200, 'data' => $city];
        } catch (ModelNotFoundException $e) {
            DB::rollBack();

            return [
                'status' => false,
                'code' => 404,
                'message' => __('errors.404')
            ];

        } catch (Throwable $e) {
            DB::rollBack();

            return [
                'status' => false,
                'code' => 502,
                'message' => __('errors.502')
            ];


        }
    }


    /**
     * @param $request
     * @param City $city
     * @return array
     */
    public function update($request, City $city): array
    {
        DB::beginTransaction();

        try {

            $city->setTranslation('name', $request->lang, $request->name);        
         
            $city->update();

            DB::commit();

            return ['status' => true, 'code' => 200, 'data' => $city];


        } catch (ModelNotFoundException $e) {
            DB::rollBack();

            return [
                'status' => false,
                'code' => 404,
                'message' => __('errors.404')
            ];

        } catch (Throwable $e) {
            DB::rollBack();

            return [
                'status' => false,
                'code' => 502,
                'message' => __('errors.502')
            ];


        }
    }



    public function destroy(City $city): array
    {
        DB::beginTransaction();

        try {
            




            $city->delete();

            DB::commit();

            return ['status' => true, 'code' => 200, 'data' => $city];


        } catch (ModelNotFoundException $e) {
            DB::rollBack();

            return [
                'status' => false,
                'code' => 404,
                'message' => __('errors.404')
            ];

        } catch (Throwable $e) {
            DB::rollBack();

            return [
                'status' => false,
                'code' => 502,
                'message' => __('errors.502')
            ];


        }
    }



}
