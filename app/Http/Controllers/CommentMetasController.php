<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CommentMetaCreateRequest;
use App\Http\Requests\CommentMetaUpdateRequest;
use App\Repositories\CommentMetaRepository;
use App\Validators\CommentMetaValidator;

/**
 * Class CommentMetasController.
 *
 * @package namespace App\Http\Controllers;
 */
class CommentMetasController extends Controller
{
    /**
     * @var CommentMetaRepository
     */
    protected $repository;

    /**
     * @var CommentMetaValidator
     */
    protected $validator;

    /**
     * CommentMetasController constructor.
     *
     * @param CommentMetaRepository $repository
     * @param CommentMetaValidator $validator
     */
    public function __construct(CommentMetaRepository $repository, CommentMetaValidator $validator)
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
        $commentMetas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $commentMetas,
            ]);
        }

        return view('commentMetas.index', compact('commentMetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CommentMetaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CommentMetaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $commentMetum = $this->repository->create($request->all());

            $response = [
                'message' => 'CommentMeta created.',
                'data'    => $commentMetum->toArray(),
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
        $commentMetum = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $commentMetum,
            ]);
        }

        return view('commentMetas.show', compact('commentMetum'));
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
        $commentMetum = $this->repository->find($id);

        return view('commentMetas.edit', compact('commentMetum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CommentMetaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CommentMetaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $commentMetum = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'CommentMeta updated.',
                'data'    => $commentMetum->toArray(),
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
                'message' => 'CommentMeta deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'CommentMeta deleted.');
    }
}
