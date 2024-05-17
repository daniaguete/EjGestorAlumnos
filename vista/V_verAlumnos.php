<div class="container">
    <h2>Alumnos.</h2>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnosData as $alumno) : ?>
                    <tr class="">
                        <?php foreach ($alumno as $key => $value) : ?>
                            <td scope="row"><?= $value ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>