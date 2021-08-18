@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard　こんにちわ、 {{ Auth::user()->name }} さん</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="/profile">履歴書を見る</a></li>
                        <li class="list-group-item">履歴書を編集する</li>
                        <li class="list-group-item">職務経歴書を見る</li>
                        <li class="list-group-item">職務経歴書を編集する</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
