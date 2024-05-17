<div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Introduce el codigo del alumno a dar de baja." required />
        </div>
        <button name="baja" type="submit" class="btn btn-primary">
            Dar de baja.
        </button>
    </form>
    <?php if (isset($borrado)) : ?>
        <hr />
        <div class="alert alert-success" role="alert">
            <strong>Borrado Correctamente.</strong>
        </div>
    <?php endif; ?>
</div>