<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form_contact">
            <div class="contact-form_heading">
                <h2>contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form_group">
                    <div class="form__group--title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="text" name="first_name" placeholder="例:山田" />
                            <input type="text" name="last_name" placeholder="例:太郎" />
                        </div>
                        <div class="form_error">
                            <!-- バリデーション -->
                        </div>
                    </div>
                </div>
                <form class="form">
                    <div class="form_group">
                        <div class="form__group--title">
                            <span class="form__label--item">性別</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form_group-content">
                            <div class="form_input-text">
                                <input type="radio" name="gender">男性</input>
                                <input type="radio" name="gender">女性</input>
                                <input type="radio" name="gender">その他</input>
                            </div>
                            <div class="form_error">
                                <!-- バリデーション -->
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="email" name="email" placeholder="test@example.com" />
                            </div>
                            <div class="form__error">
                                <!--バリデーション機能を実装したら記述します。-->
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">電話番号</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="tel" name="tel" placeholder="080"> - </input>
                                <input type="tel" name="tel" placeholder="1234"> - </input>
                                <input type="tel" name="tel" placeholder="5678"/>
                            <div class="form__error">
                                <!--バリデーション機能を実装したら記述します。-->
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">住所</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="address" name="address" placeholder="東京都千駄ヶ谷1-2-3" />
                            </div>
                            <div class="form__error">
                                <!--バリデーション機能を実装したら記述します。-->
                            </div>
                        </div>
                    </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="building" name="building" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="detail">
                                <option value="商品のお届けについて">商品のお届けについて</option>
                                <option value="商品の交換について">商品の交換について</option>
                                <option value="商品トラブル">商品トラブル</option>
                                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="資料をいただきたいです"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>