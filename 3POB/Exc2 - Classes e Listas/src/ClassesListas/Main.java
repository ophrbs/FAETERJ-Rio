package ClassesListas;

public class Main {
    public static void main(String[] args) {
        Produto p1 = new Produto();
        Produto p2 = new Produto();

        p1.criar();
        p2.criar();

        System.out.println(p1);
        System.out.println(p2);
    }
}