package Calculadora;
import java.util.Scanner;
public class Calculadora{
    Scanner scan = new Scanner(System.in);

    //ATRIBUTOS
    public float x, y, resultado;
    public int operacao;
    public String simbolo;

    //METODOS
    public void iniciar() {
        System.out.println("Qual operação será feita?");
        System.out.println("1- Soma\n2- Subtração\n3- Divisão\n4- Multiplicação");
        this.setOperacao(scan.nextInt());
        System.out.println("Digite o primeiro valor:");
        this.setX(scan.nextFloat());
        System.out.println("Digite o segundo valor:");
        this.setY(scan.nextFloat());

        switch (operacao) {
            case 1 -> {
                this.setResultado(this.soma(x, y));
                this.setSimbolo("+");
            }
            case 2 -> {
                this.setResultado(this.subtrai(x, y));
                this.setSimbolo("-");
            }
            case 3 -> {
                this.setResultado(this.divide(x, y));
                this.setSimbolo("÷");
            }
            case 4 -> {
                this.setResultado(this.multiplica(x, y));
                this.setSimbolo("×");
            }
        }

        this.exibir();
    }

    public void exibir() {
        System.out.format("%.2f %s %.2f = %.2f", this.getX(), this.getSimbolo(), this.getY(), this.getResultado());
    }

    //OPERAÇÕES MATEMÁTICAS
    public float soma(float x, float y) {
        return x+y;
    }

    public float subtrai(float x, float y) {
        return x-y;
    }
    public float divide(float x, float y) {
        return x / y;
    }
    public float multiplica(float x, float y) {
        return x*y;
    }

    //GETTERS & SETTERS
    public float getX() {
        return x;
    }

    public void setX(float x) {
        this.x = x;
    }

    public float getY() {
        return y;
    }

    public void setY(float y) {
        this.y = y;
    }

    public float getResultado() {
        return resultado;
    }

    public void setResultado(float resultado) {
        this.resultado = resultado;
    }

    public int getOperacao() {
        return operacao;
    }

    public void setOperacao(int operacao) {
        this.operacao = operacao;
    }

    public String getSimbolo() {
        return simbolo;
    }

    public void setSimbolo(String simbolo) {
        this.simbolo = simbolo;
    }
}
