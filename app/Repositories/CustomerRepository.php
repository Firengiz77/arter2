<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Models\Utility;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Repositories\ImageRepository;

use Throwable;

class CustomerRepository
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

            $customer = new Customer();


            $customer->setTranslation('name', $request->lang??'az', $request->name);            $customer->setTranslation('profession', $request->lang??'az', $request->profession);            $customer->setTranslation('desc', $request->lang??'az', $request->desc);





            $customer->save();



            DB::commit();
            return ['status' => true, 'code' => 200, 'data' => $customer];
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
     * @param Customer $customer
     * @return array
     */
    public function update($request, Customer $customer): array
    {
        DB::beginTransaction();

        try {

            $customer->setTranslation('name', $request->lang, $request->name);            $customer->setTranslation('profession', $request->lang, $request->profession);            $customer->setTranslation('desc', $request->lang, $request->desc);
            $customer->update();

            DB::commit();

            return ['status' => true, 'code' => 200, 'data' => $customer];


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



    public function destroy(Customer $customer): array
    {
        DB::beginTransaction();

        try {
            




            $customer->delete();

            DB::commit();

            return ['status' => true, 'code' => 200, 'data' => $customer];


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
