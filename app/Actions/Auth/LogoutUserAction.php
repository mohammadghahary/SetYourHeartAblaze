<?php

namespace App\Actions\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutUserAction
{
    /**
     * Execute user logout.
     */
    public function execute(?Request $request = null): void
    {
        Auth::guard('web')->logout();

        if ($request !== null) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
    }
}
