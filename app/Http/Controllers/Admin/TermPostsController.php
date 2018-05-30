<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TermPostCreateRequest;
use App\Http\Requests\TermPostUpdateRequest;
use App\Repositories\TermPostRepository;
use App\Validators\TermPostValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class TermPostsController.
 *
 * @package namespace App\Http\Controllers\Admin;
 */
class TermPostsController extends Controller
{
    /**
     * @var TermPostRepository
     */
    protected $repository;

    /**
     * @var TermPostValidator
     */
    protected $validator;

    /**
     * TermPostsController constructor.
     *
     * @param TermPostRepository $repository
     * @param TermPostValidator $validator
     */
    public function __construct(TermPostRepository $repository, TermPostValidator $validator)
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
        $termPosts = $this->repository->all();

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $termPosts,
            ]);
        }

        return view('termPosts.index', compact('termPosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TermPostCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(TermPostCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $termPost = $this->repository->create($request->all());

            $response = [
                'message' => 'TermPost created.',
                'data' => $termPost->toArray(),
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
        $termPost = $this->repository->find($id);

        if ( request()->wantsJson() ) {

            return response()->json([
                'data' => $termPost,
            ]);
        }

        return view('termPosts.show', compact('termPost'));
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
        $termPost = $this->repository->find($id);

        return view('termPosts.edit', compact('termPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TermPostUpdateRequest $request
     * @param  string $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(TermPostUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $termPost = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'TermPost updated.',
                'data' => $termPost->toArray(),
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
                'message' => 'TermPost deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'TermPost deleted.');
    }
}
