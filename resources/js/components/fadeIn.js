class FadeIn {
  constructor() {
    console.log("Hei!")
    this.options = {
      threshold: 0.75,
    }
    this.observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active")
        }
      })
    }, this.options)

    const elementsToObserve = document.querySelectorAll(".fade-in")
    elementsToObserve.forEach(element => this.observer.observe(element))
  }
}

export default FadeIn
