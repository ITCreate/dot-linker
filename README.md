# .Linker
**── 人と人を繋ぎ、輪を広げていく**  
ここはイベント支援プラットフォーム「.Linker」のリポジトリです。

### ブランチの運用方法について

本リポジトリでは、開発中のソースコードは「develop」ブランチにマージし、デプロイするタイミングでそれらの変更を「master」ブランチにマージします。

### クローン(初回のみ)

```bash
$ git clone https://github.com/ITCreate/dot-linker.git
```

### セットアップ(初回のみ)

```bash
$ make setup
```

### APIキーの設定(初回のみ)

1.
`https://console.cloud.google.com/`にアクセスし, プロジェクトを作成する.

2.
そのプロジェクトのライブラリに`Google+ API`を追加する.

3.
そのプロジェクトの認証情報で名前に`dot-linker`, 承認済みのリダイレクトURIに`http://localhost:8000/auth/login/callback/google`を追加し, 保存する.

4.
`.env`の`GOOGLE_ID`と`GOOGLE_SECRET`に作成したプロジェクトの認証情報にあるクライアントIDとクライアントシークレットをコピーし, 貼り付ける.

### ローカルサーバの起動

```bash
$ php artisan serve
```

### フロントエンドのコンパイル

```bash
$ npm run dev
```

### フロントエンドのコンパイル(ウォッチ)

```bash
$ npm run watch
```