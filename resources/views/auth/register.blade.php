<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpacDyna - إنشاء حساب جديد</title>

    <!-- خط رائع ومدمج للعربية -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* تنسيقات مدمجة بالكامل لضمان التشغيل حتى لو لم يتحمل البوتستراب */
        :root {
            --primary-color: #ff4d4d;
            --primary-hover: #e03e3e;
            --bg-gradient-start: #fdf5f2;
            --bg-gradient-end: #fbece7;
            --text-dark: #333333;
            --text-muted: #888888;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            width: 100%;
            max-width: 480px;
            padding: 40px 35px;
            text-align: center;
        }

        .brand-logo {
            font-weight: 800;
            font-size: 30px;
            color: #000000;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .brand-logo span {
            color: var(--primary-color);
        }

        .page-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: right;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
            display: block;
        }

        .input-wrapper {
            display: flex;
            width: 100%;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .input-wrapper:focus-within {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(255, 77, 77, 0.15);
        }

        .form-control {
            flex: 1;
            border: none;
            padding: 12px 15px;
            font-size: 14px;
            font-family: inherit;
            outline: none;
            color: var(--text-dark);
            text-align: right;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .btn-register {
            background-color: var(--primary-color);
            border: none;
            color: white;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 10px;
            width: 100%;
            margin-top: 15px;
            cursor: pointer;
            font-family: inherit;
            transition: background-color 0.3s ease;
        }

        .btn-register:hover {
            background-color: var(--primary-hover);
        }

        .login-link {
            margin-top: 25px;
            font-size: 14px;
            color: var(--text-muted);
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="brand-logo">SPAC<span>DYNA</span></div>
        <div class="page-title">{{ __('messages.create_new_ac') }}</div>

        <form method="POST" action="{{ route('register') }}" autocomplets="off">
            @csrf

            <!-- حقل الاسم الكامل -->
            <div class="form-group">
                <label for="name" class="form-label">{{ __('messages.full_name') }} </label>
                <div class="input-wrapper">
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"
                        placeholder="{{ __('messages.enter_your_full') }}" required autofocus autocomplets="off">
                </div>
                @error('name')
                    <span class="error-message"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <!-- حقل البريد الإلكتروني -->
            <div class="form-group">
                <label for="email" class="form-label">{{ __('messages.email') }} </label>
                <div class="input-wrapper">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"
                        placeholder="name@example.com" required autocomplets="new-password">
                </div>
                @error('email')
                    <span class="error-message"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <!-- حقل كلمة المرور -->
            <div class="form-group">
                <label for="password" class="form-label">{{ __('messages.password') }} </label>
                <div class="input-group">
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="••••••••" required autocomplets="new-password">
                    </div>
                </div>
                @error('password')
                    <span class="error-message"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <!-- حقل تأكيد كلمة المرور -->
            <div class="form-group">
                <label for="password-confirm" class="form-label">{{ __('messages.confirm_pass') }}</label>
                <div class="input-wrapper">
                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control"
                        placeholder="••••••••" required>
                </div>
            </div>

            <button type="submit" class="btn btn-register">
                {{ __('messages.create_ac') }}
            </button>

            <div class="login-link">
                {{ __('messages.aleardy_have') }} <a href="{{ route('login') }}">{{ __('messages.login') }} </a>
            </div>
        </form>
    </div>

</body>

</html>
