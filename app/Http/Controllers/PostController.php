<?php

namespace App\Http\Controllers;

use App\Actions\Post\DeletePostActions;
use App\Actions\Post\StorePostActions;
use App\Actions\Post\UpdatePostActions;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
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

    public function update(string $idPost, PostUpdateRequest $request): JsonResponse
    {
        $create = UpdatePostActions::execute($idPost, $request->validated());
        return response()->json(
            ['data' =>  $create,
            'staus' =>  "200" ],
            Response::HTTP_OK
        );
    }

    public function destroy(string $idPost): JsonResponse
    {
        $create = DeletePostActions::execute($idPost);

        return response()->json(
            ['data' =>  $create,
            'staus' =>  "200" ],
            Response::HTTP_OK
        );
    }


    public function postShow(string $idPost): JsonResponse
    {
        return response()->json($this->coleccionPosts->postId($idPost));
    }
}
