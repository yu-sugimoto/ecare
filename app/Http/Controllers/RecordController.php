<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function form(Request $request)
    {
        // モデルを使ってレコードを登録
        $record = new Record();
        $record->category = $request->category;
        $record->content = $request->content;
        // 追加したカラム分を加える
        $record->origin = $request->origin;
        // ログインしているユーザーのIDを取得
        $record->user_id = $request->user()->id;
        $record->save();

        // 再送信を防ぐためのトークンを発行
        $request->session()->regenerateToken();

        // settiionにalertを保存
        session()->flash('alert', 'データが保存されました。');

        // 送信完了後にアラートを出した後フォーム画面を表示
        return redirect()->route('form');
    }
}
