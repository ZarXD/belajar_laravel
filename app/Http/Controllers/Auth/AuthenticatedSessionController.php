<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\EkycRegistration;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        // Redirect berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->route('dashboard');
        }

        $ekyc = EkycRegistration::where('user_id', Auth::id())->first();

        if (!$ekyc) {
            return redirect()->route('ekyc.step1');
        }

        switch ($ekyc->status) {
            case 'draft':
                return redirect()->route('ekyc.step1');
                break;
            case 'submitted':
                return redirect()->route('ekyc.step5');
                break;
            case 'accepted':
                return redirect()->route('ekyc.accepted');
                break;
            case 'rejected':
                return redirect()->route('ekyc.rejected');
                break;
            
            default:
                return redirect()->route('ekyc.step1');
                break;
        }

        // if ($ekyc && $ekyc->status === 'submitted') {
        //     return redirect()->route('ekyc.step5');
        // } else {
        //     return redirect()->route('ekyc.step1');
        // }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
