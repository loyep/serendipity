<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\RoleMenuCreateRequest;
use App\Http\Requests\RoleMenuUpdateRequest;
use App\Repositories\RoleMenuRepository;
use App\Validators\RoleMenuValidator;

/**
 * Class RoleMenusController.
 *
 * @package namespace App\Http\Controllers;
 */
class RoleMenusController extends Controller
{
    /**
     * @var RoleMenuRepository
     */
    protected $repository;

    /**
     * @var RoleMenuValidator
     */
    protected $validator;

    /**
     * RoleMenusController constructor.
     *
     * @param RoleMenuRepository $repository
     * @param RoleMenuValidator $validator
     */
    public function __construct(RoleMenuRepository $repository, RoleMenuValidator $validator)
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
        $roleMenus = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $roleMenus,
            ]);
        }

        return view('roleMenus.index', compact('roleMenus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RoleMenuCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(RoleMenuCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $roleMenu = $this->repository->create($request->all());

            $response = [
                'message' => 'RoleMenu created.',
                'data'    => $roleMenu->toArray(),
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
        $roleMenu = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $roleMenu,
            ]);
        }

        return view('roleMenus.show', compact('roleMenu'));
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
        $roleMenu = $this->repository->find($id);

        return view('roleMenus.edit', compact('roleMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RoleMenuUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(RoleMenuUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $roleMenu = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'RoleMenu updated.',
                'data'    => $roleMenu->toArray(),
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
                'message' => 'RoleMenu deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'RoleMenu deleted.');
    }
}
