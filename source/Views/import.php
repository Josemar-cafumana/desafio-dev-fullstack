<?php $v->layout('_theme')  ?>


<div class="card card-transacao" style="display: block;">
    <h2 >Upload de arquivo</h2>
        <form action="<?= $router->route('web.store') ?>" method="POST" enctype="multipart/form-data">
            <div class="file">
                 <label for="arquivo"><i class='bx bx-cloud-upload'></i></label>
                 <input type="file" class="d-none" name="arquivo" id="arquivo">
            </div>

            <button class="btn" type="submit">Enviar</button>
        </form>
    </div>