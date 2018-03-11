<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bequem 問い合わせフォーム</title>
</head>
<body>
<div id="page">
    <form class="form-horizontal" role="form" method="post" action="TestSubmit.php">
        <div class="container">
            <h1>Bequem 問い合わせフォーム</h1>

            <div class="row">
                <div class="col-sm-9">
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label for="input-name" class="col-sm-2 control-label">お名前</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-name" placeholder="お名前"
                                       required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-gender" class="col-sm-2 control-label">性別</label>
                            <div class="col-sm-10" id="input-gender">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required="required">
                                    <label class="form-check-label" for="inlineRadio1">男性</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required="required">
                                    <label class="form-check-label" for="inlineRadio2">女性</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-status" class="col-sm-2 control-label">購入製品</label>
                            <div class="col-sm-10" id="input-status">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Bequem Generator</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Bequem Recorder</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                    <label class="form-check-label" for="inlineCheckbox3">Bequem Analyzer (現在対応しておりません)</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-mail" class="col-sm-2 control-label">メールアドレス</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="input-mail" placeholder="メールアドレス"
                                       required="required">
                            </div>
                        </div>




                        <div class="form-group">
                            <label class="col-sm-2 control-label">ご用件</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option value="">選択してください</option>
                                    <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                                    <option value="ご意見・ご感想">ご意見・ご感想</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">お問い合わせ内容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" required="required"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">送信</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div><!-- /container -->
    </form>
</div><!-- /page -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>