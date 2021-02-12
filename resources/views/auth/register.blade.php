<x-app-layout>
    <x-slot name="title">
        - عضویت در سایت
    </x-slot>
<div class="container" id="registration-form">
    <div class="image"></div>
    <div class="frm">
        <h1>ثبت نام</h1>
        <form action="{{ route('store.register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">نام کاربری:</label>
                <input type="text" name="name" class="form-control" id="username" placeholder="وارد کردن نام و نام خانوادگی">
                @error('name')
                    <b class="error_validation">{{ $message }}</b>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">ایمیل:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="وارد کردن ایمیل">
                @error('email')
                <b class="error_validation">{{ $message }}</b>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">شماره موبایل:</label>
                <input type="text" name="mobile" class="form-control" id="email" placeholder="وارد کردن شماره موبایل">
                @error('mobile')
                <b class="error_validation">{{ $message }}</b>
                @enderror
            </div>
            <div class="form-group">
                <label for="pwd">رمز عبور:</label>
                <input type="password" name="password" class="form-control" id="pwd" placeholder="وارد کردن رمز عبور">
                @error('password')
                <b class="error_validation">{{ $message }}</b>
                @enderror
            </div>
            <div class="form-group">
                <label for="pwd">تکرار رمز عبور:</label>
                <input type="password" name="password_confirmation" class="form-control" id="pwd" placeholder="تکرار رمز عبور">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">ارسال</button>
            </div>
        </form>
    </div>
</div>

</x-app-layout>
