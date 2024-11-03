<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproduiteesRequest;
use App\Http\Requests\UpdateproduiteesRequest;
use App\Repositories\produiteesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class produiteesController extends AppBaseController
{
    /** @var produiteesRepository $produiteesRepository*/
    private $produiteesRepository;


    public function __construct(produiteesRepository $produiteesRepo)
    {
        $this->produiteesRepository = $produiteesRepo;
    }

    /**
     * Display a listing of the produitees.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $produitees = $this->produiteesRepository->all();

        return view('produitees.index')
            ->with('produitees', $produitees);
    }

    /**
     * Show the form for creating a new produitees.
     *
     * @return Response
     */
    public function create()
    {
        return view('produitees.create');
    }

    /**
     * Store a newly created produitees in storage.
     *
     * @param CreateproduiteesRequest $request
     *
     * @return Response
     */
    public function store(CreateproduiteesRequest $request)
    {
        $input = $request->all();

        $produitees = $this->produiteesRepository->create($input);

        Flash::success('Produitees saved successfully.');

        return redirect(route('produitees.index'));
    }

    /**
     * Display the specified produitees.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produitees = $this->produiteesRepository->find($id);

        if (empty($produitees)) {
            Flash::error('Produitees not found');

            return redirect(route('produitees.index'));
        }

        return view('produitees.show')->with('produitees', $produitees);
    }

    /**
     * Show the form for editing the specified produitees.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produitees = $this->produiteesRepository->find($id);

        if (empty($produitees)) {
            Flash::error('Produitees not found');

            return redirect(route('produitees.index'));
        }

        return view('produitees.edit')->with('produitees', $produitees);
    }

    /**
     * Update the specified produitees in storage.
     *
     * @param int $id
     * @param UpdateproduiteesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproduiteesRequest $request)
    {
        $produitees = $this->produiteesRepository->find($id);

        if (empty($produitees)) {
            Flash::error('Produitees not found');

            return redirect(route('produitees.index'));
        }

        $produitees = $this->produiteesRepository->update($request->all(), $id);

        Flash::success('Produitees updated successfully.');

        return redirect(route('produitees.index'));
    }

    /**
     * Remove the specified produitees from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produitees = $this->produiteesRepository->find($id);

        if (empty($produitees)) {
            Flash::error('Produitees not found');

            return redirect(route('produitees.index'));
        }

        $this->produiteesRepository->delete($id);

        Flash::success('Produitees deleted successfully.');

        return redirect(route('produitees.index'));
    }
}
