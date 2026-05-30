@extends('layouts.admin.admin')

@section('admin_main_content')
    <div class="container-fluid my-5 px-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-7">

                <!-- لوحة النموذج (Form Card) -->
                <div class="card border-0 shadow-sm" style="border-radius: 8px; overflow: hidden;">

                    <!-- رأس النموذج المتناسق مع الـ Sidebar -->
                    <div class="card-header text-white p-4 text-center"
                        style="background-color: #4e73df; border-bottom: none;">
                        <i class="bi bi-briefcase-fill fs-2 mb-2"></i>
                        <h4 class="mb-1 fw-bold">Add New Service</h4>
                        <p class="mb-0 opacity-75 small">Fill out the details below to publish your service</p>
                    </div>

                    <!-- جسم النموذج المنظم -->
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('service.store') }}" method="POST" class="needs-validation" novalidate>
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
                            <!-- حقل العنوان (Title) -->
                            <div class="mb-4">
                                <label for="serviceTitle" class="form-label fw-bold text-secondary small">Service
                                    Title</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-type"></i></span>
                                    <input type="text" name="title" class="form-control bg-light border-start-0"
                                        id="serviceTitle" placeholder="e.g. Web Development" style="font-size: 0.9rem;"
                                        required>
                                    <div class="invalid-feedback">Please enter a service title.</div>
                                </div>
                            </div>

                            <!-- حقل الأيقونة (Icon) -->
                            <div class="mb-4">
                                <label for="serviceIcon" class="form-label fw-bold text-secondary small">Service
                                    Icon</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-emoji-smile"></i></span>
                                    <select class="form-select bg-light border-start-0" name="icon" id="serviceIcon"
                                        style="font-size: 0.9rem;" required>
                                        <option value="" selected disabled>Choose a suitable icon...</option>
                                        <option value="bi-laptop">💻 Laptop / Tech</option>
                                        <option value="bi-code-slash">💻 Coding / Development</option>
                                        <option value="bi-palette">🎨 Design / Arts</option>
                                        <option value="bi-graph-up-arrow">📈 Marketing / Growth</option>
                                        <option value="bi-gear">⚙️ Technical / Maintenance</option>
                                    </select>
                                    <div class="invalid-feedback">Please select an icon.</div>
                                </div>
                            </div>

                            <!-- حقل الوصف (Description) -->
                            <div class="mb-4">
                                <label for="serviceDescription" class="form-label fw-bold text-secondary small">Service
                                    Description</label>
                                <div class="input-group">
                                    <span
                                        class="input-group-text bg-light border-end-0 text-muted align-items-start pt-2"><i
                                            class="bi bi-file-earmark-text"></i></span>
                                    <textarea class="form-control bg-light border-start-0" name="description" id="serviceDescription" rows="5"
                                        placeholder="Write a detailed description explaining your service features..." style="font-size: 0.9rem;" required></textarea>
                                    <div class="invalid-feedback">Please provide a description.</div>
                                </div>
                            </div>

                            <!-- زر النشر المتناسق -->
                            <div class="mt-4 pt-2">
                                <button type="submit" class="btn text-white w-100 fw-bold py-2.5 shadow-sm"
                                    style="background-color: #4e73df; border: none; font-size: 1rem; transition: background-color 0.2s;">
                                    <i class="bi bi-plus-circle-fill me-2"></i> Publish Service
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
