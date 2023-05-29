<?php

namespace App\Http\Controllers\Selling;

use App\Models\Selling\StepSelling;
use App\Http\Controllers\Controller;
use App\Models\Repair\BrandDevice;
use App\Models\Repair\ModelBrand;
use App\Models\Repair\TypeDevice;
use Illuminate\Http\Request;

class StepSellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typedevices = TypeDevice::all();
        return view('selling.typedevice', compact('typedevices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $typedevice = TypeDevice::find($request->typedevice);

        $stepSelling = session('stepSelling', []);
        $stepSelling['typedevice'] = $typedevice;
        session(['stepSelling' => $stepSelling]);

        $brand_devices = $typedevice->brandDevices()->get();
        return view('selling.brand_device', compact('brand_devices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StepSelling  $stepSelling
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, StepSelling $stepSelling)
    {
        $brand = BrandDevice::find($request->brand);

        $stepSelling = session('stepSelling', []);
        $stepSelling['brand'] = $brand;
        session(['stepSelling' => $stepSelling]);

        session()->forget([
            'stepSelling.step',
            'stepSelling.answer',
            'stepSelling.functions',
        ]);

        $model_brands = $brand->modelBrand()->get();
        return view('selling.model_brand', compact('model_brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StepSelling  $stepSelling
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,StepSelling $stepSelling)
    {

        $stepSelling = session('stepSelling', []);
        if (!isset($stepSelling['step'])) {
            $model = ModelBrand::find($request->model);
            $stepSelling['model'] = $model;
            $stepSelling['step'][] = 1;
            session(['stepSelling' => $stepSelling]);
        }else {
            $model = $stepSelling['model'];
        }

        $step_sellings = $model->stepSellings();
        $total_step = $step_sellings->count();

        $current_step = max($stepSelling['step']);

        $modelId = $model->id;  // ID du modèle 1 dont vous avez la valeur de pivot_column
        $current_step_selling = StepSelling::whereHas('modelBrands', function ($query) use ($modelId, $current_step) {
            $query->where('model_brand_id', $modelId)
                ->where('order', $current_step);
        })->first();

        $failures = $model->failureDevices()->get();

        return view('selling.sell', compact('model', 'current_step_selling', 'total_step', 'current_step', 'failures', 'step_sellings', 'stepSelling'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StepSelling  $stepSelling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StepSelling $stepSelling)
    {
        $stepSelling = session('stepSelling', []);
        return view('selling.estimation', compact('stepSelling'));
    }

    public function estimatePriceDevice() {
        $stepSelling = session('stepSelling', []);
        return view('selling.estimation', compact('stepSelling'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StepSelling  $stepSelling
     * @return \Illuminate\Http\Response
     */
    public function destroy(StepSelling $stepSelling)
    {
        //
    }

    public function updateQuestionSellingDevice(Request $request)
    {
        $step = $request->input('step');
        $question = $request->input('question');
        $nameStep  = $request->input('nameStep');
        $answer = $request->input('answer');

        $stepSelling = session('stepSelling', []);
        $stepSelling['answer'][$step] = $question;
        $stepSelling['functions'][$step] = [
            'name' => $nameStep,
            'answer' => $answer,
        ];

        session(['stepSelling' => $stepSelling]);

        return response()->json(['success' => true]);
    }

}
