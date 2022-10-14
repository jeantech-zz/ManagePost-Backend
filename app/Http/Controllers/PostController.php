<?php

namespace App\Http\Controllers;

use App\Actions\Post\StorePostActions;
use App\Http\Requests\PostStoreRequest;
use App\Repositories\Post\ColeccionsPostsRepositories;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(
        private ColeccionsPostsRepositories $coleccionPosts
    )
    {
        $this->coleccionPosts = new ColeccionsPostsRepositories;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->coleccionPosts->allPost());
    }

    public function store(PostStoreRequest $request): JsonResponse
    {
        $createOrderPlate = StorePostActions::execute($request->validated());

        return response()->json(
            ['data' =>  $createOrderPlate,
            'staus' =>  "200" ],
            Response::HTTP_OK
        );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
