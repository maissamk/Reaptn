<?php
namespace App\Service;

use App\Repository\UserRepository;

class UserStatisticsService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserStatisticsByRole(): array
    {
        $data = $this->userRepository->countUsersByRole();
        $statistics = [];

        foreach ($data as $row) {
            $role = str_replace(['ROLE_', '"', '[', ']'], '', $row['role']);
            $statistics[$role] = $row['user_count'];
        }

        return $statistics;
    }
}

