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
            <div class="buying-path DoneCheck1">
                <div class="numbers">
                    <span class="active">١</span>
                    <span class="active">٢</span>
                    <span>٣</span>
                </div>
                <div class="names">
                    <span class="active DoneCheck">معلومات الشراء</span>
                    <span class="active">معلومات مالية</span>
                    <span>المستندات</span>
                </div>
            </div>
            <form>
                <div class="form-group">
                    <label for="totle" class="form-label mt-3">الدخل السنوي بالريال السعودي </label>
                    <input type="text" class="form-control" id="totle" value="20,000 ر.س" placeholder="الدخل السنوي بالريال السعودي ">
                </div>
                <div class="form-group mt-2">
                    <label for="countEm" class="form-label mt-3">عدد الموظفين</label>
                    <input type="number" class="form-control" id="countEm" value="17" placeholder="عدد الموظفين">
                </div>
                <div class="form-group mt-2">
                    <label for="currentAssets" class="form-label mt-2">    الأصول الحالية <img src="{{asset("assets/images/icons/info2.png")}}" class="me-1" alt="info2">  </label>
                    <input type="number" class="form-control" id="currentAssets" value="17" placeholder=" الأصول الحالية">
                </div>
                <div class="form-group mt-2">
                    <label for="currentClaims" class="form-label mt-2">    المطالبات الحالية <img src="{{asset("assets/images/icons/info2.png")}}" class="me-1" alt="info2">  </label>
                    <input type="text" class="form-control" id="currentClaims" value="17,000" placeholder=" المطالبات الحالية">
                </div>
                <div class="form-group mt-2">
                    <label for="email" class="form-label mt-3">  الموقع الإلكتروني   <span class="optional"> (اختياري)</span></label>
                    <input type="email" class="form-control" id="email" value="www.example.com" placeholder="الموقع الإلكتروني ">
                </div>
                <div class="form-check ">
                    <input class="form-check-input" checked type="checkbox" value="" id="agree">
                    <label class="form-check-label" for="agree">
                        أوافق على إصدار سند لأمر كضمان شخصي للتمويل
                    </label>
                </div>
                <div class="form-group mt-2 ">
                    <div class="choose-agree">
                        <span>هل تود رهن الأصل؟</span>
                        <div class="form-check mt-0">
                            <input type="radio" name="agree" id="yess">
                            <label for="yess">نعم</label>
                            <input type="radio" name="agree" class="me-3" id="nos">
                            <label for="nos">لا</label>
                        </div>
                    </div>
                    <div class="choose-agree">
                        <span>هل يوجد ضمانات أخرى؟</span>
                        <div class="form-check mt-0"style="margin-right: 30px;">
                            <input type="radio" name="agree" id="yes">
                            <label for="yes">نعم</label>
                            <input type="radio" name="agree" class="me-3" id="no">
                            <label for="no">لا</label>
                        </div>
                    </div>
                </div>
            </form>
            <div class="page2-links">
                <button class="btn btn-primary-main-tow-back">
                    <a href="{{ route("index") }}">
                        <i class="fa-solid fa-chevron-right"></i>السابق
                    </a>

                </button>
                <button class="btn btn-primary-main-tow">
                    <a href="{{ route("page3") }}">
                        التالي
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </button>
            </div>

        </div>
    </div>
@endsection
