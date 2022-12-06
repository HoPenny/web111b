# Matkdown 文件製作

## GitHub 的設置

1. 登入 [GitHub](https://github.com/)

2. 創建倉庫
   點擊 `"+"` ，新建倉庫 `New repository`
   - 設置倉庫名稱: `picgo` 
   - 設置為公開
  
   按下 `Create repository` 按鈕

   ![20221201140413](https://raw.githubusercontent.com/allen-5183/windows/main/images/20221201140413.png)
3. 生成 `token` 個人訪問令牌
   ![20221201140635](https://raw.githubusercontent.com/allen-5183/windows/main/images/20221201140635.png)
   1. 選取 `Settings` 項目
   2. 尋找 `開發人員設置 Developer settings` 項目
      ![20221201141015](https://raw.githubusercontent.com/allen-5183/windows/main/images/20221201141015.png)
   3. 產生個人訪問令牌(`Personal access tokens`)
      ![20221201141418](https://raw.githubusercontent.com/allen-5183/windows/main/images/20221201141418.png)

      ![20221201141639](https://raw.githubusercontent.com/allen-5183/windows/main/images/20221201141639.png)
   4. 複製 `token` 密鑰只展示一次，切記保存！！！ 如果忘記了需重新製作。

---

## PicGO 設置與安裝

1. 下載安裝
   - [官網下載]()
   - [Github地址]()

2. 配置
   - 設置倉庫名：用户名稱/倉庫名稱。 例: `allen-5183/picgo1`
   - 設定分支名：之前默認是 `master` ，現在是`main`
   - 設定 `Token`：就是剛才複製的那一段令牌密鑰
   - 下面兩個非必填
   ![20221201144036](https://raw.githubusercontent.com/allen-5183/windows/main/images/20221201144036.png)

3. `GitHub` 上傳資料

   ```bash
   cd 專案資料夾
   echo "# picgo1" >> README.md
   git init
   git add README.md
   git commit -m "first commit"
   git branch -M main
   git remote add origin https://github.com/allen-5183/picgo1.git
   git push -u origin main
   ```

   會上傳失敗，需要到 `GitHub` 網站建置 `SSH Key` 做為登入依據。
