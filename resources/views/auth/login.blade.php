@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-black text-white">ログイン画面</div>
                <div class="w-full pt-3 m-auto text-center">
                    <form
                        method="POST"
                        action="{{ route('login') }}"
                        class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label
                                class="block text-gray-700 text-sm font-bold mb-2"
                                for="email">
                                メールアドレス
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email"
                                type="text"
                                name="email"
                                placeholder="email" />
                        </div>
                        <div class="mb-6">
                            <label
                                class="block text-gray-700 text-sm font-bold mb-2"
                                for="password"
                                name="password">
                                パスワード
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-1/2 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password"
                                type="password"
                                name="password"
                                placeholder="******************" />
                            <p class="text-red-500 text-xs italic">Please choose a password.</p>
                        </div>
                        <div class="flex items-center justify-between w-1/2 m-auto">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                ログイン
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    パスワードお忘れの方へ
                                </a>
                            @endif
                        </div>
                    </form>
                    <p class="text-center text-gray-500 text-xs mb-3">
                        &copy;2020 Acme Corp. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
