<form action="/resultAuthForm" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Имя" class="searchInput"><br>
    <input type="text" name="password" placeholder="Пароль" class="searchInput"><br>
    <input type="submit" class="pageButton" value="Войти">
</form>