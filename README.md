# .Linker
**── 人と人を繋ぎ、輪を広げていく**  
ここはイベント支援プラットフォーム「.Linker」のリポジトリです。

### ブランチの運用方法について

本リポジトリでは、開発中のソースコードは「develop」ブランチにマージし、デプロイするタイミングでそれらの変更を「master」ブランチにマージします。

### セットアップ

```bash
$ make setup
```

### ローカルサーバの起動

```bash
$ php artisan serve
```

### ルート定義ファイルの追加

```bash
$ php artisan route:make route_name
```

### フロントエンドのコンパイル

```bash
$ npm run dev
```

### フロントエンドのコンパイル(ウォッチ)

```bash
$ npm run watch
```