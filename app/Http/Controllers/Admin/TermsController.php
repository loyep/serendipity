<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TermCreateRequest;
use App\Http\Requests\TermUpdateRequest;
use App\Repositories\TermRepository;
use App\Validators\TermValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class TermsController.
 *
 * @package namespace App\Http\Controllers\Admin;
 */
class TermsController extends Controller
{
    /**
     * @var TermRepository
     */
    protected $repository;

    /**
     * @var TermValidator
     */
    protected $validator;

    /**
     * TermsController constructor.
     *
     * @param TermRepository $repository
     * @param TermValidator $validator
     */
    public function __construct(TermRepository $repository, TermValidator $validator)
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
        $terms = $this->repository->all();

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $terms,
            ]);
        }

        return view('terms.index', compact('terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TermCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(TermCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $term = $this->repository->create($request->all());

            $response = [
                'message' => 'Term created.',
                'data' => $term->toArray(),
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
        $term = $this->repository->find($id);

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $term,
            ]);
        }

        return view('terms.show', compact('term'));
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
        $term = $this->repository->find($id);

        return view('terms.edit', compact('term'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TermUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(TermUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $term = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Term updated.',
                'data' => $term->toArray(),
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
                'message' => 'Term deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Term deleted.');
    }
}
