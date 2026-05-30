@extends('layouts.admin.admin')

@section('admin_main_content')
    <div class="container-fluid my-5 px-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-8">

                <!-- لوحة نموذج تحديث المدونة (Update Blog Card) -->
                <div class="card border-0 shadow-sm" style="border-radius: 8px; overflow: hidden;">

                    <!-- رأس النموذج باللون الأزرق الموحد مع القالب -->
                    <div class="card-header text-white p-4 text-center"
                        style="background-color: #4e73df; border-bottom: none;">
                        <i class="bi bi-pencil-square fs-2 mb-2"></i>
                        <h4 class="mb-1 fw-bold">Update Blog Post</h4>
                        <p class="mb-0 opacity-75 small">Modify the details below to update your blog post parameters</p>
                    </div>

                    <!-- جسم النموذج المنظم -->
                    <div class="card-body p-4 p-md-5 bg-white">
                        <!-- enctype="multipart/form-data" ضروري للتعامل مع تحديث الصور -->
                        <!-- في لارافل تأكد من إضافة @method('PUT') و @csrf داخل الفورم -->
                        <form action="{{ route('blog.update', $dataToupdate->id) }}" method="POST"
                            enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                            <!-- حقل العنوان (Blog Title) -->
                            <div class="mb-4">
                                <label for="updateBlogTitle" class="form-label fw-bold text-secondary small">Blog
                                    Title</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i
                                            class="bi bi-type"></i></span>
                                    <input type="text" class="form-control bg-light border-start-0" id="updateBlogTitle"
                                        name="title" placeholder="e.g. Blog Title" style="font-size: 0.9rem;" required
                                        value="{{ $dataToupdate->title }}">
                                    <div class="invalid-feedback">Please enter a blog title.</div>
                                </div>
                            </div>

                            <!-- صف يحتوي على اسم الكاتب والقسم -->
                            <div class="row">
                                <!-- حقل اسم الكاتب (Author Name) -->
                                <div class="col-md-6 mb-4">
                                    <label for="updateBlogAuthor" class="form-label fw-bold text-secondary small">Author
                                        Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-person"></i></span>
                                        <input type="text" class="form-control bg-light border-start-0"
                                            id="updateBlogAuthor" name="author_name" placeholder="e.g. Author Name"
                                            style="font-size: 0.9rem;" required value="{{ $dataToupdate->author_name }}">
                                        <div class="invalid-feedback">Please enter the author's name.</div>
                                    </div>
                                </div>

                                <!-- حقل القسم (Category) -->
                                <div class="col-md-6 mb-4">
                                    <label for="updateBlogCategory"
                                        class="form-label fw-bold text-secondary small">Category</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-tags"></i></span>
                                        <select class="form-select bg-light border-start-0" id="updateBlogCategory"
                                            name="category" style="font-size: 0.9rem;" required>
                                            <option value="" disabled>Choose a category...</option>
                                            <option value="technology @selected(old('category', $dataToupdate->category) == 'technology')">💻 Technology</option>
                                            <option value="design @selected(old('category', $dataToupdate->category) == 'design')">🎨 Design</option>
                                            <option value="marketing @selected(old('category', $dataToupdate->category) == 'marketing')">📈 Marketing</option>
                                            <option value="business @selected(old('category', $dataToupdate->category) == 'business')">💼 Business</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a category.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- صف يحتوي على ملف الصورة وتاريخ النشر القديم -->
                            <div class="row">
                                <!-- حقل الصورة (Image) -->
                                <div class="col-md-6 mb-4">
                                    <label for="updateBlogImage" class="form-label fw-bold text-secondary small">Change
                                        Cover Image (Optional)</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-image"></i></span>
                                        <input type="file" class="form-control bg-light border-start-0"
                                            id="updateBlogImage" name="image" accept="image/*" style="font-size: 0.9rem;"
                                            value="{{ $dataToupdate->image }}">
                                    </div>
                                    <div class="form-text text-muted small mt-1">Leave empty if you don't want to change the
                                        image.</div>
                                </div>

                                <!-- حقل تاريخ النشر (Published At) -->
                                <div class="col-md-6 mb-4">
                                    <label for="updateBlogPublishedAt"
                                        class="form-label fw-bold text-secondary small">Publish Date & Time</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i
                                                class="bi bi-calendar-event"></i></span>
                                        <!-- يتم تمرير التاريخ القديم بصيغة متوافقة مع المتصفح -->
                                        <input type="datetime-local" class="form-control bg-light border-start-0"
                                            id="updateBlogPublishedAt" name="published_at" style="font-size: 0.9rem;"
                                            required value="{{ $dataToupdate->published_at }}">
                                        <div class="invalid-feedback">Please select a publish date.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- حقل المحتوى (Content) -->
                            <div class="mb-4">
                                <label for="updateBlogContent" class="form-label fw-bold text-secondary small">Blog
                                    Content</label>
                                <div class="input-group">
                                    <span
                                        class="input-group-text bg-light border-end-0 text-muted align-items-start pt-2"><i
                                            class="bi bi-file-earmark-richtext"></i></span>
                                    <textarea class="form-control bg-light border-start-0" id="updateBlogContent" name="content" rows="6"
                                        placeholder="Write your full blog post content here..." style="font-size: 0.9rem;" required>{{ $dataToupdate->content }}</textarea>
                                    <div class="invalid-feedback">Please provide content for the blog post.</div>
                                </div>
                            </div>

                            <!-- أزرار الإجراءات السفلية المتناسقة -->
                            <div class="row g-3 mt-4 pt-2">
                                <div class="col-6">
                                    <a href="/admin/blog" class="btn btn-light w-100 fw-bold py-2.5 border text-secondary"
                                        style="font-size: 0.9rem;">
                                        Cancel
                                    </a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn text-white w-100 fw-bold py-2.5 shadow-sm"
                                        style="background-color: #4e73df; border: none; font-size: 0.9rem; transition: background-color 0.2s;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Update Post
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
