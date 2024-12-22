<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    protected Request $request;
    protected $userRepo;
    public function __construct(
        Request $request,
        UserRepositoryInterface $userRepo
    )
    {
        $this->request = $request;
        $this->userRepo = $userRepo;
    }

    public function getListUsers () {
        $data = [];
        $users = $this->userRepo->getListByParams()->toArray();
        $data = $users;
        $this->message = "Get list users";
        $this->status = 200;
        return $this->responseData($data);
    }
}
