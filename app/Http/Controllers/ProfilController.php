<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprofilRequest;
use App\Http\Requests\UpdateprofilRequest;
use App\Repositories\profilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class profilController extends AppBaseController
{
    /** @var profilRepository $profilRepository*/
    private $profilRepository;

    public function __construct(profilRepository $profilRepo)
    {
        $this->profilRepository = $profilRepo;
    }

    /**
     * Display a listing of the profil.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profils = $this->profilRepository->all();

        return view('profils.index')
            ->with('profils', $profils);
    }

    /**
     * Show the form for creating a new profil.
     *
     * @return Response
     */
    public function create()
    {
        return view('profils.create');
    }

    /**
     * Store a newly created profil in storage.
     *
     * @param CreateprofilRequest $request
     *
     * @return Response
     */
    public function store(CreateprofilRequest $request)
    {
        $input = $request->all();

        $profil = $this->profilRepository->create($input);

        Flash::success('Profil saved successfully.');

        return redirect(route('profils.index'));
    }

    /**
     * Display the specified profil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profil = $this->profilRepository->find($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        return view('profils.show')->with('profil', $profil);
    }

    /**
     * Show the form for editing the specified profil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profil = $this->profilRepository->find($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        return view('profils.edit')->with('profil', $profil);
    }

    /**
     * Update the specified profil in storage.
     *
     * @param int $id
     * @param UpdateprofilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprofilRequest $request)
    {
        $profil = $this->profilRepository->find($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        $profil = $this->profilRepository->update($request->all(), $id);

        Flash::success('Profil updated successfully.');

        return redirect(route('profils.index'));
    }

    /**
     * Remove the specified profil from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profil = $this->profilRepository->find($id);

        if (empty($profil)) {
            Flash::error('Profil not found');

            return redirect(route('profils.index'));
        }

        $this->profilRepository->delete($id);

        Flash::success('Profil deleted successfully.');

        return redirect(route('profils.index'));
    }
}
