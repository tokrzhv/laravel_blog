<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['logo'])){
            $data['logo'] = Storage::disk('public')->put('/images', $data['logo']);
        }
        $password = Str::random(8);
        $data['password'] = Hash::make($password);
        $user = User::firstOrCreate(['email' => $data['email']], $data);

        Mail::to($data['email'])->send(new PasswordMail($password));
        event(new Registered($user)); // for verified new users

       // StoreUserJob::dispatch($data);

        return redirect()->route('admin.user.index');
    }
}
