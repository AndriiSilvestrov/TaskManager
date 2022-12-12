const sendMessageBtns = document.querySelectorAll('[data-btn=newMessage]');
const closeModalBtn = document.querySelectorAll('[data-btn=closeModal]');
const modalWindow = document.querySelector('.modals__cover');

if (sendMessageBtns && modalWindow) {
    sendMessageBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            modalWindow.classList.add('_open');
        });
    });
}

if (closeModalBtn && modalWindow) {
    closeModalBtn.forEach(btn => {
        btn.addEventListener('click', function () {
            modalWindow.classList.remove('_open');
        });
    });
}