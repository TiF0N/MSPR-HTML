<?php include_once 'includes/header.php'; ?>

<section id="jumbotron" style="background-image: url(public/images/ile-de-versaille.png);">
    <div class="jumbotron">
        <h1>Nous contacter !</h1>
    </div>
</section>
<section id="container">
    <div class="form">
        <h2>Besoins d'informations ? Demandez nous !</h2>
                <form action="" methode="POST">

                    <div class="form-group">
                        <label for="last_name">Nom</label>
                        <input type="texte" id="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="first_name">Prénom</label>
                        <input type="texte" id="first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control"></textarea>
                    </div>
                    <button class="btn">
                        Envoyer
                    </button>
                </form>
</section>
<section id="container">
    <div class="pre-footer">
        <h2>Vous souhaitez plus d'informations ?</h2>
        <p>Vous avez déjà visiter nos pages Facebook et Instagram ? Vous avez aussi essayer de venir nous voir mais
            personnes n'étais disponible ? Envoyez donc nous un email comportant toutes les informations nécessaires à
            accomplir votre demande dans les plus brefs délais (et oui nous sommes rapides !).</p>
        <button class="btn-primary">
            Nous contacter
        </button>
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>
