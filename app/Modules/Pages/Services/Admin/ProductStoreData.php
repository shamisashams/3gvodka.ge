<?php


namespace App\Modules\Pages\Services\Admin;



use App\Modules\Pages\Models\Brand;
use App\Modules\Pages\Models\Product;

/**
 * @property Brand entity
 * @property array infoData
 */
class ProductStoreData extends BaseStoreData
{


    /**
     * @param null $entityId
     *
     * @return mixed|void
     */
    public function setEntityById($entityId = null)
    {
        $this->entity = Product::find($entityId);
        return $this;
    }

    /**
     * @param array $saveData
     *
     * @return Product
     */
    protected function createEntityData($saveData = [])
    {
        return Product::create($saveData);
    }
}
