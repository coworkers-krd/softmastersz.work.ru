

<?php
if( isset( $_GET['msg'] ) ) {
// в случае успеха
if( $_GET['msg'] == 'success' )
echo '<span>Сообщение успешно отправлено</span>';

// в случае ошибки
if( $_GET['msg'] == 'error' )
echo '<span><strong>Ошибка:<strong> Проверьте правильность введённых вами данных.</span>';
// вы сами можете добавить различные другие сообщения об ошибках

}
?>


<div class="feedback">
    <h2 class="section-title">Напишите нам!</h2>
    <div class="feedback__map"></div>
    <form action="<?= get_template_directory_uri()?>/send.php" method="POST" class="feedback__form">
        <input type="text" name="name" required="true"  placeholder="Ваше Имя"class="feedback__input">
        <input type="text" name="email" required="true" placeholder="Ваш Email" class="feedback__input">
        <input type="text" name="theme" placeholder="Тема сообщения" class="feedback__input">

        <label for="">

            <p class="feedback__text">
                <input type="checkbox" required="true">
                Я прочитал и согласен с <a href="/policy" target="_blank">политикой</a>  хранения и обработки персональных данных
            </p>
        </label>

        <textarea name="message" placeholder="Сообщение" id="" cols="30" rows="10" class="feedback__input feedback__input--big"></textarea>

        <input type="submit" class="feedback__btn" value="Отправить">
    </form>
</div>