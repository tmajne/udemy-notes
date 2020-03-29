<html lang="pl">
    <head>
        <title>Notatnik</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <style>
          @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap&subset=latin-ext');

            body {
                font-family: 'Montserrat', sans-serif;
                color: #333;
                background-color: #ddd;
                margin: 0;
            }

            .wrapper {
                width: 100%;
                max-width: 1400px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                min-height: 100vh;

            }


            h1 {
                font-size: 44px;
                color: #fff;
                text-transform: uppercase;
                text-align: center;
            }

            .far {margin-right: 20px;}

            form {
                background-color: white;
                padding: 30px 30px 20px 30px;
                color: #222;
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
                color: #222;
                font-weight: normal;
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
                background: cadetblue;
                
                border: none;
                color: #fff;
                font-size: 18px;
                text-transform: uppercase;
                padding: 12 40px;
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

            form > div {
                font-weight: bold;
                margin-right: 20px;
                margin-bottom: 20px;
            }

            form > div:first-child  {
                margin-bottom: 20px;
            }
            form > div:first-child > label:first-child { text-transform: uppercase; font-weight: normal }
            form > div:first-child > label:first-child > input {
                margin-left: 14px;
                font-family: montserrat;
                outline: none;
                font-size: 22px;
            }
            form > div:first-child > label:first-child > input:focus {
                box-shadow: 0 0 0px 2px cadetblue; 
            }
         
            .header {
                text-align: center;
                background-color: cadetblue;
                margin-bottom: 20px;
                padding: 20px 0;
            }

            .container {
                display: flex;
                flex-direction: row;
                align-items: stretch;
                flex-grow: 1;
            }

            .menu {
                width: 20%;
                background-color: white;
            }

            .menu ul {
                list-style: none;
            }

            .menu ul a {
                display: block;
                color: cadetblue;
                font-size: 18px;
                text-transform: uppercase;
                padding: 16px 0;
                text-decoration: none;
            }

            .menu ul a:hover {
                font-weight: bold;
            }

            .page {
                width: calc(80% - 20px);
                margin-left: 20px;
            }

            .footer {
                margin-top: 20px;
                background-color: cadetblue;
                padding-bottom: 30px;
            }

            .footer p {
                text-align: center;
                color: #ddd;
            }

            
.list {
    margin: 0;
}
    table {
        width:100%;
        table-layout: fixed;
    }

    .tbl-header {
        margin-top: 20px;
        background-color: cadetblue;
        color: white;
    }

    .tbl-content {
        overflow-x:auto;
        margin-top: 0px;
        border: 3px solid cadetblue;
        color: #222;
        background-color: white;
    }

    th {
        padding: 20px 15px;
        text-align: center;
        font-weight: 500;
        font-size: 14px;
        color: #fff;
        text-transform: uppercase;
    }

    td {
        padding: 15px;
        text-align: center;
        vertical-align:middle;
        font-weight: 300;
        font-size: 14px;
        color: #222;
        /* border-bottom: solid 1px rgba(255,255,255,0.1); */
    }

    tr>td:nth-child(1) {
        width: 50px;
        
    }
    tr>th:nth-child(1) {
        width: 50px;
        
    }
    tr>td:nth-child(2) {
        width: 50%;
        text-align: left;
    }
    tr>th:nth-child(2) {
        width: 50%;
    }

    tr>td:nth-child(3) {
        font-style: italic;
    }

    .error {
        /* margin: 0 10px 25px 10px; */
        /* margin-top:0; */
        text-align: center;
        font-weight: 700;
        color: #ff0000;
    }

    .message {
        /* margin: 0 25px 10px 25px; */
        /* margin-top:0; */
        text-align: center;
        font-weight: 700;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background-color: white;
    }

    .pagination {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: center;
        align-items: auto;
        align-content: center
    }

    .pagination li {
        flex: 0 0 auto;
        margin: 10px;
    }

    .pagination li button {
        cursor: pointer;
    }

    .settings-form label {
        display: inline-block;
    }

    button {
        border: none;
        background-color: cadetblue;
        padding: 5px 10px;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #4691A4;
    }

    form.note-form li label {
        font-size: 18px;
    }
    form.note-form input, form.note-form textarea {
        font-size: 16px;
    }

    .delete, .show {
    padding: 10px;
    background-color: white;
    color: #222;
    }
    .delete ul, .show ul {
        list-style: none;
    }

    .delete button, .show button {
        padding: 8px 12px;
    }
        </style>
    </head>

    <body class="body">
    <div class="wrapper">
        <div class="header">
            <h1><i class="far fa-clipboard"></i>Moje notatki</h1>
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
            <p>Notatki - projekt w kursie PHP</p>
        </div>
        </div>
    </body>
</html>