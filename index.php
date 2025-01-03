@extends('layouts.master')
@section('content')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- مكتبة Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f4f7fc;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(45deg, #34526c, #567a9f);
            border-radius: 20px 20px 0 0;
        }

        .card-header h4 {
            font-weight: bold;
            color: #fff;
        }

        .nav-link {
            border-radius: 5px;
            font-weight: 600;
            color: #4a4a4a;
        }

        .nav-link.active {
            background-color: #34526c;
            color: white;
            border-color: #34526c;
        }

        .nav-tabs {
            border-bottom: 2px solid #ddd;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 10px;
            box-shadow: none;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #567a9f;
            box-shadow: 0 0 5px rgba(0, 122, 255, 0.5);
        }

        .img-thumbnail {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .img-thumbnail:hover {
            transform: scale(1.05);
        }

        .btn-custom {
            background: linear-gradient(45deg, #244f79, #244f79);
            color: white;
            border-radius: 20px;
            padding: 10px 30px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background: linear-gradient(45deg, #adc7de, #adc7de);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .text-muted {
            color: #777;
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <!-- عنوان البطاقة -->
                    <div class="card-header text-center py-4">
                        <h4 class="mb-0"><i class="me-2"></i>بيانات الطلب</h4>
                    </div>
                    <!-- محتوى البطاقة -->
                    <div class="card-body">
                        <!-- نظام التبويبات -->
                        <ul class="nav nav-tabs mb-4" id="passportTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab"
                                    data-bs-target="#personal" type="button" role="tab" aria-controls="personal"
                                    aria-selected="true">
                                    <i class="fa fa-user me-2" style="margin-left: 5px"></i>تفاصيل شخصية
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="fa fa-phone me-2" style="margin-left: 5px"></i>معلومات الاتصال
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="images-tab" data-bs-toggle="tab" data-bs-target="#images"
                                    type="button" role="tab" aria-controls="images" aria-selected="false">
                                    <i class="fa fa-image me-2" style="margin-left: 5px"></i>الصور
                                </button>
                            </li>
                        </ul>

                        <!-- محتوى التبويبات -->
                        <div class="tab-content" id="passportTabsContent">
                            <!-- تبويب: تفاصيل شخصية -->
                            <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                aria-labelledby="personal-tab">
                                <div class="row g-4">
                                    <!-- الصف الأول -->
                                    <div class="col-md-4">
                                        <label class="form-label">الأسم</label>
                                        <input type="text" class="form-control" value="{{ $passport->name }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">اسم الأب</label>
                                        <input type="text" class="form-control" value="{{ $passport->father_name }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">اسم الجد</label>
                                        <input type="text" class="form-control" value="{{ $passport->grandfather_name }}"
                                            readonly>
                                    </div>
                                    <!-- الصف الثاني -->

                                    <div class="col-md-4">
                                        <label class="form-label">الأسم بالانجليزي</label>
                                        <input type="text" class="form-control" value="{{ $passport->name_en }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">أسم الأب بالانجليزي</label>
                                        <input type="text" class="form-control" value="{{ $passport->father_name_en }}"
                                            readonly>
                                    </div>
                                    <!-- الصف الثالث -->
                                    <div class="col-md-4">
                                        <label class="form-label">الأسم الجد بالانجليزي</label>
                                        <input type="text" class="form-control"
                                            value="{{ $passport->grandfather_name_en }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">اللقب</label>
                                        <input type="text" class="form-control" value="{{ $passport->last_name }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">اللقب بالانجليزي</label>
                                        <input type="text" class="form-control" value="{{ $passport->last_name_en }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">الجنسية</label>
                                        <input type="text" class="form-control" value="{{ $passport->natinality }}"
                                            readonly>
                                    </div>
                                    <!-- الصف الرابع -->
                                    <div class="col-md-4">
                                        <label class="form-label">الحالة الاجتماعية</label>
                                        <input type="text" class="form-control"
                                            value="{{ $passport->marital_status }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">تاريخ الميلاد</label>
                                        <input type="text" class="form-control" value="{{ $passport->birth_date }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">مكان الميلاد</label>
                                        <input type="text" class="form-control" value="{{ $passport->birth_place }}"
                                            readonly>
                                    </div>
                                    <!-- الصف الخامس -->
                                    <div class="col-md-4">
                                        <label class="form-label">الجنس</label>
                                        <input type="text" class="form-control"
                                            value="{{ $passport->gender == 0 ? 'ذكر' : 'أنثى' }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">رقم الجواز</label>
                                        <input type="text" class="form-control"
                                            value="{{ $passport->pass_port_number }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">نوع الدفع</label>
                                        <input type="text" class="form-control" value="{{ $passport->pyment_type }}"
                                            readonly>
                                    </div>
                                    {{-- الصف السادس --}}
                                    <div class="col-md-4">
                                        <label class="form-label">اسم الأم</label>
                                        <input type="text" class="form-control" value="{{ $passport->mother_name }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">اسم اب الأم</label>
                                        <input type="text" class="form-control"
                                            value="{{ $passport->father_name_1 }}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">لقب الأم </label>
                                        <input type="text" class="form-control" value="{{ $passport->family_name }}"
                                            readonly>
                                    </div>
                                    {{-- الصف السابع --}}
                                    <div class="col-md-6">
                                        <label class="form-label"> مدة الإقامة بالسنوات</label>
                                        <input type="number" class="form-control"
                                            value="{{ $passport->time_of_state }}" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label"> تاريخ الدخول</label>
                                        <input type="date" class="form-control" value="{{ $passport->entry_date }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">مركز التصوير </label>
                                        <input type="text" class="form-control"
                                            value="{{ $passport->service_center_id }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- تبويب: معلومات الاتصال -->
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label">المنطقة</label>
                                        <input type="text" class="form-control" value="{{ $passport->region }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">أقرب معلم</label>
                                        <input type="text" class="form-control"
                                            value="{{ $passport->nearest_landmark }}" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">المدينة</label>
                                        <input type="text" class="form-control" value="{{ $passport->city }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">رقم الهاتف</label>
                                        <input type="text" class="form-control" value="{{ $passport->phone_number }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">المهنة</label>
                                        <input type="text" class="form-control" value="{{ $passport->occupation }}"
                                            readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">البريد الالكتروني</label>
                                        <input type="text" class="form-control" value="{{ $passport->email }}"
                                            readonly>
                                    </div>

                                </div>
                            </div>

                            <!-- تبويب: الصور -->
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="row g-3">
                                    @php
                                        $images = [
                                            [
                                                'label' => 'صورة من الجواز السفر ',
                                                'src' => $passport->pass_port_photo,
                                            ],
                                            ['label' => 'الصورة الشخصية', 'src' => $passport->personal_photo],
                                            ['label' => 'الشهادة الصحية', 'src' => $passport->health_certificate],
                                            [
                                                'label' => 'شهادة من جيهة العمل',
                                                'src' => $passport->employer_certificate,
                                            ],
                                        ];
                                    @endphp
                                    @foreach ($images as $image)
                                        <div class="col-md-6 text-center">
                                            <a href="{{ asset($image['src']) }}" data-lightbox="passport-images"
                                                data-title="{{ $image['label'] }}">
                                                <img src="{{ asset($image['src']) }}" class="img-thumbnail shadow-sm"
                                                    alt="{{ $image['label'] }}">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- أزرار التحكم داخل البطاقة -->
                        <div class="text-center mt-4">
                            <button id="editButton" class="btn btn-custom">
                                <i class="fa fa-check me-2 m-1"></i>تعديل البيانات
                            </button>
                            <button id="cancelButton" class="btn btn-secondary" style="display: none;">
                                <i class="fa fa-times me-2 m-1"></i>إلغاء
                            </button>
                            <button id="saveButton" class="btn btn-dark" style="display: none;">
                                <i class="fa fa-save me-2 m-1"></i>حفظ
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- مكتبة Lightbox JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editButton = document.getElementById('editButton');
        const cancelButton = document.getElementById('cancelButton');
        const saveButton = document.getElementById('saveButton');
        const inputs = document.querySelectorAll('.form-control');

        editButton.addEventListener('click', () => {
            inputs.forEach(input => {
                input.removeAttribute('readonly');
                input.classList.add('bg-white');
            });
            editButton.style.display = 'none';
            cancelButton.style.display = 'inline-block';
            saveButton.style.display = 'inline-block';
        });

        cancelButton.addEventListener('click', () => {
            inputs.forEach(input => {
                input.setAttribute('readonly', 'true');
                input.classList.remove('bg-white');
            });
            editButton.style.display = 'inline-block';
            cancelButton.style.display = 'none';
            saveButton.style.display = 'none';
        });

        saveButton.addEventListener('click', () => {
            // تحضير البيانات لإرسالها إلى الخادم
            const formData = {};
            inputs.forEach(input => {
                formData[input.name] = input.value; // افترض أن الحقول تحتوي على خاصية name
            });

            // إرسال البيانات باستخدام AJAX
            fetch('/update-passport', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // إذا كنت تستخدم Laravel
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('تم حفظ البيانات بنجاح');
                        inputs.forEach(input => input.setAttribute('readonly', 'true'));
                        cancelButton.style.display = 'none';
                        saveButton.style.display = 'none';
                        editButton.style.display = 'inline-block';
                    } else {
                        alert('حدث خطأ أثناء الحفظ. الرجاء المحاولة مرة أخرى.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('حدث خطأ أثناء الاتصال بالخادم.');
                });
        });
    });
</script>
