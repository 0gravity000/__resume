@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="columns">
                <div class="column is-6">履歴書</div>
                <div class="column is-6 text-end">令和３年　８月１８日現在</div>
            </div>
        </div>  <!-- col -->
        <div class="col">
        </div>  <!-- col -->
    </div>  <!-- row -->

    <div class="row">
        <div class="col">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">ふりがな</div>
                            <div class="column">りれき　はなこ</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">氏　名</div>
                            <div class="column">履歴　花子</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">生年月日</div>
                            <div class="column">1987年 8月 12日 （満 xx 歳） 女</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">ふりがな</div>
                            <div class="column">とうきょうとちよだくひとつばし</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">現住所</div>
                            <div class="column">東京都千代田区一ツ橋 １－１－１</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">ふりがな</div>
                            <div class="column"></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">連絡先</div>
                            <div class="column">同 上</div>
                        </div>
                    </li>
                </ul>
            </div>    <!-- card -->

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2 text-center">年</div>
                            <div class="column is-1 text-center">月</div>
                            <div class="column is-9 text-center">学　歴</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成１６</div>
                            <div class="column is-1">３</div>
                            <div class="column is-9">東京都立履歴高等学校　卒業</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成１６</div>
                            <div class="column is-1">４</div>
                            <div class="column is-9">履歴大学経営学部経営情報学科　入学</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成２０</div>
                            <div class="column is-1">３</div>
                            <div class="column is-9">履歴大学経営学部経営情報学科　卒業</div>
                        </div>
                    </li>
                </ul>
            </div>  <!-- card -->
        </div>  <!-- col -->

        <div class="col">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2 text-center">年</div>
                            <div class="column is-1 text-center">月</div>
                            <div class="column is-9 text-center">職　歴</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成２０</div>
                            <div class="column is-1">４</div>
                            <div class="column is-9">株式会社ｘｘｘ　入社</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成２１</div>
                            <div class="column is-1">３</div>
                            <div class="column is-9">一身上の都合により退職</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成２１</div>
                            <div class="column is-1">４</div>
                            <div class="column is-9">株式会社○○○　入社</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成２６</div>
                            <div class="column is-1">４</div>
                            <div class="column is-9">営業部　営業二課に異動</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2"></div>
                            <div class="column is-1"></div>
                            <div class="column is-9">現在に至る</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2"></div>
                            <div class="column is-1"></div>
                            <div class="column is-9">以上</div>
                        </div>
                    </li>

                </ul>
            </div>  <!-- card -->

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2 text-center">年</div>
                            <div class="column is-1 text-center">月</div>
                            <div class="column is-9 text-center">免許・資格</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2">平成１７</div>
                            <div class="column is-1">５</div>
                            <div class="column is-9">普通自動車第一種運転免許　取得</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-2"></div>
                            <div class="column is-1"></div>
                            <div class="column is-9">以上</div>
                        </div>
                    </li>
                </ul>
            </div>  <!-- card -->

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-full text-center">志望の動機、自己PR、趣味、特技など</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-one-fifth"></div>
                            <div class="column"></div>
                        </div>
                    </li>
                </ul>
            </div>  <!-- card -->
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-full text-center">本人希望記入欄（特に待遇・職種・勤務時間・その他についての希望などがあれば記入）</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="columns">
                            <div class="column is-one-fifth"></div>
                            <div class="column"></div>
                        </div>
                    </li>
                </ul>
            </div>  <!-- card -->
        </div>  <!-- col -->
    </div>  <!-- row -->

</div>
@endsection
