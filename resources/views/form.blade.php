<x-app-layout>
    <!-- slotに $title を渡す -->
    <x-slot name="title">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('記録フォーム') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 text-gray-900">
                    <!-- 以下記録フォーム -->
                    <form action="{{ route('form') }}" method="post">
                        @csrf
                        <div class='forms'>
                            <div class='p-4'>
                                <label class='font-semibold'>カテゴリ</label>
                                <br>
                                <select class='w-full' name="category">
                                    <!-- 本番用 -->
                                    <!-- <option value="1">食事介助</option>
                                    <option value="2">薬</option>
                                    <option value="3">処置</option>
                                    <option value="4">声かけ</option>
                                    <option value="5">見守り</option>
                                    <option value="6">車いす誘導・歩行介助</option>
                                    <option value="7">排泄介助・おむつ交換</option>
                                    <option value="8">その他介助</option>
                                    <option value="9">準備・片付け</option>
                                    <option value="10">移動</option>
                                    <option value="11">情報共有</option>
                                    <option value="12">バイタル</option>
                                    <option value="13">家族対応</option>
                                    <option value="14">その他</option> -->

                                    <!-- 実験用 -->
                                    <option value="1">移動</option>
                                    <option value="2">声掛け</option>
                                    <option value="3">探す</option>
                                    <option value="4">尋ねる</option>
                                    <option value="5">選ぶ</option>
                                    <option value="6">戻す</option>
                                    <option value="7">待機</option>
                                    <option value="8">購入</option>
                                    <option value="9">袋詰め</option>
                                    <option value="10">会話</option>
                                    <option value="11">その他</option>

                                </select>
                            </div>
                            <div class='p-4'>
                                <label class='font-semibold'>起点</label>
                                <br>
                                <select class='w-full' name="origin">
                                    <!-- 本番用 -->
                                    <!-- <option value="1">介護職員</option>
                                    <option value="2">患者</option>
                                    <option value="3">その他</option> -->

                                    <!-- 実験用 -->
                                    <option value="1">被験者</option>
                                    <option value="2">店員</option>
                                    <option value="3">その他</option>

                                </select>
                            </div>
                            <div class='p-4'>
                                <label class='font-semibold'>自由記述</label>
                                <br>
                                <textarea class='w-full h-20' name="content"></textarea>
                            </div>
                            <div class='p-4'>
                                <button type='submit' class='hover:bg-blue-500 font-semibold py-2 px-4 rounded w-full' style="border-width:8px;">送信</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // settionにalertがあれば表示
        if ("{{ session('alert') }}") {
            window.alert("{{ session('alert') }}");
        }
    </script>
</x-app-layout>