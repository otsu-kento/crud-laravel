<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>会員登録画面</title>
    </head>
    <body class="create">
        <h1 id="title">会員登録</h1>

        <form id="subsc-form" method="POST" action="{{route('member.store')}}">
            @csrf
            <div class="error-message">
                @error('name')
                    {{$message}}
                @enderror
            </div>
            <div class="error-message">
                @error('telephone')
                    {{$message}}
                @enderror
            </div>
            <div class="error-message">
                @error('email')
                    {{$message}}
                @enderror
            </div>
            <div class="form-contents">
                <input type="text" name="name" id="form-name" class="form-input" placeholder="名前" required value="{{old('name')}}">
            </div>

            <div class="form-contents">
                <input type="tel" name="telephone" id="form-tel" class="form-input" placeholder="電話番号" required value="{{old('telephone')}}">
            </div>

            <div class="form-contents">
                <input type="email" name="email" id="form-email" class="form-input" placeholder="メールアドレス" required value="{{old('email')}}">
            </div>

            <div class="form-contents">
                <button id="form-button" type="submit">登録</button>
            </div>

        </form>    
        <div id="return-link">
            <a href="{{ route('member.index') }}">{{ __('一覧へ戻る') }}</a>
        </div>
    </body>
</html>