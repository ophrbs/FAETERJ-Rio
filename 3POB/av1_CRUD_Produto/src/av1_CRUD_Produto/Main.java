package av1_CRUD_Produto;

public class Main {

	public static void main(String[] args) {
		Menu menu = new Menu();
		Produto p1 = new Produto();
		menu.exibir(p1);
		System.out.println(p1.toString());
	}

}
