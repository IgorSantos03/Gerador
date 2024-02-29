<?= $this->layout('__template') ?>
<link rel="stylesheet" href="css/home.css">
<br>
<br>
<br>
<div class="containerHome">
    <div class="col-md-5  caixa">
        <form id="form" class="column">
            <div class="summer">
                <textarea class="form-control" class="quebra" id="texto" name="texto" rows="5"></textarea>
            </div>
            <button id="gerar" class="btn mt-4 bg-light" type="button">Gerar</button>
        </form>
    </div>
    <div class="col-md-6  caixa" id="code">
        <textarea name="conteudo" id="conteudo" cols="60" rows="8" class="resultado px-2 pt-2" readonly placeholder="Aqui será gerado o conteudo em html
        "></textarea>
    </div>
</div>
<br>
<br>
<br>

<script src="js/home.js"></script>