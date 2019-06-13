# 祝日DB自動更新

内閣府が交付している祝日CSV
https://www8.cao.go.jp/chosei/shukujitsu/syukujitsu.csv
を読んで
データベースの jp_holidays テーブルを更新する。

### コマンド起動方法
php artisan command:update_holiday_database

このコマンドをcronで月に１回でも呼べば
祝祭日情報が自動的に更新される。
