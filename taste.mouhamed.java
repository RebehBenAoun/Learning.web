        public class Main {
            public static void main(String[] args) {

                String s = "";

                for (int i = 1; i <= 5; i++) {
                    for (int j = 1; j <= i; j++) {
                        s += "*";
                    }
                    s += "\n";
                }

                s += "\n";

                for (int i = 5; i >= 1; i--) {
                    for (int j = 1; j <= i; j++) {
                        s += "*";
                    }
                    s += "\n";
                }

                s += "\n";

                for (int i = 1; i <= 5; i++) {
                    for (int j = 1; j <= 5 - i; j++) {
                        s += " ";
                    }
                    for (int k = 1; k <= 2 * i - 1; k++) {
                        s += "*";
                    }
                    s += "\n";
                }

                System.out.print(s);
            }
        }