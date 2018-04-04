<!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Importacebd.com</title>
</head>
<body>
<div class="container" style="margin-left: 25px; margin-right: 25px; padding: 5px;">
            <div class="panel-default" style="background-color: ghostwhite;">
                <div class="panel-heading panel-blue" style="background-color:#01b2d2 ;padding: 10px; font-size: 20px; text-align: center;">
                    Jogonnath Hall
                </div>
                <div class="panel-body" style="padding: 10px;">
                    <h2>Hello {{$user->name}}</h2>
                    <p style="text-align: justify; font-size: 13px;">
                        Please activate your account in the link below
                    </p>
                    <div style="text-align: center;">
                        <a href="http://127.0.0.1:8000/activate/{{encrypt($user->id)}}" style="padding: 10px;background-color: #00A6C7;text-decoration: none;color: white; font-size: 15px; ">Confirm Account</a>
                    </div>
                </div>
            </div>
</div>
</table>
</body>
