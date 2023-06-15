package av1_CRUD_Produto;
import java.util.Scanner;
import java.util.ArrayList;

public class Menu {
	Scanner sc = new Scanner(System.in);
	ArrayList<Produto> lista = new ArrayList<>();
	
	public void exibir(Produto p) {
		int opcao;
		do {
		System.out.println("O que deseja fazer?");
		System.out.println("1 - Incluir produto");
		System.out.println("2 - Alterar produto");
		System.out.println("3 - Excluir produto");
		System.out.println("4 - Listar todos produtos");
		System.out.println("5 - Listar um produto");
		System.out.println("0 - Finalizar programa");
		
		opcao = sc.nextInt();
		
		switch(opcao) {
		case 1: this.incluir(p);
		break;
		
		case 2: this.alterar(p);
		break;
		
		case 3: this.excluir(p);
		break;
		
		case 4: this.listarTodos();
		break;
		
		case 5: this.listarUm(p);
		break;
		
		case 0: System.out.println("Programa Finalizado");
		break;
		
		default: System.out.println("Opcao invalida");
		break;
		}
		
		} while (opcao != 0);
	}
	
	public void incluir(Produto p) {
		System.out.println("Digite o Id do produto:");
		p.setId(sc.nextInt());
	
		System.out.println("Digite o codigo de barras do produto:");
		p.setCodBarras(sc.nextInt());
	
		System.out.println("Digite o SKU do produto:");
		p.setSku(sc.nextInt());
	
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
	
		System.out.println("Digite o fabricante do produto:");
		p.setFabricante(sc.nextLine());
		
		lista.add(p);
		
		System.out.println("Item adicionado!");
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
		break;
		
		case 2:
			System.out.println("Digite o novo codigo de barras do produto:");
			p.setCodBarras(sc.nextInt());
		break;
		
		case 3:
			System.out.println("Digite o novo SKU do produto:");
			p.setSku(sc.nextInt());
		break;
		
		case 4: 
			System.out.println("Digite o novo nome do produto:");
			p.setNome(sc.nextLine());
		break;
		
		case 5:
			System.out.println("Digite a nova descricao do produto:");
			p.setDescricao(sc.nextLine());
		break;
		
		case 6: 
			System.out.println("Digite a nova categoria do produto:");
			p.setCategoria(sc.nextLine());
		break;
		
		case 7:
			System.out.println("Digite o novo preco do produto:");
			p.setPreco(sc.nextDouble());
		break;
		
		case 8:
			System.out.println("Digite o novo peso do produto:");
			p.setPeso(sc.nextDouble());
		break;
		
		case 9:
			System.out.println("Digite o novo fabricante do produto:");
			p.setFabricante(sc.nextLine());
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
		System.out.println("Item removido!");
	}
	
	public void listarTodos() {
		lista.toString();
	}
	
	public void listarUm(Produto p) {
		System.out.println(p.toString());
	}
}
