<?php

namespace App\Repositories;

use App\Models\HowItWork;
use App\Models\Utility;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Repositories\ImageRepository;

use Throwable;

class HowItWorkRepository
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

            $howitwork = new HowItWork();



                $image = $this->imageRepository->upload($request, "HowItWork", "image");
                if (!$image["status"]) {
                    return [
                        "status" => false,
                        "code" => 502,
                        "message" => __("Image Error.")
                    ];
                } elseif ($image["code"] == 200) {
                    $howitwork->image = $image["data"];
                }
                            $howitwork->setTranslation('title', $request->lang??'az', $request->title);            $howitwork->setTranslation('desc', $request->lang??'az', $request->desc);





            $howitwork->save();



            DB::commit();
            return ['status' => true, 'code' => 200, 'data' => $howitwork];
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
     * @param HowItWork $howitwork
     * @return array
     */
    public function update($request, HowItWork $howitwork): array
    {
        DB::beginTransaction();

        try {


                $image = $this->imageRepository->upload($request, "HowItWork", "image");
                if (!$image["status"]) {
                    return [
                        "status" => false,
                        "code" => 502,
                        "message" => __("Image Error.")
                    ];
                } elseif ($image["code"] == 200) {
                    Utility::deleteFile($howitwork->image);
                    $howitwork->image = $image["data"];
                }
                            $howitwork->setTranslation('title', $request->lang, $request->title);            $howitwork->setTranslation('desc', $request->lang, $request->desc);
            $howitwork->update();

            DB::commit();

            return ['status' => true, 'code' => 200, 'data' => $howitwork];


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



    public function destroy(HowItWork $howitwork): array
    {
        DB::beginTransaction();

        try {
            Utility::deleteFile($howitwork->image);
                




            $howitwork->delete();

            DB::commit();

            return ['status' => true, 'code' => 200, 'data' => $howitwork];


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
