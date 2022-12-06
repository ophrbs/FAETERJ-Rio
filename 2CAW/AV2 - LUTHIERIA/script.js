// slides
var contador = 1;

setInterval(slide, 3000);

function slide() {
  document.getElementById("slide" + contador).checked = true;
  contador++;

  if (contador > 3) {
    contador = 1;
  }
}

//alerta newsletter
function alertaNewsletter() {
  alert(
    "Assinatura concluida com sucesso!\nAgora você estará por dentro das novidades da LUTHIERIA!"
  );
}

//alerta orçamento
function alertaOrcamento() {
  alert(
    "Mensagem enviada com sucesso!\nEntrarem em contato em até 5 dias úteis."
  );
}
