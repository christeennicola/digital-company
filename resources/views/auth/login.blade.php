<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - SpacDyna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --spacdyna-primary: #f5a425;
            /* اللون البرتقالي المساعد */
            --spacdyna-main: #fa6559;
            /* اللون الوردي/الأحمر الأساسي للقالب */
            --spacdyna-dark: #2a2a2a;
            /* اللون الداكن للنصوص */
            --spacdyna-bg: #feebd9;
            /* تدرج خلفية ناعم متناسق */
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--spacdyna-bg) 0%, #ffffff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--spacdyna-dark);
            position: relative;
            overflow-x: hidden;
        }

        /* إضافة لمسة فنية دائرية في الخلفية تشبه رسومات القالب */
        body::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(250, 101, 89, 0.05);
            top: -100px;
            right: -100px;
            z-index: 0;
        }

        body::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: rgba(245, 164, 37, 0.05);
            bottom: -50px;
            left: -50px;
            z-index: 0;
        }

        .auth-container {
            z-index: 1;
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }

        .auth-card {
            background: #ffffff;
            border: none;
            border-radius: 30px;
            /* زوايا دائرية ناعمة جداً تماشي القالب */
            box-shadow: 0 15px 40px rgba(250, 101, 89, 0.08);
            padding: 40px 35px;
            transition: transform 0.3s ease;
        }

        .brand-logo {
            font-size: 28px;
            font-weight: 800;
            color: var(--spacdyna-dark);
            text-decoration: none;
            letter-spacing: 0.5px;
        }

        .brand-logo span {
            color: var(--spacdyna-main);
        }

        .auth-title {
            font-size: 22px;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 25px;
            color: var(--spacdyna-dark);
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #666;
            margin-bottom: 8px;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group-custom i {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
            transition: color 0.3s ease;
            z-index: 10;
        }

        .input-group-custom .form-control {
            padding: 14px 45px 14px 18px;
            border-radius: 15px;
            border: 1.5px solid #eaeaea;
            font-size: 15px;
            background-color: #fcfcfc;
            transition: all 0.3s ease;
        }

        .input-group-custom .form-control:focus {
            border-color: var(--spacdyna-main);
            box-shadow: 0 0 0 4px rgba(250, 101, 89, 0.1);
            background-color: #fff;
        }

        .input-group-custom .form-control:focus+i {
            color: var(--spacdyna-main);
        }

        .form-check-input:checked {
            background-color: var(--spacdyna-main);
            border-color: var(--spacdyna-main);
        }

        [24/05/2026 08:12 م] Badee: .forgot-link {
            color: #888;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: var(--spacdyna-main);
        }

        .btn-auth {
            background: linear-gradient(135deg, var(--spacdyna-main) 0%, #f34e41 100%);
            border: none;
            border-radius: 15px;
            padding: 13px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            width: 100%;
            box-shadow: 0 8px 20px rgba(250, 101, 89, 0.25);
            transition: all 0.3s ease;
        }

        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(250, 101, 89, 0.35);
            color: #fff;
        }

        .auth-footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        .auth-footer a {
            color: var(--spacdyna-main);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .auth-footer a:hover {
            color: var(--spacdyna-primary);
            text-decoration: underline;
        }

        .btn-outline-role {
            border: 2px solid #eaeaea;
            border-radius: 15px;
            color: #666;
            background-color: #fcfcfc;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-outline-role:hover {
            border-color: var(--spacdyna-main);
            color: var(--spacdyna-main);
            background-color: rgba(250, 101, 89, 0.02);
        }

        /* التنسيق البرمجي عند تفعيل الخيار واختياره */
        .btn-check:checked+.btn-outline-role {
            border-color: var(--spacdyna-main) !important;
            background-color: rgba(250, 101, 89, 0.08) !important;
            color: var(--spacdyna-main) !important;
            box-shadow: 0 5px 15px rgba(250, 101, 89, 0.1);
        }

        .btn-check:checked+.btn-outline-role i {
            color: var(--spacdyna-main) !important;
        }

        /* تنسيق الأيقونة الافتراضي داخل الزر */
        .btn-outline-role i {
            transition: color 0.3s ease;
        }

        .email-field-icon {
            position: absolute !important;
            top: 48px !important;
            /* يتناسب مع وجود الـ label في الأعلى */
            left: 15px !important;
            color: #fa6559 !important;
            font-size: 16px !important;
            z-index: 10 !important;
            pointer-events: none !important;
        }

        /* في حال واجهت الأيقونة أي إزاحة إضافية بسبب محاذاة النص */
        body[dir="rtl"] .email-field-icon {
            left: 15px !important;
            right: auto !important;
        }

        .role-options-container {
            display: flex !important;
            gap: 15px !important;
            justify-content: center !important;
            align-items: center !important;
            width: 100% !important;
            max-width: 280px !important;
            /* حجم متناسق مع صندوق الدخول */
            margin: 15px auto !important;
        }

        .role-option-item {
            flex: 1 !important;
            position: relative !important;
        }

        /* 2. تنظيف زر الراديو المخفي */
        .role-radio-input {
            display: none !important;
            visibility: hidden !important;
        }

        /* 3. إعادة بناء وتثبيت كرت الزر */
        .role-radio-label {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 80px !important;
            /* طول ثابت ومريح */
            padding: 10px !important;
            border: 2px solid #eaeaea !important;
            border-radius: 12px !important;
            background-color: #fff !important;
            color: #555 !important;
            font-size: 13px !important;
            font-weight: bold !important;
            cursor: pointer !important;
            box-sizing: border-box !important;
            transition: all 0.2s ease !important;
        }

        /* 4. كسر وهزيمة كود القالب القديم الذي يسحب الأيقونة للخارج */
        .role-radio-label i,
        .role-radio-label svg,
        .role-options-container .role-option-item i,
        .form-action .role-options-container i {
            position: static !important;
            /* إلغاء التموضع المطلق تماماً */
            display: block !important;
            /* جعلها عنصر مستقل فوق النص */
            width: auto !important;
            height: auto !important;
            top: auto !important;
            left: auto !important;
            right: auto !important;
            transform: none !important;
            /* إلغاء الـ translateY القادم من القالب */
            font-size: 22px !important;
            margin: 0 0 6px 0 !important;
            /* مسافة تحت الأيقونة ليظهر النص مريحاً */
            color: #888 !important;
            z-index: 1 !important;
        }

        /* 5. تأثيرات الألوان عند تمرير الماوس */
        .role-radio-label:hover {
            border-color: #fa6559 !important;
            color: #fa6559 !important;
        }

        .role-radio-label:hover i {
            color: #fa6559 !important;
        }

        /* 6. تأثيرات الألوان الفورية عند التفعيل والاختيار */
        .role-radio-input:checked+.role-radio-label {
            border-color: #fa6559 !important;
            background-color: rgba(250, 101, 89, 0.06) !important;
            color: #fa6559 !important;
        }

        .role-radio-input:checked+.role-radio-label i {
            color: #fa6559 !important;
        }

        /* =======================================================
   7. إعادة تثبيت أيقونة البريد الإلكتروني في مكانها الصحيح
   ======================================================= */
        .input-group-custom {
            position: relative !important;
        }

        .input-group-custom i.fa-envelope {
            position: absolute !important;
            top: 50% !important;
            left: 15px !important;
            /* اسحبها لليسار داخل الحقل */
            right: auto !important;
            transform: translateY(-50%) !important;
            /* توسط عمودي مثالي */
            font-size: 16px !important;
            color: #aaa !important;
            z-index: 10 !important;
        }

        .input-group-custom .form-control {
            padding-left: 45px !important;
            /* مسافة أمان حتى لا يغطي النص الأيقونة */
        }

        .input-group-custom i.fa-envelope.force-right-envelope {
            right: 15px !important;
            /* إجبار التثبيت يميناً بدقة */
            left: auto !important;
            /* سحق سطر left: 15px القديم */
            top: 50% !important;
            transform: translateY(-50%) !important;
            color: #fa6559 !important;
            /* لون هوية الموقع الوردي الأنيق */
            z-index: 99 !important;
        }

        /* إعطاء مسافة أمان للنص من جهة اليمين حتى لا يتداخل مع الأيقونة */
        .input-group-custom .form-control {
            padding-right: 45px !important;
            padding-left: 15px !important;
        }
    </style>
</head>

<body>

    <div class="auth-container">
        <div class="auth-card text-center">
            <a href="/" class="brand-logo">SPAC<span>DYNA</span></a>

            <h2 class="auth-title">{{ __('messages.login_to_your_ac') }} </h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="text-start">
                    <div class="input-group-custom">
                        <div class="text-start mb-4">
                            <label class="form-label d-block text-center mb-3">{{ __('messages.login_as') }}</label>
                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="radio" class="btn-check" name="role" id="role_user" value="user"
                                        checked autocomplete="off">
                                    <label class="btn btn-outline-role w-100 py-3" for="role_user">
                                        {{ __('messages.user') }}
                                    </label>
                                </div>

                                <div class="col-6">
                                    <input type="radio" class="btn-check" name="role" id="role_admin"
                                        value="admin" autocomplete="off">
                                    <label class="btn btn-outline-role w-100 py-3" for="role_admin">
                                        {{ __('messages.admin') }}

                                    </label>
                                </div>
                            </div>
                        </div>
                        <label class="form-label">{{ __('messages.email') }} </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email"
                            autofocus>

                        @error('email')
                            <span class="invalid-feedback d-block mt-1"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="text-start">
                    <label class="form-label">{{ __('messages.password') }} </label>
                    <div class="input-group-custom">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="••••••••" required
                            autocomplete="current-password">
                        <i class="fa-solid fa-lock"></i>
                        @error('password')
                            <span class="invalid-feedback d-block mt-1"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check m-0">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label form-label m-0"
                            for="remember">{{ __('messages.remember_me') }}</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">{{ __('messages.forget') }} </a>
                    @endif
                </div>

                <button type="submit" class="btn btn-auth">{{ __('messages.login') }} </button>
            </form>

            <div class="auth-footer">
                {{ __('messages.you_not') }} <a href="{{ route('register') }}">
                    {{ __('messages.create_new_ac') }}</a>
            </div>
        </div>
    </div>

</body>

</html>
