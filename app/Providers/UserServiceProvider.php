<?php

namespace App\Providers;

use App\Interfaces\TodolistsRepoInterface;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\UserRepoInterface;
use App\Repository\TodolistsRepository;
use App\Services\UserService;

use App\Repository\UserRepository;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepoInterface::class, UserRepository::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(TodolistsRepoInterface::class,TodolistsRepository::class);
    }
}
