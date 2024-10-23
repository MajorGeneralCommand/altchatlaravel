import "./bootstrap"
import Alpine from "alpinejs"
import ChatMenuHandler from "./components/chatMenuHandler"

window.Alpine = Alpine

Alpine.start()

document.addEventListener("DOMContentLoaded", function () {
  var chatContainer = document.querySelector(".public__scroller")
  chatContainer.scrollTop = chatContainer.scrollHeight
})

let ChatHandler = new ChatMenuHandler()
