<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Repositories\produitRepository;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produits = $this->produitRepository->all();

        return view('produits.index')
            ->with('produits', $produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produit $produit)
    {
        $input = $request->all();

        $produit = $this->produitRepository->create($input);

        Flash::success('Produit saved successfully.');

        return redirect(route('produits.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        return view('produits.show')->with('produit', $produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        return view('produits.edit')->with('produit', $produit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        $produit = $this->produitRepository->update($request->all(), $id);

        Flash::success('Produit updated successfully.');

        return redirect(route('produits.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit = $this->produitRepository->find($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        $this->produitRepository->delete($id);

        Flash::success('Produit deleted successfully.');

        return redirect(route('produits.index'));
    }
}
