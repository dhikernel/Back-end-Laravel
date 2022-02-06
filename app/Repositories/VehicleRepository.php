<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository
{
    protected $entity;

    public function __construct(Vehicle $vehicle)
    {
        $this->entity = $vehicle;
    }

    public function getVehicleUser(string $userId)
    {
        return $this->entity
                        ->where('user_id', $userId)
                        ->get();
    }

    public function createNewVehicle(string $userId, array $data)
    {
        $data['user_id'] = $userId;

        return $this->entity->create($data);
    }

    public function getVehicleByUser(string $userId, string $identify)
    {
        return $this->entity
                    ->where('user_id', $userId)
                    ->where('uuid', $identify)
                    ->firstOrfail();
    }

    public function getVehicleByUuid(string $identify)
    {
        return $this->entity
                    ->where('uuid', $identify)
                    ->firstOrfail();
    }

    public function updateVehicleByUuid(string $userId, string $identify, array $data)
    {
        $vehicle = $this->getVehicleByUuid($identify);

        $data['user_id'] = $userId;


        return $vehicle->update($data);
    }

    public function deleteVehicleByUuid(string $identify)
    {
        $vehicle = $this->getVehicleByUuid($identify);

        return $vehicle->delete();
    }
}
