<h1>Trang login</h1>
<form action="/check_login" method="POST">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
    @csrf
</form>