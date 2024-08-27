<?php require_once '../resources/layouts/header.php'; ?>

<div class="container mt-4">
    <h1>Editar Aluno</h1>
    <form action="index.php?action=edit&id=<?php echo $this->model->id; ?>" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $this->model->nome; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $this->model->email; ?>" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $this->model->telefone; ?>">
        </div>
        <div class="form-group">
            <label for="mensalidade">Mensalidade</label>
            <input type="text" class="form-control" id="mensalidade" name="mensalidade" value="<?php echo $this->model->mensalidade; ?>">
        </div>
        <div class="form-group">
            <label for="situacao">Situação</label>
            <select class="form-control" id="situacao" name="situacao">
                <option value="ativo" <?php echo $this->model->situacao == 'ativo' ? 'selected' : ''; ?>>Ativo</option>
                <option value="inativo" <?php echo $this->model->situacao == 'inativo' ? 'selected' : ''; ?>>Inativo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="observacao">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao"><?php echo $this->model->observacao; ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once '../resources/layouts/footer.php'; ?>
