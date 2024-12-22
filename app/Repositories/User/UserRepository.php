<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return User::class;
    }

    public function getListByParams()
    {
        // TODO: Implement getListByParams() method.
        return $this->_model->get();
    }
}
