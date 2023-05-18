package ClassesListas;
import java.util.Scanner;

public class Produto {
    Scanner scan = new Scanner(System.in);

    //ATRIBUTOS
    String nome, descricao;
    float valor;
    int qntd, codBarra;

    //METODOS
    public void criar() {
        System.out.print("Digite o nome do produto: ");
        this.setNome(scan.nextLine());

        System.out.print("Digite a descrição do produto: ");
        this.setDescricao(scan.nextLine());

        System.out.print("Digite o valor do produto: ");
        this.setValor(scan.nextFloat());

        System.out.print("Digite a quantidade: ");
        this.setQntd(scan.nextInt());

        System.out.print("Digite o codigo de barra: ");
        this.setCodBarra(scan.nextInt());

        System.out.println("Produto " + this.getNome() + " criado com sucesso!");

    }

    @Override
    public String toString() {
        return
                "\nNome do produto: " + this.getNome() +
                "\nDescrição: " + this.getDescricao() +
                "\nValor: R$" + this.getValor() +
                "\nQuantidade: " + this.getQntd() + " unidades" +
                "\nCódigo de Barras: " + this.getCodBarra();
    }

    //GETTERS AND SETTERS
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

    public float getValor() {
        return valor;
    }

    public void setValor(float valor) {
        this.valor = valor;
    }

    public int getQntd() {
        return qntd;
    }

    public void setQntd(int qntd) {
        this.qntd = qntd;
    }

    public int getCodBarra() {
        return codBarra;
    }

    public void setCodBarra(int codBarra) {
        this.codBarra = codBarra;
    }
}
