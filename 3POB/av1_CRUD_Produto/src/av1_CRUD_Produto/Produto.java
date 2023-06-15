package av1_CRUD_Produto;
import java.util.Scanner;

public class Produto {
	Scanner sc = new Scanner(System.in);
	
	public int id, codBarras, sku;
	public double preco, peso;
	public String nome, descricao, categoria, fabricante;
	
	//CONSTRUCTOR
	public Produto() {
	}
	
	public Produto(int id, int codBarras, int sku, double preco, double peso, String nome, String descricao,
			String categoria, String fabricante) {
		super();
		this.id = id;
		this.codBarras = codBarras;
		this.sku = sku;
		this.preco = preco;
		this.peso = peso;
		this.nome = nome;
		this.descricao = descricao;
		this.categoria = categoria;
		this.fabricante = fabricante;
	}

	//GETTERS AND SETTERS
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getCodBarras() {
		return codBarras;
	}

	public void setCodBarras(int codBarras) {
		this.codBarras = codBarras;
	}

	public int getSku() {
		return sku;
	}

	public void setSku(int sku) {
		this.sku = sku;
	}

	public double getPreco() {
		return preco;
	}

	public void setPreco(double preco) {
		this.preco = preco;
	}

	public double getPeso() {
		return peso;
	}

	public void setPeso(double peso) {
		this.peso = peso;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}

	public String getCategoria() {
		return categoria;
	}

	public void setCategoria(String categoria) {
		this.categoria = categoria;
	}

	public String getFabricante() {
		return fabricante;
	}

	public void setFabricante(String fabricante) {
		this.fabricante = fabricante;
	}
	
	//METODOS
	@Override
	public String toString() {
		return "Produto [id=" + id + ", codBarras=" + codBarras + ", sku=" + sku + ", preco=" + preco
				+ ", peso=" + peso + ", nome=" + nome + ", descricao=" + descricao + ", categoria=" + categoria
				+ ", fabricante=" + fabricante + "]";
	}
	
	
}
