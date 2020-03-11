<?php

	namespace rafael\financas\model\bo;

	include_once '..\autoload.php';

	use \Exception;
	use rafael\financas\model\entity\carteira;
	use rafael\financas\model\dao\dao_carteira;
	
	class bo_carteira {
		
		public function salvar(string $nome, int $tipo, int $dono, bool $ativo) {
			try{
				$carteira = new carteira(0, $nome, $tipo, $dono, $ativo);
				$dao_carteira = new dao_carteira();
				return $dao_carteira -> salvar($carteira);
			} catch (Exception $e) {
				$retorno  = "Erro ao salvar um objeto 'Carteira' (Código do erro: ".$e -> getCode().").<br>";
				$retorno .= $e -> getMessage();
				return $retorno;
			}
		}
		
		public function atualizar(int $codigo, string $nome, int $tipo, int $dono, bool $ativo) {
			
			try{
				$carteira = new carteira($codigo, $nome, $tipo, $dono, $ativo);
				$dao_carteira = new dao_carteira();
				return $dao_carteira -> atualizar($carteira);
			} catch (Exception $e) {
				$retorno  = "Erro ao atualizar um objeto 'Carteira' (Código do erro: ".$e -> getCode().").<br>";
				$retorno .= $e -> getMessage();
				return $retorno;
			}
		}
		
		public function buscarPorFiltro(string $nome = null, int $tipo = null, int $dono = null, bool $ativo = null) {
			try{
				$parametros = array("nome" => $nome, "tipo" => $tipo, "dono" => $dono, "ativo" => $ativo);
				$dao_carteira = new dao_carteira();
				return $dao_carteira -> pesquisar($parametros);
			} catch (Exception $e) {
				$retorno  = "Erro ao buscar o objeto 'Carteira' (Código do erro: ".$e -> getCode().").<br>";
				$retorno .= $e -> getMessage();
				return $retorno;
			}
		}
		
		public function buscarPorCodigo(int $codigo) {
			try{
				$parametros = array("codigo" => $codigo);
				$dao_carteira = new dao_carteira();
				return $dao_carteira -> pesquisar($parametros);
			} catch (Exception $e) {
				$retorno  = "Erro ao buscar o objeto 'Carteira' (Código do erro: ".$e -> getCode().").<br>";
				$retorno .= $e -> getMessage();
				return $retorno;
			}
		}
		
		public function buscarAtivos() {
			try{
				$parametros = array("ativo" => true);
				$dao_carteira = new dao_carteira();
				return $dao_carteira -> pesquisar($parametros);
			} catch (Exception $e) {
				$retorno  = "Erro ao buscar o objeto 'Carteira' (Código do erro: ".$e -> getCode().").<br>";
				$retorno .= $e -> getMessage();
				return $retorno;
			}
		}
		
		public function buscarInativos() {
			try{
				$parametros = array("ativo" => false);
				$dao_carteira = new dao_carteira();
				return $dao_carteira -> pesquisar($parametros);
			} catch (Exception $e) {
				$retorno  = "Erro ao buscar o objeto 'Carteira' (Código do erro: ".$e -> getCode().").<br>";
				$retorno .= $e -> getMessage();
				return $retorno;
			}
		}
		
	}
	
?>