<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperationLogCreateRequest;
use App\Http\Requests\OperationLogUpdateRequest;
use App\Repositories\OperationLogRepository;
use App\Validators\OperationLogValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class OperationLogsController.
 *
 * @package namespace App\Http\Controllers;
 */
class OperationLogsController extends Controller
{
    /**
     * @var OperationLogRepository
     */
    protected $repository;

    /**
     * @var OperationLogValidator
     */
    protected $validator;

    /**
     * OperationLogsController constructor.
     *
     * @param OperationLogRepository $repository
     * @param OperationLogValidator $validator
     */
    public function __construct(OperationLogRepository $repository, OperationLogValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $operationLogs = $this->repository->all();

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $operationLogs,
            ]);
        }

        return view('operationLogs.index', compact('operationLogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OperationLogCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(OperationLogCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $operationLog = $this->repository->create($request->all());

            $response = [
                'message' => 'OperationLog created.',
                'data' => $operationLog->toArray(),
            ];

            if ( $request->wantsJson() ) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch ( ValidatorException $e ) {
            if ( $request->wantsJson() ) {
                return response()->json([
                    'error' => true,
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
        $operationLog = $this->repository->find($id);

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $operationLog,
            ]);
        }

        return view('operationLogs.show', compact('operationLog'));
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
        $operationLog = $this->repository->find($id);

        return view('operationLogs.edit', compact('operationLog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OperationLogUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(OperationLogUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $operationLog = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'OperationLog updated.',
                'data' => $operationLog->toArray(),
            ];

            if ( $request->wantsJson() ) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch ( ValidatorException $e ) {

            if ( $request->wantsJson() ) {

                return response()->json([
                    'error' => true,
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

        if ( request()->wantsJson() ) {

            return response()->json([
                'message' => 'OperationLog deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'OperationLog deleted.');
    }
}
