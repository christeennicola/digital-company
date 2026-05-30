@extends('layouts.user.usermessageshow')

@section('main_user')
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Space Dynamic - Update User</title>
        <!-- Bootstrap 5 CSS -->
        <link rel="stylesheet" href="https://jsdelivr.net">
        <!-- Google Fonts (Poppins) المستخدم في قالب Space Dynamic -->
        <link href="https://googleapis.com" rel="stylesheet">

        <style>
            :root {
                --space-green: #03a4ed;
                /* اللون الأخضر المميز لقالب Space Dynamic في الجدول */
                --space-green-hover: #028ecf;
                --space-bg: #f7f7f7;
                --text-dark: #2a2a2a;
                --text-muted: #afafaf;
            }

            /* تعديل اللون الأخضر ليتطابق مع هيدر الجدول المرجعي تماماً */
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #ffffff;
                color: var(--text-dark);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .main-content {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 40px 20px;
            }

            .update-card {
                background: #ffffff;
                border-radius: 30px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
                padding: 40px;
                width: 100%;
                max-width: 550px;
                border: 1px solid #eee;
            }

            .form-title {
                font-size: 28px;
                font-weight: 700;
                color: var(--text-dark);
                margin-bottom: 10px;
                text-align: center;
            }

            .form-subtitle {
                font-size: 14px;
                color: #7a7a7a;
                text-align: center;
                margin-bottom: 30px;
            }

            .form-label {
                font-size: 14px;
                font-weight: 500;
                color: var(--text-dark);
                margin-bottom: 8px;
            }

            .form-control {
                border: 1px solid #e0e0e0;
                border-radius: 20px;
                /* حواف دائرية ناعمة تتناسب مع أزرار الجدول وعناصر القالب */
                padding: 12px 20px;
                font-size: 14px;
                background-color: var(--space-bg);
                color: var(--text-dark);
                transition: all 0.3s ease;
            }

            .form-control:focus {
                background-color: #ffffff;
                border-color: #03c48f;
                /* توهج أخضر متناسق مع هيدر الجدول */
                box-shadow: 0 0 0 0.25rem rgba(3, 196, 143, 0.15);
                outline: 0;
            }

            .btn-update {
                background-color: #fc1212;
                /* اللون الأخضر لهيدر الجدول */
                border: none;
                color: white;
                padding: 12px 30px;
                font-size: 15px;
                font-weight: 600;
                border-radius: 25px;
                width: 100%;
                margin-top: 15px;
                transition: all 0.3s ease;
                box-shadow: 0px 4px 10px rgba(3, 196, 143, 0.2);
            }

            .btn-update:hover {
                background-color: #12fc25;
                color: white;
                transform: translateY(-2px);
            }

            .btn-cancel {
                background-color: transparent;
                border: 1px solid #e0e0e0;
                color: #7a7a7a;
                padding: 12px 30px;
                font-size: 15px;
                font-weight: 500;
                border-radius: 25px;
                width: 100%;
                margin-top: 10px;
                text-align: center;
                text-decoration: none;
                display: block;
                transition: all 0.3s ease;
            }

            .btn-cancel:hover {
                background-color: #f5f5f5;
                color: var(--text-dark);
            }

            /* تنسيق الفوتر المأخوذ من صورتك ليبقى المظهر موحداً */
            footer {
                text-align: center;
                padding: 30px 20px;
                font-size: 14px;
                color: #4a4a4a;
                border-top: 1px solid #f1f1f1;
            }

            footer a {
                color: #fe3f40;
                /* اللون الأحمر المخصص للروابط في القالب */
                text-decoration: none;
            }
        </style>
    </head>

    <body>

        <div class="main-content">
            <div class="update-card">
                <div class="form-title">Update Information</div>
                <div class="form-subtitle">Modify user details for <strong>{{ $user->name ?? 'Jad' }}</strong></div>

                <!-- فورم متوافق مع عمل الـ Update في لارافيل -->
                <form method="POST" action="{{ route('user-contact.update', $dataToupdate->id ?? 1) }}">
                    @csrf
                    @method('PUT') <!-- ضرورية لعمليات التعديل في لارافيل -->

                    <!-- حقل الاسم الأول واللقب متجاورين -->
                    <div class="row mb-3">
                        <!-- حقل الاسم الأول (Name) -->
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $dataToupdate->name ?? 'Jad') }}" required placeholder="First name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- حقل اللقب (Surname) -->
                        <div class="col-md-6">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" id="surname" name="surname"
                                class="form-control @error('surname') is-invalid @enderror"
                                value="{{ old('surname', $dataToupdate->surname ?? '') }}" required placeholder="Surname">
                            @error('surname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <!-- حقل البريد الإلكتروني (Email) -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $dataToupdate->email ?? 'jad@gmail.com') }}" required
                            placeholder="Enter email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- REPLACED: Message Field (Textarea) -->
                    <div class="mb-4">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="form-control @error('message') is-invalid @enderror"
                            placeholder="Type your update message here..." required>{{ old('message', $dataToupdate->message ?? '') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- أزرار التحكم -->
                    <button type="submit" class="btn btn-update">Update Details</button>
                    <a href="{{ route('user-contact.index') }}" class="btn-cancel">Back to Table</a>
                </form>
            </div>
        </div>

        <!-- الفوتر الموحد المتناسق مع الجدول -->
        <footer>
            <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved.<br>
                Design: <a href="#">TemplateMo</a></p>
        </footer>

    </body>

    </html>
@endsection
