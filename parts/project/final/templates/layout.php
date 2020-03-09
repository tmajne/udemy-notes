<html lang="pl">
    <head>
        <title>Notatnik</title>
        <meta charset="utf-8">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
            body {
                background: -webkit-linear-gradient(left, #25c481, #25b7c4);
                background: linear-gradient(to right, #25c481, #25b7c4);
                font-family: 'Roboto', sans-serif;
            }
            section {
                margin: 50px;
            }

            h1 {
                font-size: 30px;
                color: #fff;
                text-transform: uppercase;
                font-weight: 300;
                text-align: center;
                margin-bottom: 15px;
            }

            form {
                margin:10px;
                max-width: 400px;
                padding: 20px 12px 10px 20px;
            }
            form li {
                padding: 0;
                display: block;
                list-style: none;
                margin: 10px 0 0 0;
            }
            form label{
                margin:0 0 3px 0;
                padding:0px;
                display:block;
                color: #ffffff;
            }
            form input[type=text],
            form input[type=date],
            form input[type=datetime],
            form input[type=number],
            form input[type=search],
            form input[type=time],
            form input[type=url],
            form input[type=email],
            textarea,
            select{
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                border:1px solid #BEBEBE;
                padding: 7px;
                margin:0px;
                -webkit-transition: all 0.30s ease-in-out;
                -moz-transition: all 0.30s ease-in-out;
                -ms-transition: all 0.30s ease-in-out;
                -o-transition: all 0.30s ease-in-out;
                outline: none;
            }
            form input[type=text]:focus,
            form input[type=date]:focus,
            form input[type=datetime]:focus,
            form input[type=number]:focus,
            form input[type=search]:focus,
            form input[type=time]:focus,
            form input[type=url]:focus,
            form input[type=email]:focus,
            form textarea:focus,
            form select:focus{
                -moz-box-shadow: 0 0 8px #88D5E9;
                -webkit-box-shadow: 0 0 8px #88D5E9;
                box-shadow: 0 0 8px #88D5E9;
                border: 1px solid #88D5E9;
            }

            form .field-long{
                width: 100%;
            }
            form .field-textarea{
                height: 100px;
            }
            form input[type=submit], form input[type=button]{
                background: #4B99AD;
                padding: 8px 15px 8px 15px;
                border: none;
                color: #fff;
            }
            form input[type=submit]:hover, form input[type=button]:hover{
                background: #4691A4;
                box-shadow:none;
                -moz-box-shadow:none;
                -webkit-box-shadow:none;
            }
            form .required{
                color:red;
            }

            .body {
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            .header {
                text-align: center;
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            }

            .container {
                display: flex;
                flex-direction: row;
                align-items: stretch;
            }

            .menu {
                width: 15%;
                border-right: 1px solid rgba(255, 255, 255, 0.3);
            }

            .page {
                width: 85%;
            }

            .footer {
                border-top: 1px solid rgba(255, 255, 255, 0.3);
            }
        </style>
    </head>

    <body class="body">
        <div class="header">
            <h1>Moje notatki</h1>
        </div>

        <div class="container">
            <div class="menu">
                <ul>
                    <li><a href="/">Strona główna</a></li>
                    <li><a href="/?action=create">Nowa notatka</a></li>
                </ul>
            </div>

            <div class="page">
                <?php require_once __DIR__ . "/pages/$page.php"; ?>
            </div>
        </div>

        <div class="footer">

        </div>
    </body>
</html>