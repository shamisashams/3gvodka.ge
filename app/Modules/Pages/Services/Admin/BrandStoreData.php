<?php


namespace App\Modules\Pages\Services\Admin;



use App\Modules\Pages\Models\Brand;

/**
 * @property Brand entity
 * @property array infoData
 */
class BrandStoreData extends BaseStoreData
{


    /**
     * @param null $entityId
     *
     * @return mixed|void
     */
    public function setEntityById($entityId = null)
    {
        $this->entity = Brand::find($entityId);
        return $this;
    }

    /**
     * @param array $saveData
     *
     * @return Brand
     */
    protected function createEntityData($saveData = [])
    {
        return Brand::create($saveData);
    }
}
