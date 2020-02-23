/* 共通 */
body {
    font-family: 'メイリオ','Hiragino Kaku Gothic ProN',sans-serif;
    line-height:1.5
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 10px
}

/* article */
.article h1 {font-size: 36px}

.article h1 amp-img {margin-left: 6px}

.article h2 {position:relative;
              padding-left:32px;
              margin-top: 40px;
              border-bottom: solid 3px #bac6cb}
.article h2:before {position: absolute;
                    left: 0px;
                    top: 3px;
                    content: '\f14a';
                    color: #bac6cb;
                    font-family: 'FontAwesome';
                    font-size: 28px;
                    line-height: 1}

.article h3 {
    margin-top: 25px;
    padding-left: 10px;
    border-left: solid 10px #bac6cb
}
@media (max-width: 599px) {
    .artilce h1 { font-size: 24px}
    .article h1 amp-img { max-width: 20px;
                          max-height: 20px;
                          margin-left: 4px}
    .article h2 { font-size: 18px}
    .article h3 { padding-left: 6px;
                  font-size:15px }
    .article p { font-size: 14px}
    .wp-block-table {font-size: 12px}
}
/* 投稿日・更新日 */
.a-date {
    margin-bottom: 20px;
    color: #666666;
    font-size: 12px;
}
.a-date .fa {
    font-size: larger
}
/* カテゴリー＆タグ */
.a-categories:after {
    content: "";
    display: block;
    clear: both
}
.a-categories ul {
    margin: 0;
    padding: 0;
    list-style: none
}
.a-categories li {float: left}
.a-categories li a {
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 2px;
    padding: 3px 5px;
    border-radius: 2px;
    background-color: #98c7da;
    color: #ffffff;
    font-size: 12px;
    text-decoration: none
}
.a-categories li a:hover {opacity: 0.8}
.a-categories li a[rel='tag'] {
    background-color: #98b4da
}
/* ヘッダー */
header {
    border-bottom: solid 10px #e5e5e5;
    margin-bottom: 20px
}
.site {
    padding: 10px 0;
    font-family:'Syncopate',sans-serif;
    font-size: 30px
}
.site a {
    color: #666666;
    text-decoration: none
}
.site amp-img {
    vertical-align: -10px;
}
/*　フッター */
footer {
    background-color: #e5e5e5
}
.copyright {
    padding: 15px 0;
    color: #666666;
    font-family: 'Syncopate',sans-serif;
    font-size: 14px
}
/* テーブル　*/
table {
	width: 100%;
	margin-bottom: 1.1429rem;
}

table > thead > tr {
	background: #3c98d6;
}

table > thead > tr > th {
	color: #fff;
	background: #3c98d6;
	padding: 14px 14px;
	border: 1px solid #ccc;
}

table > tbody > tr > th {
	background: #f1f1f5;
	color: #fff;
	padding: 14px 18px;
	border: 1px solid #ccc;
}

table > tbody > tr > td {
	border: 1px solid #ccc;
	padding: 0.5714rem;
	padding: 14px 18px;
}
