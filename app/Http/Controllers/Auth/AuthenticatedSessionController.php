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
        // 1. التحقق من الحقول القادمة من الفورم بما فيها أزرار الـ role
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'role' => ['nullable', 'string', 'in:user,admin'],
        ]);

        // 2. محاولة تسجيل الدخول بناءً على الإيميل، الباسورد، والرتبة المختارة معاً
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            // 3. التوجيه الذكي بعد نجاح الدخول
            $user = \Illuminate\Support\Facades\Auth::user();
            if ($user && $user->role === 'admin') {
                return redirect()->intended('/admin/dash'); // لوحة تحكم الأدمن
            }
            return redirect('/home'); // صفحة المستخدم العادي
        }

        // في حال فشل الدخول أو عدم تطابق الرتبة مع الإيميل
        return back()->withErrors([
            'email' => 'بيانات الاعتماد المدخلة أو نوع الحساب غير متطابق مع سجلاتنا.',
        ])->onlyInput('email');
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
