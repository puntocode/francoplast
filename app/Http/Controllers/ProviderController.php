<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::paginate();
        return view("providers.index", compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("providers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'city' => 'required',
        ]);

        Provider::create($request->all());

        return redirect()->route('providers.index')->with('message', 'Proveedor creado correctamente!!');
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return view("providers.edit", compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $rules = [
            'name' => 'required',
            'city' => 'required',
        ];

        $this->validate($request, $rules);
        $provider->fill($request->all());

        if($provider->isClean()){
            return back()->with('error', 'Se debe modificar por lo menos un campo para editar!!');
        }

        $provider->save();
        return redirect()->route('providers.index')->with('message', 'Proveedor modificado correctamente!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider = Provider::find($id);
        $provider->delete();
        return response()->json([
            'message' => 'Eliminacion correcta!'
        ]);
    }
}
