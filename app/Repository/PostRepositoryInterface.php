<?php
namespace App\Repository;

use App\Post;
use Illuminate\Support\Collection;

interface PostRepositoryInterface
{
   public function all(): Collection;
}