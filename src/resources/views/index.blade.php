@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')

<div class="contact-form_content">
    <div class="contact-form_heading">
        <h2>お問い合わせ</h2>
    </div>
    <form action="contacts/confirm" class="form" method="post">
        @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">
                    お名前
                </span>
                <span class="form_label--required">
                    必須
                </span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name')}}" />
                </div>
                <div class="form_error">
                @error('name')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">
                    メールアドレス
                </span>
                <span class="form_label--required">
                    必須
                </span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email')}}" />
                </div>
                <div class="form_error">
                @error('email')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">
                    電話番号
                </span>
                <span class="form_label--required">
                    必須
                </span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel')}}" />
                </div>
                <div class="form_error">
                @error('tel')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">
                    お問い合わせ内容
                </span>
            </div>
            <div class="form_group-content">
                <div class="form_input--textarea">
                    <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection

