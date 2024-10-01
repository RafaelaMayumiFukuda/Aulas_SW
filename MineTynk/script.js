$(document).ready(function () {
  // Manipulação de DOM
  $("#add-item").click(function () {
    $("#item-list").append("<li>Item Adicionado</li>");
  });

  // Animações
  $("#fade-out").click(function () {
    $("#box").fadeOut(1000);
  });

  // Eventos
  $("#text-input").on("input", function () {
    $("#display-text").text($(this).val());
  });

  // AJAX
  $("#load-data").click(function () {
    $.ajax({
      url: "https://jsonplaceholder.typicode.com/posts",
      method: "GET",
      success: function (data) {
        $("#data-output").empty();
        data.forEach((post) => {
          $("#data-output").append(`<h3>${post.title}</h3><p>${post.body}</p>`);
        });
      },
      error: function () {
        $("#data-output").text("Erro ao carregar dados.");
      },
    });
  });

  // Manipulação de Atributos
  $("#change-src").click(function () {
    $("#image").attr(
      "src",
      "https://via.placeholder.com/150/FF0000/FFFFFF?text=Nova+Imagem"
    );
  });

  // Gerenciamento de Classes
  $("#colored-box").click(function () {
    $(this).toggleClass("box-active");
    if ($(this).hasClass("box-active")) {
      $(this).css("background-color", "orange");
    } else {
      $(this).css("background-color", "#2196F3");
    }
  });

  // Validação de Formulário
  $("#contact-form").submit(function (event) {
    event.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();

    if (name && email) {
      $("#form-message").text(`Obrigado, ${name}! Sua mensagem foi enviada.`);
      $(this).trigger("reset"); // Limpa o formulário
    } else {
      $("#form-message").text("Por favor, preencha todos os campos.");
    }
  });

  // Manipulação de Listas
  $("#sort-list").click(function () {
    var items = $("#sortable-list li").get();
    items.sort(function (a, b) {
      return $(a).text().localeCompare($(b).text());
    });
    $("#sortable-list").empty().append(items);
  });

  // Efeito de Deslizar
  $("#toggle-panel").click(function () {
    $("#slide-panel").slideToggle(500);
  });

  // Dropdown Simples
  $("#toggle-dropdown").click(function () {
    $("#dropdown-menu").slideToggle(300);
  });

  // Manipulação de Cookies
  $("#set-cookie").click(function () {
    document.cookie = "username=Exemplo; path=/";
    $("#cookie-message").text("Cookie definido!");
  });

  $("#get-cookie").click(function () {
    var cookieArr = document.cookie.split(";");
    var username = "";
    for (var i = 0; i < cookieArr.length; i++) {
      var cookiePair = cookieArr[i].split("=");
      if (cookiePair[0].trim() === "username") {
        username = cookiePair[1];
        break;
      }
    }
    if (username) {
      $("#cookie-message").text(`Cookie encontrado: ${username}`);
    } else {
      $("#cookie-message").text("Cookie não encontrado.");
    }
  });
});
