import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        Double x, y, resposta;
        String operacao;

        System.out.println("Digite o valor x: ");
        x = scan.nextDouble();

        System.out.println("Digite a operação matemática (+ , - , * ou /): ");
        operacao = scan.next();

        System.out.println("Digite o valor y: ");
        y = scan.nextDouble();

        resposta = calculo(x, operacao, y);

        System.out.println("Resultado: " + resposta);
    }

    public static Double calculo(Double x, String operacao, Double y) {
        Double resposta = 0.0;

        switch (operacao) {
            case "+": resposta = x + y;
            break;

            case "-": resposta = x - y;
            break;

            case "*": resposta = x * y;
            break;

            case "/": resposta = x / y;
            break;

            default:
                System.out.println("ERRO: Operações disponiveis: + , - , * , /");
        }

        return resposta;
    }
}