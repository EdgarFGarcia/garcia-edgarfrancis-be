<?php

namespace App\Htttp\Controllers\API;

use App\Http\Controllers\Controller;

/**service layer */
use App\Services\StoreService;

/**request*/
use App\Request\{
    StoreRequest
};

class StoreControllers extends Controller
{
    /**immutable constructor */
    function __construct(
        protected readonly StoreService $storeService
    ){}

    /**
     * Get all stores
     * @params
     * none
     *
     * @return mixed
     */
    public function getAllStore() : mixed {
        try{
            return repsonse()->json([
                'response'  => true,
                'data'      => $this->storeService->getAllStore(),
            ]);
        }catch(\Exception $e){
            return $this->getError($e, 500);
        }
    }

    /**
     * Get store by id
     * @params int $id
     * @return mixed
     */
    public function getStoreById(int $id) : mixed {
        try{
            return repsonse()->json([
                'response'  => true,
                'data'      => $this->storeService->getStoreById($id),
            ]);
        }catch(\Exception $e){
            return $this->getError($e, 500);
        }
    }

    /**
     * create store
     * @params array $data
     * @validation inject StoreRequest
     * @return mixed
     */
    public function createStore(StoreRequest $request) : mixed {
        try{
            $data = $request->validated();
            return repsonse()->json([
                'response'  => true,
                'data'      => $this->storeService->createStore($data),
            ]);
        }catch(\Exception $e){
            return $this->getError($e, 500);
        }
    }

    /**
     * update store
     * @params int $id
     * @params array $data
     * @return mixed
     */
    public function updateStore(int $id, array $data) : mixed {
        try{
            return repsonse()->json([
                'response'  => true,
                'data'      => $this->storeService->updateStore($id, $data),
            ]);
        }catch(\Exception $e){
            return $this->getError($e, 500);
        }
    }

    /**
     * delete store
     * @params int $id
     * @return mixed
     */
    public function deleteStore(int $id) : mixed {
        try{
            return repsonse()->json([
                'response'  => true,
                'data'      => $this->storeService->deleteStore($id),
            ]);
        }catch(\Exception $e){
            return $this->getError($e, 500);
        }
    }
}