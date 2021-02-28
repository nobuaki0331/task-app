@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-black text-white">新規登録</div>

                <div class="w-full pt-3 m-auto text-center">
                    <form
                        method="POST"
                        action="{{ route('register') }}"
                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label
                                class="block text-gray-700 text-sm font-bold mb-2"
                                for="name">名前
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name"
                                type="text"
                                name="name"
                                placeholder="name" />
                        </div>

                        <div class="mb-6">
                            <label
                                for="email"
                                class="block text-gray-700 text-sm font-bold mb-2">
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
                                for="password"
                                class="block text-gray-700 text-sm font-bold mb-2">
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

                        <div class="mb-6">
                            <label
                                for="password-confirm"
                                class="block text-gray-700 text-sm font-bold mb-2">
                                パスワード再入力
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-1/2 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                placeholder="******************" />
                        </div>

                        <div>
                            <div class="m-auto w-1/2 text-right">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
