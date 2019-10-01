<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: September/30/19
 * Time: 15:01
 */

namespace App\Http\Controllers\Repositories;


interface InterfaceRepository
{
    public function getAll();

    public function find($id);

    public function update($id, array  $attribute);

    public function create(array $attribute);

    public function delete($id);
}
