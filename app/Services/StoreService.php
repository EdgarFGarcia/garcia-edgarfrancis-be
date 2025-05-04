<?php

namespace App\Services;

use App\Models\Store;
use App\Repository\BaseRepository;

class StoreService
{
    /**class properties */
    protected BaseRepository $repository;

    function __construct()
    {
        $this->repository = new BaseRepository(new Store());
    }

    /**
    * Get all stores
    * @params
    * none
    *
    * @return mixed
    */
    public function getAllStore() : mixed {
        return $this->repository->all();
    }

    /**
    * Get store by id
    * @params int $id
    * @return mixed
    */
    public function getStoreById(int $id) : mixed {
        return $this->repository->getById($id);
    }

    /**
    * create store
    * @params array $data
    * @return mixed
    */
    public function createStore(array $data) : mixed {
        return $this->repository->create($data);
    }

    /**
    * update store
    * @params int $id
    * @params array $data
    * @return mixed
    */
    public function updateStore(int $id, array $data) : mixed {
        return $this->repository->update($id, $data);
    }

    /**
    * delete store
    * @params int $id
    * @return mixed
    */
    public function deleteStore(int $id) : mixed {
        return $this->repository->delete($id);
    }
}