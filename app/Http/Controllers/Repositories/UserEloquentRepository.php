<?php
namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Repositories\InterfaceRepository;
use App\Http\Controllers\Repositories\ModelRepository;
use App\User;

/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: September/30/19
 * Time: 15:01
 */


class UserEloquentRepository extends EloquentRepository implements InterfaceRepository
{


    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }
}
