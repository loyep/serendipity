<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserMetaCreateRequest;
use App\Http\Requests\UserMetaUpdateRequest;
use App\Repositories\UserMetaRepository;
use App\Validators\UserMetaValidator;

/**
 * Class UserMetasController.
 *
 * @package namespace App\Http\Controllers;
 */
class UserMetasController extends Controller
{
    /**
     * @var UserMetaRepository
     */
    protected $repository;

    /**
     * @var UserMetaValidator
     */
    protected $validator;

    /**
     * UserMetasController constructor.
     *
     * @param UserMetaRepository $repository
     * @param UserMetaValidator $validator
     */
    public function __construct(UserMetaRepository $repository, UserMetaValidator $validator)
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
        $userMetas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userMetas,
            ]);
        }

        return view('userMetas.index', compact('userMetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserMetaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(UserMetaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $userMetum = $this->repository->create($request->all());

            $response = [
                'message' => 'UserMeta created.',
                'data'    => $userMetum->toArray(),
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
        $userMetum = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userMetum,
            ]);
        }

        return view('userMetas.show', compact('userMetum'));
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
        $userMetum = $this->repository->find($id);

        return view('userMetas.edit', compact('userMetum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserMetaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UserMetaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $userMetum = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'UserMeta updated.',
                'data'    => $userMetum->toArray(),
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
                'message' => 'UserMeta deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'UserMeta deleted.');
    }
}
