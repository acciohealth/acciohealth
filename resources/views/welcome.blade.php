<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/b31304ed6f.js"></script>


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .container .logo img{
                height: 300px;
                width: auto;
            }

            .social ul{
                list-style: none;
                display: table;
                margin: 0 auto;
                padding: 0px;
            }
            .social ul li{
                display: inline-block;
                font-size: 25px;
                padding: 0px 5px;
            }

            .social ul li a{
              color: #ccc;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="text-center logo"><img src="{{ asset('img/logo.png') }}" alt=""></div>
                <div class="text-center social">
                    <ul>
                        <li><a href="https://www.facebook.com/acciohealth/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/7971367?trk=tyah&trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_company_company_company_company_company_7971367%2Cidx%3A0" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/101364077373445616962" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/Accio_Health?lang=en" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/accio.health/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
