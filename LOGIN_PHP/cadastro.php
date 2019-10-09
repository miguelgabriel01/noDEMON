<!-- Formulário de Cadastro -->
 <form action="validacao.php" method="post">
 	<fieldset>
 		<legend>Cadastro de usuário</legend>
 		<label for="campoNome">Nome</label>
 		<input type="text" name="nome" id="campoNome">
 		<label for="campoUsuario">Login</label>
 		<input type="text" name="usuario" id="campoUsuario" maxlength="25">
 		<label for="campoSenha">Senha</label>
 		<input type="password" name="senha" id="campoSenha">
 		<label for="campoEmail">Email</label>
 		<input type="email" name="email" id="campoEmail">
        <input type="hidden" name="fonte" value="cadastro">
 		<input type="submit" value="Cadastrar">
 	</fieldset>
 	
 </form>