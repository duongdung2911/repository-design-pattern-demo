<?php
/**
 * Created by PhpStorm.
 * User: dungdt
 * Date: 03/05/2019
 * Time: 09:00
 */

namespace App\Repositories;

// Mô tả các phương thức chung mà các Model đều cần sử dụng
interface Repository
{
    public function getAll();

    public function paginate($size = 20);

    public function create($object);

    public function update($object);

    public function delete($id);

    public function deleteAll($ids = []);

    public function find($id, $columns = array('*'));

    public function findWith($id, $associated = []);
}
