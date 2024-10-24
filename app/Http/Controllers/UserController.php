<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    protected UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(): JsonResponse
    {
        $result = $this->repository->get();

        return response()->json($result);
    }
}
