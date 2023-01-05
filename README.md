# **一般社団法人フウド LP**

<br>

## **概要と要件**
LP1枚、リンク先のプライバシーポリシーページと、フォーム送信時のサンクスページを作成。

<br>

### **作成するページ**
- TOPページ
- プライバシーポリシーページ
- サンクスページ

<br>

## **開発環境の使い方**
当開発環境においては、以下の言語で開発を行う。
- CSS (ライブラリとしてSassを使用) 
- Javascript
- PHP

### **開発開始までの準備**

1.下記アプリケーション、プラグインをインストール。
- git
- node.js
- Local By Flywheel

2.Local By Flywheelで、下記に沿って仮想環境を作成する。
- site nameを「hudolp」とする。
- PHP、nginx、mySQLのバージョンは最新のものを選択。
- LocalSites内にhudolpフォルダが作成される。

3.hudolp > app >public >wp-content > themes フォルダに移動し、本リポジトリをcloneする。

4.npm installで必要なパッケージをインストールする。

5.npm run dev もしくは npm run buuild で開発環境をスタートする。

<br>

### **主要なコマンド**

| コマンド | 内容 |
|--- |---|
| dev | 開発用環境を立ち上げる。browser-syncでローカルサーバを立ち上げ、ブラウザで表示を確認することができる。|
| build | 本番公開用ファイルを出力する。|
| minify | 画像圧縮を実行する。|



<br>

### **フォルダ構成**
- dist 公開領域を想定。
    - assets　　src内の各ファイルが処理され、等ファイルに格納される。
        - image　　圧縮した画像データを格納。
        - css　　Sassをコンパイル、圧縮し格納。
        - js　　Javascriptを圧縮し格納。

<br>

- src コンパイル元のデータ
    - image 　元画像。minifyで圧縮しdistに出力。
    - scripts 　スクリプト。buildで圧縮しdistに出力。
    - scss　スタイル。buildで圧縮しdistに出力。

