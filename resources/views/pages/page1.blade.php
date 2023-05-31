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
            <div class="buying-path">
                <div class="numbers">
                    <span class="active">١</span>
                    <span>٢</span>
                    <span>٣</span>
                </div>
                <div class="names">
                    <span class="active">معلومات الشراء</span>
                    <span>معلومات مالية</span>
                    <span>المستندات</span>
                </div>
            </div>
            <div class="buying-information">
                <h5>معلومات الشراء</h5>
                <form>
                    <div class="form-group">
                        <label for="type" class="form-label">نوع المشتريات</label>
                        <input type="text" class="form-control" id="type" placeholder="نوع المشتريات">
                    </div>
                    <div class="form-group">
                        <label for="file-price" class="form-label">عرض السعر</label>
                        <!-- Here I,m give file by js jquery And Make all condition -->
                        <input type="text" disabled class="form-control" id="file-price" placeholder="أختر الملف ">
                        <span class="upload-file">
                                <img src="{{asset("assets/images/icons/upload.png")}}" alt="upload-icon">
                                تحميل الملف
                            </span>
                    </div>
                    <p class="warning-input">
                        <img src="./assets/images/icons/info2.png" alt="info2">
                        يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت
                    </p>
                    <div class="form-group">
                        <label for="buying-price" class="form-label">مبلغ المشتريات بالريال السعودي </label>
                        <input type="number" class="form-control" id="buying-price" placeholder="مثال: 350,000">
                    </div>
                    <p class="warning-input2">
                        مبلغ المشتريات للمنشأة من 100 ألف ريال سعودي إلى 500 ألف ريال سعودي
                    </p>
                    <div class="form-group">
                        <label for="buying-pay" class="form-label"> فترة السداد بالأشهر </label>
                        <select  id="buying-pay" class="form-select" >
                            <option selected>اختر فترة السداد</option>
                        </select>
                        <i class="fa-solid fa-chevron-down select-icon"></i>
                    </div>
                </form>
                <div class="installment-calculator">
                    <h4>حاسبة القسط الشهري التقريبية</h4>
                    <div class="details-buying-calculator">
                        <div class="head-details">
                            <span>مبلغ المشتريات</span>
                            <span>المرابحة</span>
                            <span>المبلغ الكلي</span>
                        </div>
                        <div class="body-details">
                            <span class="main-span">0.00 <span>ر.س</span> </span>
                            <span class="cl-plus">+</span>
                            <span class="main-span">  0.00 <span>ر.س</span> </span>
                            <span class="cl-equal">=</span>

                            <span class="main-span">  0.00 <span>ر.س</span></span>
                        </div>
                    </div>
                    <div class="monthly-installment">
                        <h3> القسط الشهري <a>تطبيق الشروط والأحكام</a></h3>
                        <p> 0.00 <span>ر.س</span></p>
                    </div>
                    <div class="monthly-installment">
                        <h3> الرسوم الإدارية <a>تطبيق الشروط والأحكام</a></h3>
                        <p> 0.00 <span>ر.س</span></p>
                    </div>
                </div>
                <h5> معلومات المورد </h5>
                <form>
                    <div class="form-group">
                        <label for="choose-suppliers" class="form-label"> اختر من الموردين </label>
                        <select  id="choose-suppliers" class="form-select" >
                            <option selected>  اختر من الموردين </option>
                        </select>
                        <i class="fa-solid fa-chevron-down select-icon"></i>
                    </div>
                </form>
                <div class="supplier-data">
                    <div class="icons-supplier-data">
                        <i class="fa-solid fa-pen-to-square" ></i>
                        <i class="fa-solid fa-trash-can"></i>
                    </div>
                    <div class="details-supplier-data">
                        <h4> بيانات المورد  </h4>
                        <div class="head-details">
                            <span>اسم المنشأة الموردة </span>
                            <span>اسم المسؤول</span>
                            <span>القطاع </span>
                        </div>
                        <div class="body-details">
                            <span> خديجة محمد   </span>
                            <span> خديجة محمد </span>
                            <span> اسم القطاع </span>
                        </div>
                    </div>
                    <div class="details-supplier-data">
                        <h4> بيانات التواصل  </h4>
                        <div class="details-connect">
                            <div class="phone">
                                <img src="{{asset("assets/images/icons/phone.png")}}" alt="phone">
                                <span>+966 7655 6666 </span>
                            </div>
                            <div class="email">
                                <img src="{{asset("assets/images/icons/email.png")}}" alt="email">
                                <span>khadija-ahmed@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="details-supplier-data " style="border-bottom: none;padding-bottom: 0">
                        <h4> المرفقات </h4>
                        <div class="file-d">
                            <img src="{{asset("assets/images/icons/file-mor.png")}}" alt="file">
                            <a>شهادة الحساب البنكي للمورد.pdf </a>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary-main">
                    <a href="{{ route('page2') }}">
                        التالي
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
