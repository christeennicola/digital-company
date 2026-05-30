@extends('layouts.admin.admin')

@section('admin_main_content')
    <div class="container-fluid my-5 px-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-8">

                <!-- لوحة نموذج إضافة مدونة (Blog Card) -->
                <div class="card border-0 shadow-sm" style="border-radius: 8px; overflow: hidden;">

                    <!-- رأس النموذج باللون الأزرق الموحد مع القالب -->
                    <div class="card-header text-white p-4 text-center"
                        style="background-color: #4e73df; border-bottom: none;">
                        <i class="bi bi-journal-plus fs-2 mb-2"></i>
                        <h4 class="mb-1 fw-bold">Add New Blog</h4>
                        <p class="mb-0 opacity-75 small">Fill out the details below to publish your blog post</p>
                    </div>

                    <!-- جسم النموذج المنظم -->
                    <div class="card-body p-4 p-md-5 bg-white">
                        <!-- تم إضافة enctype للسماح برفع الصور بشكل صحيح -->
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data"
                            class="needs-validation" novalidate>
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
                            <!-- حقل العنوان (Blog Title) -->
                            <div class="mb-4">
                                <label for="blogTitle" class="form-label fw-bold text-secondary small">Blog Title</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-type"></i></span>
                                    <input type="text" class="form-control bg-light border-start-0" id="blogTitle"
                                        name="title" placeholder="e.g. Introduction to Laravel Architecture"
                                        style="font-size: 0.9rem;" required>
                                    <div class="invalid-feedback">Please enter a blog title.</div>
                                </div>
                            </div>

                            <!-- صف يحتوي على الكاتب والقم لترتيب المساحة -->
                            <div class="row">
                                <!-- حقل اسم الكاتب (Author Name) -->
                                <div class="col-md-6 mb-4">
                                    <label for="blogAuthor" class="form-label fw-bold text-secondary small">Author
                                        Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-person"></i></span>
                                        <input type="text" class="form-control bg-light border-start-0" id="blogAuthor"
                                            name="author_name" placeholder="e.g. John Doe" style="font-size: 0.9rem;"
                                            required>
                                        <div class="invalid-feedback">Please enter the author's name.</div>
                                    </div>
                                </div>

                                <!-- حقل القسم (Category) -->
                                <div class="col-md-6 mb-4">
                                    <label for="blogCategory"
                                        class="form-label fw-bold text-secondary small">Category</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-tags"></i></span>
                                        <select class="form-select bg-light border-start-0" id="blogCategory"
                                            name="category" style="font-size: 0.9rem;" required>
                                            <option value="" selected disabled>Choose a category...</option>
                                            <option value="technology">💻 Technology</option>
                                            <option value="design">🎨 Design</option>
                                            <option value="marketing">📈 Marketing</option>
                                            <option value="business">💼 Business</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a category.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- صف يحتوي على ملف الصورة وتاريخ النشر -->
                            <div class="row">
                                <!-- حقل الصورة (Image) -->
                                <div class="col-md-6 mb-4">
                                    <label for="blogImage" class="form-label fw-bold text-secondary small">Blog Cover
                                        Image</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-image"></i></span>
                                        <input type="file" class="form-control bg-light border-start-0" id="blogImage"
                                            name="image" accept="image/*" style="font-size: 0.9rem;" required>
                                        <div class="invalid-feedback">Please upload a cover image.</div>
                                    </div>
                                </div>

                                <!-- حقل تاريخ النشر (Published At) -->
                                <div class="col-md-6 mb-4">
                                    <label for="blogPublishedAt" class="form-label fw-bold text-secondary small">Publish
                                        Date & Time</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-calendar-event"></i></span>
                                        <input type="datetime-local" class="form-control bg-light border-start-0"
                                            id="blogPublishedAt" name="published_at" style="font-size: 0.9rem;" required>
                                        <div class="invalid-feedback">Please select a publish date.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- حقل المحتوى (Content) -->
                            <div class="mb-4">
                                <label for="blogContent" class="form-label fw-bold text-secondary small">Blog
                                    Content</label>
                                <div class="input-group">
                                    <span
                                        class="input-group-text bg-light border-end-0 text-muted align-items-start pt-2"><i
                                            class="bi bi-file-earmark-richtext"></i></span>
                                    <textarea class="form-control bg-light border-start-0" id="blogContent" name="content" rows="6"
                                        placeholder="Write your full blog post content here..." style="font-size: 0.9rem;" required></textarea>
                                    <div class="invalid-feedback">Please provide content for the blog post.</div>
                                </div>
                            </div>

                            <!-- زر النشر الرئيسي الموحد مع النموذج السابق -->
                            <div class="mt-4 pt-2">
                                <button type="submit" class="btn text-white w-100 fw-bold py-2.5 shadow-sm"
                                    style="background-color: #4e73df; border: none; font-size: 1rem; transition: background-color 0.2s;">
                                    <i class="bi bi-plus-circle-fill me-2"></i> Publish Blog Post
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
