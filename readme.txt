1.2018/6/25開始撰寫此系統，預定2018/7/31上線使用。為本人在禾伸堂企業股份有限公司實習時做的小專案，目的在於將目前舊有的資訊設備借出系統更新為網頁版。

2.首先安裝網站伺服器。
	(1).下載最新版Appserv(AppServ為Apache+PHP+MySQL架站懶人包)並安裝，安裝時設定皆為預設(MySQL一定要設定8位數以上的密碼
)。
	(2).網頁預設放在www資料夾底下，修改方式為開啟C:\AppServ\Apache2.2\conf\httpd.conf找到DocumentRoot "C:/AppServ/www"，並設定路徑。
	(3).如需修改MySQL資料存放路徑，開啟C:\AppServ\MySQL\my.ini找到datadir="C:\AppServ/MySQL/data"。

3.網路搜尋HTML免費模板並修改及增加需要的功能。

參考資料
https://scriptmarks.com/%E4%BD%BF%E7%94%A8-appserv-%E5%9C%A8%E8%87%AA%E5%B7%B1%E9%9B%BB%E8%85%A6%E6%9C%AC%E6%A9%9F%E6%9E%B6%E8%A8%ADapache%E4%BC%BA%E6%9C%8D%E5%99%A8/
http://fuunkao-sekai.blogspot.com/2011/10/appserv-seting.html