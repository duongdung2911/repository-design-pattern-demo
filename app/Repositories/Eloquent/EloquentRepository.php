<?php
/**
 * Created by PhpStorm.
 * User: dungdt
 * Date: 03/05/2019
 * Time: 09:05
 */

namespace App\Repositories\Eloquent;


use App\Repositories\Repository;

// Triển khai các phương thức chung của interface Repository
abstract class EloquentRepository implements Repository
{
    protected $model;

    // Phương thức trừu tượng sẽ được triển khai ở các lớp cụ thể và nhận vào Model tương ứng
    abstract public function getModel();

    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function paginate($size = 20)
    {
        $result = $this->model->paginate($size);
        return $result;
    }

    public function create($object)
    {
        return $object->save();
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function deleteAll($ids = [])
    {
        return $this->model->destroy($ids);
    }

    public function update($object)
    {
        return $object->save();
    }

    public function find($id, $columns = array('*'))
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function findWith($id, $associated = [])
    {
        $result = $this->model->with($associated)->find($id);
        return $result;
    }
}
