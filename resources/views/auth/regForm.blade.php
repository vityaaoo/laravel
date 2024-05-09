<form action="/resultReg" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Имя" class="searchInput"><br>
    <input type="text" name="surname" placeholder="Фамилия" class="searchInput"><br>
    <input type="text" name="password" placeholder="Пароль" class="searchInput"><br>
    <input type="text" name="email" placeholder="Почта" class="searchInput"><br>
    <input type="text" name="age" placeholder="Возраст" class="searchInput"><br>
    <input type="submit" class="pageButton" value="Зарегистрироваться">
</form>