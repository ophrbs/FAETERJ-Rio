package av1_CRUD_Produto;
import java.util.Objects;
import java.util.Scanner;
import java.util.ArrayList;

public class Menu {
	Scanner sc = new Scanner(System.in);
	ArrayList<Produto> lista = new ArrayList<>();

	public void exibir(Produto p) {
		int opcao;
		do {
			System.out.println("O que deseja fazer?");
			System.out.println("1 - Adicionar dados do produto");
			System.out.println("2 - Incluir produto");
			System.out.println("3 - Alterar dados do produto");
			System.out.println("4 - Excluir produto");
			System.out.println("5 - Listar todos os produtos incluidos");
			System.out.println("6 - Listar um produto por ID");
			System.out.println("0 - Finalizar programa");

			opcao = sc.nextInt();

			switch(opcao) {
				case 1: this.criar(p);
					break;

				case 2: this.incluir(p);
					break;

				case 3: this.alterar(p);
					break;

				case 4: this.excluir(p);
					break;

				case 5: this.listarTodos();
					break;

				case 6: this.listarUm(p);
					break;

				case 0: System.out.println("Programa Finalizado");
					break;

				default: System.out.println("Opcao invalida");
					break;
			}

		} while (opcao != 0);
	}

	public void criar(Produto p) {
		System.out.println("Digite o Id do produto:");
		p.setId(sc.nextInt());

		System.out.println("Digite o codigo de barras do produto:");
		p.setCodBarras(sc.nextInt());

		System.out.println("Digite o SKU do produto:");
		p.setSku(sc.nextInt());
		sc.nextLine(); //limpar o buffer

		System.out.println("Digite o nome do produto:");
		p.setNome(sc.nextLine());

		System.out.println("Digite a descricao do produto:");
		p.setDescricao(sc.nextLine());

		System.out.println("Digite a categoria do produto:");
		p.setCategoria(sc.nextLine());

		System.out.println("Digite o preco do produto:");
		p.setPreco(sc.nextDouble());

		System.out.println("Digite o peso do produto:");
		p.setPeso(sc.nextDouble());
		sc.nextLine(); //limpar o buffer

		System.out.println("Digite o fabricante do produto:");
		p.setFabricante(sc.nextLine());

		System.out.println("Produto criado, Deseja adicionar a lista? (Digite 1 para adicionar)");
		int add = sc.nextInt();
		if(add == 1) {
			incluir(p);
		} else {
			System.out.println("Produto criao, mas nao adiconado a lista");
		}
	}

	public void incluir(Produto p) {
		for (int i = 0; i < lista.size(); i++) {
			if (lista.get(i).getId() == p.getId()) {
				System.out.println("Produto ja esta na lista!");
				return;
			}
		}

		lista.add(p);
		System.out.println("Produto adicionado!");
	}

	public void alterar(Produto p) {
		int opcao;

		do {
			System.out.println("O que voce deseja alterar?");
			System.out.println("1 - Id");
			System.out.println("2 - Codigo de Barras");
			System.out.println("3 - SKU");
			System.out.println("4 - Nome");
			System.out.println("5 - Descricao");
			System.out.println("6 - Categoria");
			System.out.println("7 - Preco");
			System.out.println("8 - Peso");
			System.out.println("9 - Fabricante");
			System.out.println("0 - Finalizar Alteracao");

			opcao = sc.nextInt();

			switch(opcao) {
				case 1:
					System.out.println("Digite o novo Id do produto:");
					p.setId(sc.nextInt());
					System.out.println("ID alterado!");
					break;

				case 2:
					System.out.println("Digite o novo codigo de barras do produto:");
					p.setCodBarras(sc.nextInt());
					System.out.println("Codigo de Barras alterado!");
					break;

				case 3:
					System.out.println("Digite o novo SKU do produto:");
					p.setSku(sc.nextInt());
					System.out.println("SKU alterado!");
					break;

				case 4:
					sc.nextLine();
					System.out.println("Digite o novo nome do produto:");
					p.setNome(sc.nextLine());
					System.out.println("Nome alterado!");
					break;

				case 5:
					sc.nextLine();
					System.out.println("Digite a nova descricao do produto:");
					p.setDescricao(sc.nextLine());
					System.out.println("Descricao alterada!");
					break;

				case 6:
					sc.nextLine();
					System.out.println("Digite a nova categoria do produto:");
					p.setCategoria(sc.nextLine());
					System.out.println("Categoria alterado!");
					break;

				case 7:
					System.out.println("Digite o novo preco do produto:");
					p.setPreco(sc.nextDouble());
					System.out.println("Preco alterado!");
					break;

				case 8:
					System.out.println("Digite o novo peso do produto:");
					p.setPeso(sc.nextDouble());
					System.out.println("Peso alterado!");
					break;

				case 9:
					sc.nextLine();
					System.out.println("Digite o novo fabricante do produto:");
					p.setFabricante(sc.nextLine());
					System.out.println("Fabricante alterado!");
					break;

				case 0:
					System.out.println("Alteracao finalizada:");

				default: System.out.println("Opcao invalida");
					break;
			}

		} while (opcao != 0);
	}

	public void excluir(Produto p) {
		lista.remove(p);
		System.out.println("Produto removido!");
	}

	public void listarTodos() {
		System.out.println("Lista de produtos:");
		for (int i = 0; i < lista.size(); i++) {
			System.out.println(lista.get(i));
		}
	}

	public void listarUm(Produto p) {
		int id;
		System.out.println("Digite o ID  do produto a ser buscado:");
		id = sc.nextInt();
		for (int i = 0; i < lista.size(); i++) {
			if (lista.get(i).getId() == id) {
				System.out.println(lista.get(i));
				return;
			}
		}
		System.out.println("Nenhum produto encontrado com essa ID");
	}
}
