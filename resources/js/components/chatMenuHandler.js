class ChatMenuHandler {
  constructor() {
    this.chatMenu = document.querySelector(".public__scroller-inner")

    this.chatMenu.addEventListener("contextmenu", ev => {
      if (!ev.target.classList.contains("public__chat")) {
        return
      } else {
      }
    })
  }
}

export default ChatMenuHandler
