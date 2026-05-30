@extends('layouts.admin.admin')

@section('admin_main_content')
    <div class="container-fluid my-5 px-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-7">

                <!-- لوحة نموذج تحديث الإحصائية (Update Statistic Card) -->
                <div class="card border-0 shadow-sm" style="border-radius: 8px; overflow: hidden;">

                    <!-- رأس النموذج باللون الأزرق الموحد مع القالب -->
                    <div class="card-header text-white p-4 text-center"
                        style="background-color: #4e73df; border-bottom: none;">
                        <i class="bi bi-pencil-square fs-2 mb-2"></i>
                        <h4 class="mb-1 fw-bold">Update Statistic</h4>
                        <p class="mb-0 opacity-75 small">Modify the details below to update your statistic counter</p>
                    </div>

                    <!-- جسم النموذج المنظم -->
                    <div class="card-body p-4 p-md-5 bg-white">
                        <!-- في لارافل تأكد من إضافة  و  داخل الفورم الفعلي -->
                        <form action="{{ route('statistic.update', $dataToupdate->id) }}" method="POST"
                            class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            <!-- حقل اسم الإحصائية / المهارة (Statistic / Skill Name) -->
                            <div class="mb-4">
                                <label for="updateStatName" class="form-label fw-bold text-secondary small">Statistic /
                                    Skill Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-tag"></i></span>
                                    <!-- تظهر هنا القيمة الحالية من قاعدة البيانات -->
                                    <input type="text" class="form-control bg-light border-start-0" id="updateStatName"
                                        name="skill_name" value="{{ $dataToupdate->skill_name }}"
                                        placeholder="e.g. Happy Clients or Projects Done" style="font-size: 0.9rem;"
                                        required>
                                    <div class="invalid-feedback">Please enter a statistic name.</div>
                                </div>
                            </div>

                            <!-- حقل النسبة المئوية / القيمة (Percentage) -->
                            <div class="mb-4">
                                <label for="updateStatPercentage" class="form-label fw-bold text-secondary small">Percentage
                                    / Value (%)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-percent"></i></span>
                                    <!-- تظهر هنا النسبة الحالية من قاعدة البيانات -->
                                    <input type="number" class="form-control bg-light border-start-0"
                                        id="updateStatPercentage" name="percentage" value="{{ $dataToupdate->percentage }}"
                                        min="1" max="100" placeholder="e.g. 95" style="font-size: 0.9rem;"
                                        required>
                                    <div class="invalid-feedback">Please enter a valid percentage between 1 and 100.</div>
                                </div>
                            </div>

                            <!-- أزرار الإجراءات السفلية المتناسقة والمتباعدة -->
                            <div class="row g-3 mt-4 pt-2">
                                <div class="col-6">
                                    <a href="/admin/statistic"
                                        class="btn btn-light w-100 fw-bold py-2.5 border text-secondary"
                                        style="font-size: 0.9rem;">
                                        Cancel
                                    </a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn text-white w-100 fw-bold py-2.5 shadow-sm"
                                        style="background-color: #4e73df; border: none; font-size: 0.9rem; transition: background-color 0.2s;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Update Statistic
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
