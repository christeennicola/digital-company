<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
        // 1. جلب المستخدم من قاعدة البيانات بناءً على البريد المدخل قبل تسجيل الدخول
        $user = \App\Models\User::where('email', $request->email)->first();

        if ($user) {
            // الحالة الأولى: إذا كان حسابه أدمن في القاعدة، واختار في الواجهة user
            if ($user->role === 'admin' && $request->role === 'user') {
                return redirect()->route('login')
                    ->withInput($request->only('email', 'role'))
                    ->withErrors([
                        'email' => 'Sorry You Are Not Allow To Enter'
                    ]);
            }

            // الحالة الثانية: إذا كان حسابه عادي في القاعدة، واختار في الواجهة admin
            if ($user->role !== 'admin' && $request->role === 'admin') {
                return redirect()->route('login')
                    ->withInput($request->only('email', 'role'))
                    ->withErrors([
                        'email' => 'Sorry You Are Not Allow To Enter'
                    ]);
            }
        }

        // 2. إذا كانت الخيارات متطابقة وسليمة، نسمح له بالتحقق من كلمة المرور وتسجيل الدخول
        $request->authenticate();

        // 3. تجديد الجلسة للأمان
        $request->session()->regenerate();

        // 4. التوجيه النهائي بعد النجاح
        if ($request->user()->role === 'admin') {
            return redirect()->intended(route('dash.index'))
                ->with('login_success', 'Welcome In Admin Panel');
        }

        return redirect()->intended('/')
            ->with('login_success', 'You are logged in!');
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
