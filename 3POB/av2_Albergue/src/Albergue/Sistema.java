package Albergue;
import java.util.Scanner;
import java.util.ArrayList;

public class Sistema {
    Scanner sc = new Scanner(System.in);
    ArrayList<Cliente> listaClientes = new ArrayList<>();
    ArrayList<Quarto> listaQuartos = new ArrayList<>();
    ArrayList<Cama> listaCamas = new ArrayList<>();
    ArrayList<Reserva> listaReservas = new ArrayList<>();
    public void iniciar() {
        int opcao;
        do {
            System.out.println("Quais funcionalidades você deseja acsesar?");
            System.out.println("1 - Cliente");
            System.out.println("2 - Quarto");
            System.out.println("3 - Cama");
            System.out.println("4 - Reserva");
            System.out.println("0 - Finalizar programa");

            opcao = sc.nextInt();

            switch(opcao) {
                case 1:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Cliente");
                        System.out.println("2 - Alterar Cliente");
                        System.out.println("3 - Excluir Ciente");
                        System.out.println("4 - Listar Clientes");
                        System.out.println("0 - Finalizar programa");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: this.incluirCliente();
                                break;

                            case 2: this.alterarCliente();
                                break;

                            case 3: this.excluirCliente();
                                break;

                            case 4: this.listarClientes();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }

                    } while (opcao != 0);
                    break;

                case 2:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Quarto");
                        System.out.println("2 - Alterar Quarto");
                        System.out.println("3 - Excluir Quarto");
                        System.out.println("4 - Listar Quarto");
                        System.out.println("0 - Finalizar programa");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: Quarto.incluir();
                                break;

                            case 2: Quarto.alterar();
                                break;

                            case 3: Quarto.excluir();
                                break;

                            case 4: Quarto.listar();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }

                    } while (opcao != 0);
                    break;

                case 3:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Cama");
                        System.out.println("2 - Alterar Cama");
                        System.out.println("3 - Excluir Cama");
                        System.out.println("4 - Listar Cama");
                        System.out.println("0 - Finalizar programa");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: Cama.incluir();
                                break;

                            case 2: Cama.alterar();
                                break;

                            case 3: Cama.excluir();
                                break;

                            case 4: Cama.listar();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }
                    }
                    break;

                case 4:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Reserva");
                        System.out.println("2 - Alterar Reserva");
                        System.out.println("3 - Excluir Reserva");
                        System.out.println("4 - Listar Reservas");
                        System.out.println("0 - Finalizar programa");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: Reserva.incluir();
                                break;

                            case 2: Reserva.alterar();
                                break;

                            case 3: Reserva.excluir();
                                break;

                            case 4: Reserva.listar();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }
                    }
                    break;

                case 0: System.out.println("Programa Finalizado");
                    break;

                default: System.out.println("Opcao invalida");
                    break;
            }

        } while (opcao != 0);
    }

    //FUNÇÕES CLIENTE
    public void incluirCliente(Cliente cliente) {
        for (int i = 0; i < listaClientes.size(); i++) {
            if (listaClientes.get(i).getId() == cliente.getId()) {
                System.out.println("Cliente ja esta incluido!");
                return;
            }
        }

        listaClientes.add(cliente);
        System.out.println("Cliente incluido!");
    }

    //FUNÇÕES QUARTO
    public void incluirQuarto(Quarto quarto) {
        for (int i = 0; i < listaQuartos.size(); i++) {
            if (listaQuartos.get(i).getId() == quarto.getId()) {
                System.out.println("Quarto ja esta incluido!");
                return;
            }
        }

        listaQuartos.add(quarto);
        System.out.println("Quarto incluido!");
    }
}
