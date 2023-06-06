@extends('layouts.app')

@section('content')
    <div class="container">
        <!--    ::Top Title Page        -->
        <div class="top-title-page">
            <h4>المشتريات</h4>
            <h6> المشتريات > <span>إضافة مشروع</span> </h6>
        </div>
        <!--    :: buying path And All Details        -->
        <div class="buying-details">
            <h5>الرجاء إكمال الخطوات التالية</h5>
            <div class="buying-path DoneCheck2">
                <div class="numbers">
                    <span class="active">١</span>
                    <span class="active">٢</span>
                    <span  class="active">٣</span>
                </div>
                <div class="names">
                    <span class="active DoneCheck">معلومات الشراء</span>
                    <span class="active DoneCheck">معلومات مالية</span>
                    <span  class="active ">المستندات</span>
                </div>
            </div>
            <form>
                <div class="form-group d-flex align-center mt-5">
                    <div>
                        <img src="{{asset("assets/images/icons/info2.png")}}" alt="">
                    </div>
                    <span class="info-details"> يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</span>
                </div>
                <div class="form-group">
                    <label for="file-price" class="form-label"> كشف حساب مصرفي لمدة 6 أشهر (يمكنك إرفاق أكثر من ملف)</label>
                    <!-- Here I,m give file by js jquery And Make all condition -->
                    <input type="text" disabled="" class="form-control" id="file-price" style="background: #fff">
                    <span class="upload-file">
                        <img src="{{asset("assets/images/icons/upload.png")}}" alt="upload-icon">
                        تحميل الملف
                    </span>
                </div>
                <div class="upload-files">
                    <div class="single-file">

                        <div class="info-file">
                            <div class="details-file">
                                <p>file name.pdf</p>
                                <p>2.45 MB</p>
                            </div>
                            <img src="{{ asset("assets/images/icons/pdf.png") }}" alt="">
                        </div>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="single-file">

                        <div class="info-file">
                            <div class="details-file">
                                <p>file name.pdf</p>
                                <p>2.45 MB</p>
                            </div>
                            <img src="{{asset("assets/images/icons/pdf.png")}}" alt="">
                        </div>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="single-file">

                        <div class="info-file">
                            <div class="details-file">
                                <p>file name.pdf</p>
                                <p>2.45 MB</p>
                            </div>
                            <img src="{{asset("assets/images/icons/pdf.png")}}" alt="">
                        </div>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="type" class="form-label">شهادة الحساب البنكي للمنشأة </label>
                    <input type="text" disabled style="border:none" class="form-control" id="type">
                    <div class="single-file-input-one">
                        <div class="info-file">
                            <div class="details-file">
                                <p>file name.pdf</p>
                                <p>2.45 MB</p>
                            </div>
                            <img src="{{asset("assets/images/icons/pdf.png")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex align-center">
                    <div>
                        <img src="{{asset("assets/images/icons/info2.png")}}" alt="">
                    </div>
                    <span class="info-details">
                    في حال رغبتك بتعديل معلومات الحساب البنكي يرجى التواصل مع المسؤولين  <a href="#">تواصل معنا</a>
                    </span>
                </div>
                <div class="form-group">
                    <label for="tax" class="form-label">شهادة ضريبة القيمة المضافة (آخر إقرار ضريبي) </label>
                    <input type="text" disabled style="background: #fff" class="form-control" id="tax">
                    <div class="single-file-input-two" >
                        <div class="info-file">
                            <div class="details-file">
                                <p>file name.pdf</p>
                                <p>2.45 MB</p>
                            </div>
                            <img src="../assets/images/icons/pdf.png" alt="">
                        </div>
                        <i class="fa-solid fa-xmark" style="padding-right: 15px"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file-ma" class="form-label">   القوائم المالية  (يمكنك إرفاق أكثر من ملف)   <span class="optional"> (اختياري)</span></label>
                    <input type="text" disabled="" class="form-control" id="file-ma" placeholder="أختر الملف ">
                    <span class="upload-file">
                        <img src="{{asset("assets/images/icons/upload.png")}}" alt="upload-icon">
                        تحميل الملف
                    </span>
                </div>
                <p class="warning-input" style="padding-right: 20px">
                    يرجى إرفاق القوائم المالية لآخر سنة.
                </p>
                <div class="form-group">
                    <label for="file-two" class="form-label">  الوثائق الداعمة (يمكنك إرفاق أكثر من ملف)   <span class="optional"> (اختياري)</span></label>
                    <input type="text" disabled="" class="form-control" id="file-two" placeholder="أختر الملف ">
                    <span class="upload-file">
                        <img src="{{asset("assets/images/icons/upload.png")}}" alt="upload-icon">
                        تحميل الملف
                    </span>
                </div>
                <p class="warning-input" style="padding-right: 20px">
                    مثال: عقد التأسيس ،الإقرار الضريبي الربعي ،الإقرار الزكوي
                </p>
                <div class="accept">
                    <div class="accept-input">
                        <input class="form-check-input"  type="checkbox" value="" id="agree">
                    </div>
                    <div class="accept-text">
                        <p>أقر بعدم وجود تضارب مصالح بين المنشأة والمورد <br> <span>سياسة الاستخدام والخصوصية</span> </p>

                    </div>
                </div>
            </form>
            <div class="page2-links">
                <button class="btn btn-primary-main-tow-back">
                    <a href="{{ route("page2") }}">
                        <i class="fa-solid fa-chevron-right"></i>السابق
                    </a>
                </button>
                <button class="btn btn-primary-main-tow">
                    <a href="page3.html">
                        التالي
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>

                </button>
            </div>

        </div>
    </div>
@endsection
