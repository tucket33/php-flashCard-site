<main class="main-entry">
    <h1 class="enterNumber">Enter a number:</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?> " class="main-entry__form" method="GET">
        <input type="text" class="main-entry__input" id="num" name="num" aria-labelledby="enterNumber" maxlength="2"
            autofocus required>
        <button class="main-entry__button">go</button>
    </form>
</main>