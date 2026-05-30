@extends('layouts.admin.admin')

@section('admin_main_content')
    <div class="container-fluid my-5 px-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-7">

                <!-- لوحة نموذج إضافة إحصائية (Statistic Card) -->
                <div class="card border-0 shadow-sm" style="border-radius: 8px; overflow: hidden;">

                    <!-- رأس النموذج باللون الأزرق الموحد مع القالب -->
                    <div class="card-header text-white p-4 text-center"
                        style="background-color: #4e73df; border-bottom: none;">
                        <i class="bi bi-bar-chart-line fs-2 mb-2"></i>
                        <h4 class="mb-1 fw-bold">Add New Statistic</h4>
                        <p class="mb-0 opacity-75 small">Fill out the details below to add a new statistic counter</p>
                    </div>

                    <!-- جسم النموذج المنظم -->
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="#" method="POST" class="needs-validation" novalidate>
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger"
                                    style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- حقل اسم الإحصائية / المهارة (Statistic / Skill Name) -->
                            <div class="mb-4">
                                <label for="statName" class="form-label fw-bold text-secondary small">Statistic / Skill
                                    Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-tag"></i></span>
                                    <input type="text" class="form-control bg-light border-start-0" id="statName"
                                        name="skill_name" placeholder="e.g. Happy Clients or Projects Done"
                                        style="font-size: 0.9rem;" required>
                                    <div class="invalid-feedback">Please enter a statistic name.</div>
                                </div>
                            </div>

                            <!-- حقل النسبة المئوية / القيمة (Percentage) -->
                            <div class="mb-4">
                                <label for="statPercentage" class="form-label fw-bold text-secondary small">Percentage /
                                    Value (%)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-percent"></i></span>
                                    <input type="number" class="form-control bg-light border-start-0" id="statPercentage"
                                        name="percentage" min="1" max="100" placeholder="e.g. 95"
                                        style="font-size: 0.9rem;" required>
                                    <div class="invalid-feedback">Please enter a valid percentage between 1 and 100.</div>
                                </div>
                            </div>

                            <!-- زر النشر الرئيسي الموحد مع بقية النماذج -->
                            <div class="mt-4 pt-2">
                                <button type="submit" class="btn text-white w-100 fw-bold py-2.5 shadow-sm"
                                    style="background-color: #4e73df; border: none; font-size: 1rem; transition: background-color 0.2s;">
                                    <i class="bi bi-plus-circle-fill me-2"></i> Add Statistic
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
