@extends('layouts.admin.admin')

@section('admin_main_content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update User info</title>
        <!-- Bootstrap 5 CSS -->
        <link rel="stylesheet" href="https://jsdelivr.net">
        <!-- Google Fonts (Nunito) المتوافق مع لوحة تحكم SB Admin -->
        <link href="https://googleapis.com" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f8f9fc;
                padding: 40px 20px;
            }

            .custom-card {
                border: none;
                border-radius: 5px;
                box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
                max-width: 800px;
                margin: 0 auto;
                background-color: #ffffff;
                overflow: hidden;
            }

            .card-header-custom {
                background-color: #4e73df;
                /* نفس درجة الأزرق في صورتك تماماً */
                color: #ffffff;
                text-align: center;
                padding: 30px;
            }

            .card-header-custom h3 {
                font-size: 24px;
                font-weight: 700;
                margin-bottom: 5px;
            }

            .card-header-custom p {
                font-size: 13px;
                margin-bottom: 0;
                opacity: 0.8;
            }

            .card-body-custom {
                padding: 40px;
            }

            .form-label-custom {
                font-size: 13px;
                font-weight: 700;
                color: #b7b9cc;
                /* اللون الرمادي الفاتح للنصوص التوضيحية */
                margin-bottom: 6px;
                text-transform: capitalize;
            }

            .form-control-custom {
                border: 1px solid #d1d3e2;
                border-radius: 5px;
                padding: 10px 15px;
                font-size: 14px;
                color: #6e707e;
                background-color: #ffffff;
            }

            .form-control-custom:focus {
                border-color: #bac8f3;
                box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
                outline: 0;
            }

            /* تنسيق أزرار التحكم السفلى لتطابق صورتك */
            .btn-custom-container {
                display: flex;
                gap: 15px;
                justify-content: center;
                margin-top: 35px;
            }

            .btn-submit-custom {
                background-color: #4e73df;
                border: 1px solid #4e73df;
                color: white;
                padding: 10px 30px;
                font-size: 14px;
                font-weight: 600;
                border-radius: 5px;
                flex: 1;
                max-width: 200px;
                transition: all 0.3s ease;
            }

            .btn-submit-custom:hover {
                background-color: #2e59d9;
                border-color: #2653d4;
                color: white;
            }

            .btn-cancel-custom {
                background-color: #f8f9fc;
                border: 1px solid #d1d3e2;
                color: #858796;
                padding: 10px 30px;
                font-size: 14px;
                font-weight: 600;
                border-radius: 5px;
                flex: 1;
                max-width: 200px;
                text-align: center;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .btn-cancel-custom:hover {
                background-color: #eaecf4;
                color: #6e707e;
            }

            .invalid-feedback-custom {
                color: #e74a3b;
                font-size: 12px;
                margin-top: 5px;
                display: block;
            }
        </style>
    </head>

    <body>

        <div class="custom-card">
            <!-- رأس الكارد الأزرق المطابق لتصميم لوحة التحكم -->
            <div class="card-header-custom">
                <h3>Create / Update User</h3>
                <p>Modify the details below to update your account parameters</p>
            </div>

            <!-- جسم الفورم الداخلي بالحقول المطلوبة -->
            <div class="card-body-custom">
                <form method="POST" action="{{ route('user.update', $dataToupdate->id) }}">
                    @csrf
                    @method('PUT')
                    <!-- حقل الاسم (Name) -->
                    <div class="mb-4">
                        <label for="name" class="form-label-custom">Name</label>
                        <input type="text" id="name" name="name" class="form-control form-control-custom w-100"
                            value="{{ $dataToupdate->name }}" placeholder="Enter full name" required autofocus>
                        @error('name')
                            <span class="invalid-feedback-custom"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- حقل البريد الإلكتروني (Email) -->
                    <div class="mb-4">
                        <label for="email" class="form-label-custom">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control form-control-custom w-100"
                            value="{{ $dataToupdate->email }}" placeholder="Enter email address" required>
                        @error('email')
                            <span class="invalid-feedback-custom"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- حقل كلمة المرور (Password) -->
                    <div class="mb-4">
                        <label for="password" class="form-label-custom">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-custom w-100"
                            placeholder="••••••••" required>
                        @error('password')
                            <span class="invalid-feedback-custom"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- أزرار الإرسال والإلغاء (Submit & Cancel) -->
                    <div class="btn-custom-container">
                        <a href="{{ url()->previous() }}" class="btn-cancel-custom">Cancel</a>
                        <button type="submit" class="btn btn-submit-custom">Save Changes</button>
                    </div>

                </form>
            </div>
        </div>

    </body>

    </html>
@endsection
