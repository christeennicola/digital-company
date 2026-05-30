@extends('layouts.admin.admin')

@section('admin_main_content')
    <div class="container-fluid my-5 px-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-7">

                <!-- لوحة نموذج تحديث العمل (Update Portfolio Card) -->
                <div class="card border-0 shadow-sm" style="border-radius: 8px; overflow: hidden;">

                    <!-- رأس النموذج باللون الأزرق الموحد مع القالب -->
                    <div class="card-header text-white p-4 text-center"
                        style="background-color: #4e73df; border-bottom: none;">
                        <i class="bi bi-pencil-square fs-2 mb-2"></i>
                        <h4 class="mb-1 fw-bold">Update Portfolio</h4>
                        <p class="mb-0 opacity-75 small">Modify the details below to update your portfolio item</p>
                    </div>

                    <!-- جسم النموذج المنظم -->
                    <div class="card-body p-4 p-md-5 bg-white">
                        <!-- enctype="multipart/form-data" ضروري جداً لتحديث الملفات والصور -->
                        <!-- في لارافل تأكد من إضافة  و  داخل الفورم الفعلي -->
                        <form action="{{ route('porto.update', $dataToupdate->id) }}" method="POST"
                            enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            <!-- حقل العنوان (Project Title) -->
                            <div class="mb-4">
                                <label for="updatePortfolioTitle" class="form-label fw-bold text-secondary small">Project
                                    Title</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-type"></i></span>
                                    <!-- تظهر هنا القيمة الحالية للمشروع من قاعدة البيانات -->
                                    <input type="text" class="form-control bg-light border-start-0"
                                        id="updatePortfolioTitle" name="title" placeholder="e.g. Project Title"
                                        style="font-size: 0.9rem;" required value="{{ $dataToupdate->title }}">
                                    <div class="invalid-feedback">Please enter a project title.</div>
                                </div>
                            </div>

                            <!-- حقل الأيقونة (Service Icon) -->
                            <div class="mb-4">
                                <label for="updateServiceIcon" class="form-label fw-bold text-secondary small">Service
                                    Icon</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-emoji-smile"></i></span>
                                    <select class="form-select bg-light border-start-0" id="updateServiceIcon"
                                        name="icon" style="font-size: 0.9rem;" required>
                                        <option value="" disabled>Choose a suitable icon...</option>
                                        <!-- يتم تفعيل selected برمجياً بناءً على القيمة المخزنة -->
                                        <option value="bi-laptop @selected(old('icon', $dataToupdate->icon) == 'bi-laptop')">💻 Laptop / Tech</option>
                                        <option value="bi-code-slash @selected(old('icon', $dataToupdate->icon) == 'bi-code-slash')">💻 Coding / Development
                                        </option>
                                        <option value="bi-palette  @selected(old('icon', $dataToupdate->icon) == 'bi-palette')">🎨 Design / Arts</option>
                                        <option value="bi-graph-up-arrow  @selected(old('icon', $dataToupdate->icon) == 'bi-graph-up-arrow')">📈 Marketing /
                                            Growth</option>
                                        <option value="bi-gear  @selected(old('icon', $dataToupdate->icon) == 'bi-gear')">⚙️ Technical / Maintenance
                                        </option>
                                    </select>
                                    <div class="invalid-feedback">Please select an icon.</div>
                                </div>
                            </div>

                            <!-- حقل الصورة (Project Image) -->
                            <div class="mb-4">
                                <label for="updatePortfolioImage" class="form-label fw-bold text-secondary small">Change
                                    Preview Image (Optional)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-image"></i></span>
                                    <input type="file" class="form-control bg-light border-start-0"
                                        id="updatePortfolioImage" name="image" accept="image/*" style="font-size: 0.9rem;"
                                        value="{{ $dataToupdate->image }}">
                                </div>
                                <div class="form-text text-muted small mt-1">Leave empty if you want to keep the current
                                    project image.</div>
                            </div>

                            <!-- حقل الرابط (Project Link) -->
                            <div class="mb-4">
                                <label for="updatePortfolioLink" class="form-label fw-bold text-secondary small">Project URL
                                    / Live Demo</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-link-45deg"></i></span>
                                    <input type="url" class="form-control bg-light border-start-0"
                                        id="updatePortfolioLink" name="link" placeholder="e.g. https://example.com"
                                        style="font-size: 0.9rem;" required value="{{ $dataToupdate->link }}">
                                    <div class="invalid-feedback">Please enter a valid URL.</div>
                                </div>
                            </div>

                            <!-- أزرار الإجراءات السفلية المتناسقة والمتباعدة -->
                            <div class="row g-3 mt-4 pt-2">
                                <div class="col-6">
                                    <a href="/admin/portfolio"
                                        class="btn btn-light w-100 fw-bold py-2.5 border text-secondary"
                                        style="font-size: 0.9rem;">
                                        Cancel
                                    </a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn text-white w-100 fw-bold py-2.5 shadow-sm"
                                        style="background-color: #4e73df; border: none; font-size: 0.9rem; transition: background-color 0.2s;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Update Project
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
