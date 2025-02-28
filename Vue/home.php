<main class="container">
    <h1>Etudiants</h1>
    <section class="row">
        <div class="col-3">
        </div>
        <div class="col-9">
            <a href=<?php echo URL ?>class="btn btn-primary mb-3"></a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>email</th>
                        <th>cv</th>
                        <th>date de naissance</th>
                        <th>admin</th>
                        <th>date mise à jour</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($étudiants as $étudiant) : ?>
                        <tr>
                            <td><?php echo $étudiant["id"] ?></td>
                            <td><?php echo $étudiant["nom"] ?></td>
                            <td><?php echo $étudiant["prenom"] ?></td>
                            <td><?php echo $étudiant["email"] ?></td>
                            <td><?php echo $étudiant["cv"] ?></td>
                            <td><?php echo $étudiant["dt_naissance"] ?></td>
                            <td><?php echo $étudiant["isAdmin"] ?></td>
                            <td><?php echo $étudiant["dt_mis_a_jour"] ?></td>
                            </td>
                        </tr>
                    <?php endforeach ?>



                </tbody>
            </table>
        </div>
    </section>
</main>