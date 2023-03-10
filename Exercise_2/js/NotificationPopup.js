class NotificationPopup {
  element = null;
  descriptionElement = null;
  closeBtnElement = null;
  defaultMessage = '{button_name} has been clicked!';

  constructor(popupElement) {
    this.element = popupElement;
    this.descriptionElement = document.querySelector(`#${this.element.id} .popup-text`);
    this.closeBtnElement = document.querySelector(`#${this.element.id} .close`);

    if (!this.element || !this.descriptionElement || !this.closeBtnElement) {
      alert('Popup elements are incorrect');
    }

    this.closeBtnElement.addEventListener('click', () => {
      this.close();
    });
  }

  open(buttonName) {
    if (!this.element.classList.contains('active')) {
      this.updateMessage(buttonName);
      this.element.classList.add('active');
    }
  }

  close() {
    if (this.element.classList.contains('active')) {
      this.element.classList.remove('active');
    }
  }

  updateMessage(buttonName) {
    this.descriptionElement.textContent = this.defaultMessage.replace('{button_name}', buttonName);
  }
}
