<div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Introduce el codigo del alumno a buscar." required />
        </div>
        <button name="buscar" type="submit" class="btn btn-primary">
            Buscar
        </button>
    </form>
    <?php if (isset($alumnoBusc)) : ?>
        <hr />
        <?php if ($alumnoBusc == '') : ?>
            <div class="alert alert-primary" role="alert">
                <strong>No existe ningun alumno con ese codigo</strong>
            </div>
        <?php else : ?>
            <div class="container">
                <h3>alumno encontrado.</h3>
                <p>- Codigo : <?= $alumnoBusc['cod']?> </p>
                <p>- Nombre : <?= $alumnoBusc['nombre']?> </p>
                <p>- Nota : <?= $alumnoBusc['nota']?> </p>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>