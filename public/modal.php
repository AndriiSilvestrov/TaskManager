<section class="application application__modals modals">
    <div class="modals__cover">
        <div class="modals__container">
            <div class="modal">
                <div class="modal__header toolbar">
                    <h3 class="modal__title">Новое сообщение</h3>
                    <button type="button" class="modal__close-btn toolbar-btn _icon-btn" data-btn="closeModal">&#215;</button>
                </div>
                <form class="modal__body modal-new-message framing" name="newMessage" action="">
                    <div class="modal__content-column">
                        <input class="modal-new-message__title" type="text" name="messageTitle" placeholder="Введите заголовок сообщения (поле не является обязательным)">
                        <div class="modal-new-message__send-to">
                            <label class="modal-new-message__label">Кому:</label>
                            <select class="modal-new-message__select">
                                <option>Все</option>
                                <option>Сильвестров Андрей</option>
                                <option>Жалко Никита</option>
                            </select>
                        </div>
                        <textarea class="modal-new-message__text" name="messageText" placeholder="Введите такст сообщения"></textarea>
                        <div class="modal__footer toolbar">
                            <div class="modal-new-message__settings toolbar-group">
                                <button class="modal-new-message__settings-btn toolbar-btn _icon-btn" type="button" name="settings-btn">&bull;&bull;&bull;</button>
                            </div>
                            <button class="modal-new-message__submit-btn button" type="button" name="submitMessage">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>