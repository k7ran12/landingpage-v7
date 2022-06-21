<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class PaginaController
 * @package App\Http\Controllers
 */
class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginas = Pagina::paginate();

        return view('pagina.index', compact('paginas'))
            ->with('i', (request()->input('page', 1) - 1) * $paginas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagina = new Pagina();
        return view('pagina.create', compact('pagina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pagina::$rules);

        $input = $request->all();

        if ($sec1_logo = $request->file('sec1_logo')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec1_logo->getClientOriginalExtension();
            $sec1_logo->move($destinationPath, $profileImage);
            $input['sec1_logo'] = "$profileImage";
        }

        if ($sec1_bannerimagen = $request->file('sec1_bannerimagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec1_bannerimagen->getClientOriginalExtension();
            $sec1_bannerimagen->move($destinationPath, $profileImage);
            $input['sec1_bannerimagen'] = "$profileImage";
        }

        if ($sec2_card1_imagen = $request->file('sec2_card1_imagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec2_card1_imagen->getClientOriginalExtension();
            $sec2_card1_imagen->move($destinationPath, $profileImage);
            $input['sec2_card1_imagen'] = "$profileImage";
        }

        if ($sec2_card2_imagen = $request->file('sec2_card2_imagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec2_card2_imagen->getClientOriginalExtension();
            $sec2_card2_imagen->move($destinationPath, $profileImage);
            $input['sec2_card2_imagen'] = "$profileImage";
        }

        if ($sec2_card3_imagen = $request->file('sec2_card3_imagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec2_card3_imagen->getClientOriginalExtension();
            $sec2_card3_imagen->move($destinationPath, $profileImage);
            $input['sec2_card3_imagen'] = "$profileImage";
        }

        if ($sec4_card1_imagen = $request->file('sec4_card1_imagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec4_card1_imagen->getClientOriginalExtension();
            $sec4_card1_imagen->move($destinationPath, $profileImage);
            $input['sec4_card1_imagen'] = "$profileImage";
        }

        if ($sec4_card2_imagen = $request->file('sec4_card2_imagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec4_card2_imagen->getClientOriginalExtension();
            $sec4_card2_imagen->move($destinationPath, $profileImage);
            $input['sec4_card2_imagen'] = "$profileImage";
        }

        if ($sec5_card1_imagen = $request->file('sec5_card1_imagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec5_card1_imagen->getClientOriginalExtension();
            $sec5_card1_imagen->move($destinationPath, $profileImage);
            $input['sec5_card1_imagen'] = "$profileImage";
        }

        if ($sec5_card2_imagen = $request->file('sec5_card2_imagen')) {
            $destinationPath = 'images/paginas/';
            $profileImage = uniqid() . "." . $sec5_card2_imagen->getClientOriginalExtension();
            $sec5_card2_imagen->move($destinationPath, $profileImage);
            $input['sec5_card2_imagen'] = "$profileImage";
        }

        $pagina = Pagina::create($input);

        return redirect()->route('paginas.index')
            ->with('success', 'Registro creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagina = Pagina::find($id);

        return view('pagina.show', compact('pagina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagina = Pagina::find($id);

        return view('pagina.edit', compact('pagina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pagina $pagina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagina $pagina)
    {
        request()->validate(Pagina::$rulesEdit);

        $input = $request->all();

        if ($sec1_logo = $request->file('sec1_logo')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec1_logo;
            $profileImage = uniqid() . "." . $sec1_logo->getClientOriginalExtension();
            $sec1_logo->move($destinationPath, $profileImage);
            $input['sec1_logo'] = "$profileImage";
        }
        else{
            unset($input['sec1_logo']);
        }

        if ($sec1_bannerimagen = $request->file('sec1_bannerimagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec1_bannerimagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec1_bannerimagen->getClientOriginalExtension();
            $sec1_bannerimagen->move($destinationPath, $profileImage);
            $input['sec1_bannerimagen'] = "$profileImage";
        }
        else{
            unset($input['sec1_bannerimagen']);
        }

        if ($sec2_card1_imagen = $request->file('sec2_card1_imagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec2_card1_imagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec2_card1_imagen->getClientOriginalExtension();
            $sec2_card1_imagen->move($destinationPath, $profileImage);
            $input['sec2_card1_imagen'] = "$profileImage";
        }
        else{
            unset($input['sec2_card1_imagen']);
        }

        if ($sec2_card2_imagen = $request->file('sec2_card2_imagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec2_card2_imagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec2_card2_imagen->getClientOriginalExtension();
            $sec2_card2_imagen->move($destinationPath, $profileImage);
            $input['sec2_card2_imagen'] = "$profileImage";
        }
        else{
            unset($input['sec2_card2_imagen']);
        }

        if ($sec2_card3_imagen = $request->file('sec2_card3_imagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec2_card3_imagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec2_card3_imagen->getClientOriginalExtension();
            $sec2_card3_imagen->move($destinationPath, $profileImage);
            $input['sec2_card3_imagen'] = "$profileImage";
        }
        else{
            unset($input['sec2_card3_imagen']);
        }

        if ($sec4_card1_imagen = $request->file('sec4_card1_imagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec4_card1_imagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec4_card1_imagen->getClientOriginalExtension();
            $sec4_card1_imagen->move($destinationPath, $profileImage);
            $input['sec4_card1_imagen'] = "$profileImage";
        }
        else{
            unset($input['sec4_card1_imagen']);
        }

        if ($sec4_card2_imagen = $request->file('sec4_card2_imagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec4_card2_imagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec4_card2_imagen->getClientOriginalExtension();
            $sec4_card2_imagen->move($destinationPath, $profileImage);
            $input['sec4_card2_imagen'] = "$profileImage";
        }
        else{
            unset($input['sec4_card2_imagen']);
        }

        if ($sec5_card1_imagen = $request->file('sec5_card1_imagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec5_card1_imagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec5_card1_imagen->getClientOriginalExtension();
            $sec5_card1_imagen->move($destinationPath, $profileImage);
            $input['sec5_card1_imagen'] = "$profileImage";
        }
        else{
            unset($input['sec5_card1_imagen']);
        }

        if ($sec5_card2_imagen = $request->file('sec5_card2_imagen')) {
            $destinationPath = 'images/paginas/';
            $image_path = public_path().'/'.$destinationPath.$request->hidden_sec5_card2_imagen;
            unlink($image_path);
            $profileImage = uniqid() . "." . $sec5_card2_imagen->getClientOriginalExtension();
            $sec5_card2_imagen->move($destinationPath, $profileImage);
            $input['sec5_card2_imagen'] = "$profileImage";
        }
        else{
            unset($input['sec5_card2_imagen']);
        }

        $pagina->update($input);

        return redirect()->route('paginas.index')
            ->with('success', 'Registro actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pagina = Pagina::find($id)->delete();

        return redirect()->route('paginas.index')
            ->with('success', 'Registro eliminado correctamente');
    }
}
