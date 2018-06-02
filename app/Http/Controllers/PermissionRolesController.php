<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PermissionRoleCreateRequest;
use App\Http\Requests\PermissionRoleUpdateRequest;
use App\Repositories\PermissionRoleRepository;
use App\Validators\PermissionRoleValidator;

/**
 * Class PermissionRolesController.
 *
 * @package namespace App\Http\Controllers;
 */
class PermissionRolesController extends Controller
{
    /**
     * @var PermissionRoleRepository
     */
    protected $repository;

    /**
     * @var PermissionRoleValidator
     */
    protected $validator;

    /**
     * PermissionRolesController constructor.
     *
     * @param PermissionRoleRepository $repository
     * @param PermissionRoleValidator $validator
     */
    public function __construct(PermissionRoleRepository $repository, PermissionRoleValidator $validator)
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
        $permissionRoles = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $permissionRoles,
            ]);
        }

        return view('permissionRoles.index', compact('permissionRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PermissionRoleCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PermissionRoleCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $permissionRole = $this->repository->create($request->all());

            $response = [
                'message' => 'PermissionRole created.',
                'data'    => $permissionRole->toArray(),
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
        $permissionRole = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $permissionRole,
            ]);
        }

        return view('permissionRoles.show', compact('permissionRole'));
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
        $permissionRole = $this->repository->find($id);

        return view('permissionRoles.edit', compact('permissionRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PermissionRoleUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PermissionRoleUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $permissionRole = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'PermissionRole updated.',
                'data'    => $permissionRole->toArray(),
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
                'message' => 'PermissionRole deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'PermissionRole deleted.');
    }
}
