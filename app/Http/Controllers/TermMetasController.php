<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TermMetaCreateRequest;
use App\Http\Requests\TermMetaUpdateRequest;
use App\Repositories\TermMetaRepository;
use App\Validators\TermMetaValidator;

/**
 * Class TermMetasController.
 *
 * @package namespace App\Http\Controllers;
 */
class TermMetasController extends Controller
{
    /**
     * @var TermMetaRepository
     */
    protected $repository;

    /**
     * @var TermMetaValidator
     */
    protected $validator;

    /**
     * TermMetasController constructor.
     *
     * @param TermMetaRepository $repository
     * @param TermMetaValidator $validator
     */
    public function __construct(TermMetaRepository $repository, TermMetaValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $termMetas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $termMetas,
            ]);
        }

        return view('termMetas.index', compact('termMetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TermMetaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(TermMetaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $termMetum = $this->repository->create($request->all());

            $response = [
                'message' => 'TermMeta created.',
                'data'    => $termMetum->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $termMetum = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $termMetum,
            ]);
        }

        return view('termMetas.show', compact('termMetum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $termMetum = $this->repository->find($id);

        return view('termMetas.edit', compact('termMetum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TermMetaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(TermMetaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $termMetum = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TermMeta updated.',
                'data'    => $termMetum->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'TermMeta deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'TermMeta deleted.');
    }
}
