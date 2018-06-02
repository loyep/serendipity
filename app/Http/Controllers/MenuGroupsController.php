<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\MenuGroupCreateRequest;
use App\Http\Requests\MenuGroupUpdateRequest;
use App\Repositories\MenuGroupRepository;
use App\Validators\MenuGroupValidator;

/**
 * Class MenuGroupsController.
 *
 * @package namespace App\Http\Controllers;
 */
class MenuGroupsController extends Controller
{
    /**
     * @var MenuGroupRepository
     */
    protected $repository;

    /**
     * @var MenuGroupValidator
     */
    protected $validator;

    /**
     * MenuGroupsController constructor.
     *
     * @param MenuGroupRepository $repository
     * @param MenuGroupValidator $validator
     */
    public function __construct(MenuGroupRepository $repository, MenuGroupValidator $validator)
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
        $menuGroups = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $menuGroups,
            ]);
        }

        return view('menuGroups.index', compact('menuGroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MenuGroupCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(MenuGroupCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $menuGroup = $this->repository->create($request->all());

            $response = [
                'message' => 'MenuGroup created.',
                'data'    => $menuGroup->toArray(),
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
        $menuGroup = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $menuGroup,
            ]);
        }

        return view('menuGroups.show', compact('menuGroup'));
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
        $menuGroup = $this->repository->find($id);

        return view('menuGroups.edit', compact('menuGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MenuGroupUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(MenuGroupUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $menuGroup = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'MenuGroup updated.',
                'data'    => $menuGroup->toArray(),
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
                'message' => 'MenuGroup deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'MenuGroup deleted.');
    }
}
