<?php require_once '../resources/layouts/header.php'; ?>

<div class="container mt-4">
    <h1>Criar Aluno</h1>
    <form action="index.php?action=create" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="form-group">
            <label for="mensalidade">Mensalidade</label>
            <input type="text" class="form-control" id="mensalidade" name="mensalidade">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <div class="form-group">
            <label for="situacao">Situação</label>
            <select class="form-control" id="situacao" name="situacao">
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="observacao">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once '../resources/layouts/footer.php'; ?>
