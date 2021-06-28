<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="header">
<a href="#default" class="logo">Logo</a>
</div>

<div style="padding-left:20px">
<center>
    <form method="POST" action="/admin/login/cek">
        {{ csrf_field() }}
          <table  style="margin-top:150px">
              <tr>
                  <td><input class="user" type="text" name="admin_id" placeholder="Username"></td>
              </tr>
              <tr>
                  <td><input class="pass" type="password" name="passwd" placeholder="Password"></td>
              </tr>
              <tr>
                  <td colspan="2" align="right"><input class="login" type="submit" value="Login"></td>
              </tr>
          </table>
      </form>
</center>
</div>
</body>
</html>