<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PostMetaCreateRequest;
use App\Http\Requests\PostMetaUpdateRequest;
use App\Repositories\PostMetaRepository;
use App\Validators\PostMetaValidator;

/**
 * Class PostMetasController.
 *
 * @package namespace App\Http\Controllers;
 */
class PostMetasController extends Controller
{
    /**
     * @var PostMetaRepository
     */
    protected $repository;

    /**
     * @var PostMetaValidator
     */
    protected $validator;

    /**
     * PostMetasController constructor.
     *
     * @param PostMetaRepository $repository
     * @param PostMetaValidator $validator
     */
    public function __construct(PostMetaRepository $repository, PostMetaValidator $validator)
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
        $postMetas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $postMetas,
            ]);
        }

        return view('postMetas.index', compact('postMetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostMetaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PostMetaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $postMetum = $this->repository->create($request->all());

            $response = [
                'message' => 'PostMeta created.',
                'data'    => $postMetum->toArray(),
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
        $postMetum = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $postMetum,
            ]);
        }

        return view('postMetas.show', compact('postMetum'));
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
        $postMetum = $this->repository->find($id);

        return view('postMetas.edit', compact('postMetum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PostMetaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PostMetaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $postMetum = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'PostMeta updated.',
                'data'    => $postMetum->toArray(),
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
                'message' => 'PostMeta deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'PostMeta deleted.');
    }
}
