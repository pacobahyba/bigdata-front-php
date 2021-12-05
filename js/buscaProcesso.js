$(function () {
  $("#btBuscaProcesso").on("click", function () {
    let numProcesso = $("#numProcesso").val();
    if (!numProcesso) {
      alert("Preencha um número");
      return false;
    }
    buscaProcesso(numProcesso);
  });
});

function buscaProcesso(numero) {
  $("#loading").prop("hidden", false);
  $.ajax("https://apibigdataufrj.azurewebsites.net/api/Processos/" + numero, {
    success: function (data) {
      montaProcesso(data);
    },
    complete: function (xhr, textStatus) {
      console.log(textStatus);
      $("#loading").prop("hidden", true);
      if (xhr.status == 404) {
        alert("Processo não encontrado.");
      }
    },
  });
}

function montaProcesso(dadosProcesso) {
  $.ajax({
    method: "POST",
    url: "template/processo.php",
    data: dadosProcesso,
  }).done(function (resultados) {
    $("#resultados").html(resultados);
  });
}
