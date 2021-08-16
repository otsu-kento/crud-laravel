<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>会員一覧画面</title>
    </head>
    <body>
        <h1 id="title">会員一覧</h1>
        <form method="GET" action="{{route('member.search')}}">
            @csrf
            <div class="search-contents">
                <div>
                    <input type="search" name="q" id="form-search" placeholder="検索">
                </div>

                <button type="submit">検索</button>
            </div>
        </form>
        <div id="subsc-link">
            <a href="{{ route('member.create') }}">{{ __('>> 登録') }}</a>
        </div>
        <table id="members-table">
        <tr>
        <th class="member-th">会員番号</th>
        <th class="member-th">名前</th>
        <th class="member-th">電話番号</th>
        <th class="member-th">メールアドレス</th>
        <th class="member-th"></th>
        </tr>
        @foreach($members as $member)
        <tr>
        <td class="member-td">{{$member->id}}</td>
        <td class="member-td">{{$member->name}}</td>
        <td class="member-td">{{$member->telephone}}</td>
        <td class="member-td">{{$member->email}}</td>
        <td class="member-td"><a href="{{route('member.edit',['id'=>$member->id])}}">>> 編集</a></td>
        </tr>
        @endforeach
        </table>
        <div id="pagenation-contents">
            {{$members->links()}}    
        </div>
    </body>
</html>