<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>
<form method="post">
    <?= $form->input('email', 'Mail',null/*['onblur' => 'verifNom(this)']*/); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>