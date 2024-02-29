$('#texto').summernote({
  placeholder: 'Coloque o conteudo aqui',
  tabsize: 2,
  height: 120,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['view', ['help']]
  ]
});

$(document).ready(function () {

  $("#gerar").click(function () {

    salvar();
  });

});

function salvar() {
  var form = document.getElementById("form");
  const formData = new FormData(form);
  const url = "./src/model/home/preencherLista.php";
  fetch(url, {
    body: formData,
    method: 'POST',
  }).then((response) => {
    return response.text();
  }).then((response) => {
    mostrar();
  }).catch(error => {
    console.error('Ocorreu um erro:', error);
  });

}

function mostrar() {
  const url = "./src/model/home/listar.php";
  fetch(url, {
      method: 'GET',
  }).then((response) => {
      return response.text();
  }).then((response) => {
      const data = JSON.parse(response);
      var html = ``;
      data.map(function (item) {
        html+=`<textarea name="conteudo" id="conteudo" cols="60" rows="15" class="resultado px-2 pt-2" readonly>
        ${item.texto}</textarea>`;
        
      });
      document.getElementById("code").innerHTML = html;

  }).catch(error => {
      console.error('Ocorreu um erro:', error);
  });
}