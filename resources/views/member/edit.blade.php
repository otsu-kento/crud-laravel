<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>会員編集画面</title>
    </head>
    <body class="edit">
        <h1 id="title">会員編集 会員ID:{{$member->id}}</h1>
        
        <form method="POST" action="{{route('member.update',['id' =>$member->id])}}">
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
                <input type="text" name="name" id="form-name" class="form-input" value="{{$member->name}}">
            </div>

            <div class="form-contents">
                <input type="tel" name="telephone" id="form-tel" class="form-input" value="{{$member->telephone}}">
            </div>

            <div class="form-contents">
                <input type="email" name="email" id="form-email" class="form-input" value="{{$member->email}}">
            </div>

            <div class="form-contents">
                <button id="form-button" type="submit">編集</button>
            </div>
        </form> 
        
        <form method="POST" action="{{route('member.destroy',['id'=>$member->id])}}">
            @csrf
            <div class="form-contents">
                <button id="form-button" type="submit">削除</button>
            </div>  
        </form>
        <div id="return-link">
            <a href="{{ route('member.index') }}">{{ __('一覧へ戻る') }}</a>
        </div>
    </body>
</html>