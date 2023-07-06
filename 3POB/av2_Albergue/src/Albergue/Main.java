package Albergue;

public class Main {
    public static void main(String[] args) {
        Sistema sistema = new Sistema();
        Cliente c1 = new Cliente('1', "leandro", "rua ali perto", "111789123", "brasil", "103107989", "147852369", "leandro@email.com", "2001,05,15");

        sistema.iniciar();
    }
}