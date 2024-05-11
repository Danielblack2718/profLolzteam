function openModal(id) {
  var modal = document.getElementById(id);
  var closeButton = modal.querySelector("#close");

  if (modal && closeButton) {
    modal.classList.remove("hidden");
    document.body.style.overflow = "hidden";
    setTimeout(() => {
      modal.classList.add("active");
    }, 1);

    closeButton.addEventListener("click", function () {
      modal.classList.remove("active");
      document.body.style.overflow = "auto";
      setTimeout(function () {
        modal.classList.add("hidden");
      }, 300); // Задержка, чтобы анимация завершилась перед скрытием
    });

    window.addEventListener("click", function (event) {
      if (event.target === modal) {
        modal.classList.remove("active");
        document.body.style.overflow = "auto";
        setTimeout(function () {
          modal.classList.add("hidden");
        }, 300); // Задержка, чтобы анимация завершилась перед скрытием
      }
    });
  }
}
