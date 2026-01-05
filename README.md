# Laravel + Docker 開発環境

このディレクトリには、Laravel開発用のDocker環境を構築するためのファイルが含まれます。

## 構成ファイル
- Dockerfile
- docker-compose.yml
- .env（Laravel用）

## セットアップ手順
1. `docker-compose up -d --build` でコンテナを起動
2. `docker-compose exec app composer create-project laravel/laravel src` でLaravelプロジェクトを作成（済み）
3. `cd src` ディレクトリで `.env` を編集し、DB接続情報などを設定
4. `docker-compose exec app php artisan migrate --path=src` でマイグレーション

## アクセス
- http://localhost:8000
	- Laravelのルートは `src` ディレクトリ配下です
