const buttonsContainerElement = document.querySelector('.welcome-section .buttons-list');
const popupElement = document.querySelector('#action-notification-popup');
const PopupInstance = new NotificationPopup(popupElement);

const buttonsClickHandler = (event) => {
  const targetElement = event.target;

  if (targetElement.tagName === 'BUTTON') {
    const buttonName = targetElement.textContent;
    PopupInstance.open(buttonName);
  }
}

buttonsContainerElement.addEventListener('click', buttonsClickHandler);