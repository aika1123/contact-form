@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')

<div class="confirm_content">
    <div class="confirm_heading">
        <h2>
            お問い合わせ内容確認
        </h2>
    </div>
    <?php print_r($contact['name']) ?>
    <form class="from" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table_inner">
                <tr class="confirm-table_row">
                    <th class="confirm-table_header">
                        お名前
                    </th>
                    <td class="confirm-table_text">
                        <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table_row">
                    <th class="confirm-table_header">
                        メールアドレス
                    </th>
                    <td class="confirm-table_text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table_row">
                    <th class="confirm-table_header">
                        電話番号
                    </th>
                    <td class="confirm-table_text">
                        <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table_row">
                    <th class="confirm-table_header">
                        お問い合わせ内容
                    </th>
                    <td class="confirm-table_text">
                        <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">
                送信
            </button>
        </div>
    </form>
</div>
@endsection