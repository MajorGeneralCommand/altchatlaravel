import FadeIn from "./components/fadeIn.js"

let fadeIn = new FadeIn()

console.log("Hei")

document.addEventListener("DOMContentLoaded", function () {
  console.log(chatContainer)
  var chatContainer = document.querySelector(".public__scroller")
  chatContainer.scrollTop = chatContainer.scrollHeight + "px"
})
