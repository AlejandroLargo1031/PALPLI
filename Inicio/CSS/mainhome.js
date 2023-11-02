document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.nav__button--inside');
    const rectangles = document.querySelectorAll('.rectangle');

    buttons.forEach((button, index) => {
        button.addEventListener('click', function() {
   
            const isRectangleVisible = rectangles[index].classList.contains('visible');

       
            rectangles.forEach(rectangle => {
                rectangle.classList.remove('visible');
            });

            if (!isRectangleVisible) {
                rectangles[index].classList.add('visible');
            }
        });
    });

    const listElements = document.querySelectorAll('.list__button--click');
    listElements.forEach(listElement => {
        listElement.addEventListener('click', () => {
            listElement.classList.toggle('arrow');
            let height = 0;
            let menu = listElement.nextElementSibling;
            if (menu.clientHeight === 0) {
                height = menu.scrollHeight;
            }
            menu.style.height = `${height}px`;
        });
    });
});
