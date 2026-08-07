<?php

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

$u = User::first();
echo $u->role->value.' -> viewAny Blog: '.(Gate::forUser($u)->allows('viewAny', Blog::class) ? 'true' : 'false');
