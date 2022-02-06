<?php

namespace App\Services;

use App\Repositories\{
    UserRepository,
    VehicleRepository
};

class VehicleService
{
    protected $vehicleRepository, $userRepository;

    public function __construct(
        VehicleRepository $vehicleRepository,
        UserRepository $userRepository
    ) {
        $this->vehicleRepository = $vehicleRepository;
        $this->userRepository = $userRepository;
    }

    public function getVehiclesByUser(string $user)
    {
        $user = $this->userRepository->getUserByUuid($user);

        return $this->vehicleRepository->getVehicleUser($user->id);
    }

    public function createNewVehicle(array $data)
    {
        $user = $this->userRepository->getUserByUuid($data['user']);

        return $this->vehicleRepository->createNewVehicle($user->id, $data);
    }

    public function getVehicleByUser(string $user, string $identify)
    {
        $user = $this->userRepository->getUserByUuid($user);

        return $this->vehicleRepository->getVehicleByUser($user->id, $identify);
    }

    public function updateVehicle(string $identify, array $data)
    {
        $user = $this->userRepository->getUserByUuid($data['user']);

        return $this->vehicleRepository->updateVehicleByUuid($user->id, $identify, $data);
    }

    public function deleteVehicle(string $identify)
    {
        return $this->vehicleRepository->deleteVehicleByUuid($identify);
    }
}
