<!DOCTYPE html>
<html lang="ja">

<head>  <link href="{{ asset('/css/contact.css')}}" rel="stylesheet" type="text/css"></head>
    <body>
      <h1>CONTACT</h1>
      <form action="/melbourneroastingcompany/confirmed" method="post">
        {{ csrf_field() }}
        <div>
            <label for="name">Name : </label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">E-mail : </label>
            <input type="mail" id="email" name="email">
        </div>
        <div>
            <label for="message">Massage : </label>
            <textarea id="message" name="message"></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
  </body>
</html>
