<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        if (isset($data['logo'])) {
            $data['logo'] = Storage::disk('public')->put('/images', $data['logo']);
        }
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
