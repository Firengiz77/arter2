<?php
namespace App\Http\Controllers;


use App\Http\Requests\HowItWork\StoreHowItWorkRequest;
use App\Http\Requests\HowItWork\UpdateHowItWorkRequest;
use App\Models\HowItWork;
use App\Repositories\HowItWorkRepository;

class HowItWorkController extends Controller
{


    private HowItWorkRepository $howitworkRepository;

    public function __construct(HowItWorkRepository $howitworkRepository)
    {
        $this->howitworkRepository = $howitworkRepository;

    }
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $howitworks    = HowItWork::all();

        return view('howitwork.index', compact('howitworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('howitwork.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHowItWorkRequest $request): \Illuminate\Http\RedirectResponse
    {
        if($request->validated())
        {
            $result =  $this->howitworkRepository->store($request);
        }else{
            return redirect()->back()->with('error', __('ERROR!') );

        }

        if (!data_get($result, 'status')) {
            return redirect()->back()->with('error', $result['message']);
        }


        return redirect()->back()->with('success', __('HowItWork  Successfully added!') );
    }

    /**
     * Display the specified resource.
     */
    public function show(HowItWork $howitwork)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $howitwork = HowItWork::findorFail($id);
        return view('howitwork.edit', compact('howitwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHowItWorkRequest $request,$id): \Illuminate\Http\RedirectResponse
    {
        $howitwork=HowItWork::findorFail($id);
        if($request->validated())
        {
             $result =  $this->howitworkRepository->update($request, $howitwork);
        }else{
            return redirect()->back()->with('error', __('ERROR!') );

        }

        if (!data_get($result, 'status')) {
            return redirect()->back()->with('error', $result['message']);
        }


        return redirect()->back()->with('success', __('HowItWork Successfully Update!') );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $howitwork = HowItWork::findorFail($id);
        $result =  $this->howitworkRepository->destroy($howitwork);


        if (!data_get($result, 'status')) {
            return redirect()->back()->with('error', $result['message']);
        }


        return redirect()->back()->with('success', __('HowItWork Successfully Delete!') );
    }

}
